<?php

namespace App\Entity;

use App\Entity\Project;
use App\Entity\Employee;
use Doctrine\ORM\Mapping as ORM;

/**
 * Ati
 *
 * @ORM\Table(name="ati", indexes={@ORM\Index(name="fk_project_idx", columns={"project_id"}), @ORM\Index(name="fk_contact_idx", columns={"employee_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\AtiRepository")
 */
class Ati
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
     * @var bool|null
     *
     * @ORM\Column(name="intervention", type="boolean", nullable=true)
     */
    private $intervention;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="phasing", type="boolean", nullable=true)
     */
    private $phasing;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="text", length=0, nullable=true)
     */
    private $comment;

    /**
     * @var \Employee
     *
     * @ORM\ManyToOne(targetEntity="Employee")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="employee_id", referencedColumnName="id")
     * })
     */
    private $employee;

    /**
     * @var \Project
     *
     * @ORM\ManyToOne(targetEntity="Project")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="project_id", referencedColumnName="id")
     * })
     */
    private $project;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIntervention(): ?bool
    {
        return $this->intervention;
    }

    public function setIntervention(?bool $intervention): self
    {
        $this->intervention = $intervention;

        return $this;
    }

    public function getPhasing(): ?bool
    {
        return $this->phasing;
    }

    public function setPhasing(?bool $phasing): self
    {
        $this->phasing = $phasing;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;

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

    public function getProject(): ?Project
    {
        return $this->project;
    }

    public function setProject(?Project $project): self
    {
        $this->project = $project;

        return $this;
    }


}
