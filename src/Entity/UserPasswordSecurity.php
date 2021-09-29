<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserPasswordSecurity
 *
 * @ORM\Table(name="user_password_security")
 * @ORM\Entity(repositoryClass="App\Repository\UserPasswordSecurityRepository")
 */
class UserPasswordSecurity
{
    /**
     * @var string
     *
     * @ORM\Column(name="nonce", type="string", length=255, nullable=false)
     * @ORM\Id     
     */
    private $nonce;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="expiredAt", type="datetime", nullable=false)
     */
    private $expiredat;   

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     */
    private $user_id;

    public function setUser(?int $user_id)
    {
        return $this->user_id = $user_id;
    }

    public function getUser(): ?int
    {
        return $this->user_id;
    }
 
    public function setNonce(?string $nonce)
    {
        return $this->nonce = $nonce;
    }

    public function getNonce(): ?string
    {
        return $this->nonce;
    }

    public function getExpiredat(): ?\DateTimeInterface
    {
        return $this->expiredat;
    }

    public function setExpiredat(?\DateTimeInterface $expiredat): self
    {
        $this->expiredat = $expiredat;

        return $this;
    }


}
