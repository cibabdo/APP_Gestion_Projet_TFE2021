<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * EngineeringOfficeSort
 *
 * @ORM\Table(name="engineering_office_sort")
 * @ORM\Entity(repositoryClass="App\Repository\EngineeringOfficeSortRepository")
 * @UniqueEntity(
 *  fields={"name"},
 *  message="Ce nom est déjà utilisé"
 * )
 */
class EngineeringOfficeSort
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
     * @var string|null
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }


}
