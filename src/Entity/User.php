<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity(
 *  fields={"email"},
 *  message="L'email est déjà utilisé"
 * )
 */
class User implements UserInterface, \Serializable
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     * @Assert\Email()
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     */
    private $username;

    /**
     * @var string|null
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=true)
     * @Assert\Length(min="8", minMessage="Le mot de passe doit faire 8 caractères minimum")
     */
    private $password;

    /**    
     * @Assert\EqualTo(propertyPath="password", message="Le mot de passe n'est pas identique au premier")
     */
    public $password_confirm;
    
    public $passwordOld;

    /**
     * @var bool
     *
     * @ORM\Column(name="google_oauth", type="boolean", nullable=false)
     */
    private $googleOauth;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=255, nullable=false)     
     */
    private $language;

     /**
     * @ORM\Column(name="roles", type="json", nullable=false)
     */
    private $roles;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;
   
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getPasswordConfirm(): ?string
    {
        return $this->password_confirm;
    }

    public function setPasswordConfirm(?string $password_confirm): self
    {
        $this->password_confirm = $password_confirm;

        return $this;
    }

    public function getPasswordOld(): ?string
    {
        return $this->passwordOld;
    }

    public function setPasswordOld(?string $passwordOld): self
    {
        $this->passwordOld = $passwordOld;

        return $this;
    }

    public function getGoogleOauth(): ?bool
    {
        return $this->googleOauth;
    }

    public function setGoogleOauth(bool $googleOauth): self
    {
        $this->googleOauth = $googleOauth;

        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(string $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function eraseCredentials() {
        
    }

    public function getSalt() {
        
    }

    public function getRoles(): array 
    {
        $roles = $this->roles;
        $roles[] = 'ROLE_USER'; // guarantee evey user at least has ROLE_USER
        return array_unique($roles);
    } 

    public function setRoles(array $roles): self 
    {
        $this->roles = $roles;

        return $this;
    } 

     /**
     * @see \Serializable::serialize()
     */
    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,            
            // see section on salt below
            // $this->salt,
        ));
    }

    /**
     * @see \Serializable::unserialize()
     */
    public function unserialize($serialized)
    {
        list (
            $this->id,
            $this->username,
            $this->password,                        
            // see section on salt below
            // $this->salt
        ) = unserialize($serialized);
    }
}