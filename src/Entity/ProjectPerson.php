<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * ProjectPerson
 *
 * @ORM\Table(name="project_person", indexes={@ORM\Index(name="fk_project8_idx", columns={"project_id"}), @ORM\Index(name="fk_employee3_idx", columns={"employee_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\ProjectPersonRepository")
 * @UniqueEntity(
 *  fields={"project", "employee", "person_engineering"},
 *  message="Ce personne est déjà enregistrée pour ce projet"
 * )
 */
class ProjectPerson
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
     * @var \Project
     *
     * @ORM\ManyToOne(targetEntity="Project", inversedBy="persons")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="project_id", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    private $project;

    /**
     * @var \Employee
     *
     * @ORM\ManyToOne(targetEntity="Employee")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="employee_id", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    private $employee;

     /**
     * @var \PersonEngineering
     *
     * @ORM\ManyToOne(targetEntity="PersonEngineering")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="person_engineering_id", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    private $person_engineering;

     /**
     * @var string
     *
     * @ORM\Column(name="input", type="text", length=0, nullable=false)
     */
    private $input;

    public function __construct()
    {
        $this->documents = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProject(): ?Project
    {
        return $this->project;
    }

    public function setProject(?Project $project): self
    {
        $this->project = $project;

        return $this;
    }

    public function getEmployee(): ?Employee
    {
        return $this->employee;
    }

    public function setEmployee(?Employee $employee): self
    {
        $this->employee = $employee;

        return $this;
    }

    public function getPersonEngineering(): ?PersonEngineering
    {
        return $this->person_engineering;
    }

    public function setPersonEngineering(?PersonEngineering $person_engineering): self
    {
        $this->person_engineering = $person_engineering;

        return $this;
    }

    public function getInput(): ?string
    {
        return $this->input;
    }

    public function setInput(?string $input): self
    {
        $this->input = $input;

        return $this;
    }
}
