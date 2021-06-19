<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserSigninSecurity
 *
 * @ORM\Table(name="user_signin_security")
 * @ORM\Entity(repositoryClass="App\Repository\UserSigninSecurityRepository")
 */
class UserSigninSecurity
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
     * @ORM\Column(name="project_id", type="integer", nullable=false)
     */
    private $project_id;

    /**
     * @var int
     *
     * @ORM\Column(name="person_id", type="integer", nullable=false)
     */
    private $person_id;

    public function setPerson(?int $person_id)
    {
        return $this->person_id = $person_id;
    }

    public function getPerson(): ?int
    {
        return $this->person_id;
    }

    public function setProject(?int $project_id)
    {
        return $this->project_id = $project_id;
    }

    public function getProject(): ?int
    {
        return $this->project_id;
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
