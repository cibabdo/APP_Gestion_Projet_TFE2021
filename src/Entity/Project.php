<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\Collection;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Project
 *
 * @ORM\Table(name="project", indexes={@ORM\Index(name="pk_architect_idx", columns={"architect_id"}), @ORM\Index(name="pk_external_office_idx", columns={"external_architecture_office_id"}), @ORM\Index(name="pk_safety_coordinator_idx", columns={"safety_coordinator_id"}), @ORM\Index(name="pk_low_voltage_idx", columns={"low_voltage_engineer_id"}), @ORM\Index(name="pk_hvac_engineer_idx", columns={"hvac_engineer_id"}), @ORM\Index(name="pk_medical_idx", columns={"medical_fluid_engineer_id"}), @ORM\Index(name="pk_second_architect_idx", columns={"second_architect_id"}), @ORM\Index(name="pk_external_engineer_idx", columns={"external_engineer_id"}), @ORM\Index(name="pk_supervisor_idx", columns={"supervisor_id"}), @ORM\Index(name="pk_strong_voltage_idx", columns={"strong_voltage_engineer_id"}), @ORM\Index(name="pk_site_idx", columns={"site_id"}), @ORM\Index(name="pk_sanitary_idx", columns={"sanitary_engineer_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\ProjectRepository")
 * @UniqueEntity(
 *  fields={"title"},
 *  message="Ce titre est déjà renseigné"
 * )
 * @UniqueEntity(
 *  fields={"reference"},
 *  message="Ce référence est déjà renseignée"
 * )
 */
class Project
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
     * @ORM\Column(name="reference", type="string", length=255, nullable=false)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var int
     *
     * @ORM\Column(name="year", type="integer", nullable=false)
     */
    private $year;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="text", length=0, nullable=true)
     */
    private $description;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="work_start_date", type="date", nullable=true)
     */
    private $workStartDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="work_end_date", type="date", nullable=true)
     * @Assert\GreaterThan(propertyPath="workStartDate", message="La date doit être postérieure à la date de début")
     */
    private $workEndDate;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="start_situation", type="boolean", nullable=true)
     */
    private $startSituation;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="end_situation", type="boolean", nullable=true)
     */
    private $endSituation;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="state", type="integer", nullable=true)
     */
    private $state;

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

    /**
     * @var \Employee
     *
     * @ORM\ManyToOne(targetEntity="Employee")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="architect_id", referencedColumnName="id")
     * })
     */
    private $architect;

    /**
     * @var \PersonContact
     *
     * @ORM\ManyToOne(targetEntity="PersonContact")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="external_engineer_id", referencedColumnName="id")
     * })
     */
    private $externalEngineer;

    /**
     * @var \EngineeringOffice
     *
     * @ORM\ManyToOne(targetEntity="EngineeringOffice")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="external_architecture_office_id", referencedColumnName="id")
     * })
     */
    private $externalArchitectureOffice;

    /**
     * @var \Employee
     *
     * @ORM\ManyToOne(targetEntity="Employee")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="hvac_engineer_id", referencedColumnName="id")
     * })
     */
    private $hvacEngineer;

    /**
     * @var \Employee
     *
     * @ORM\ManyToOne(targetEntity="Employee")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="low_voltage_engineer_id", referencedColumnName="id")
     * })
     */
    private $lowVoltageEngineer;

    /**
     * @var \Employee
     *
     * @ORM\ManyToOne(targetEntity="Employee")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="medical_fluid_engineer_id", referencedColumnName="id")
     * })
     */
    private $medicalFluidEngineer;

    /**
     * @var \PersonContact
     *
     * @ORM\ManyToOne(targetEntity="PersonContact")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="safety_coordinator_id", referencedColumnName="id")
     * })
     */
    private $safetyCoordinator;

    /**
     * @var \Employee
     *
     * @ORM\ManyToOne(targetEntity="Employee")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sanitary_engineer_id", referencedColumnName="id")
     * })
     */
    private $sanitaryEngineer;

    /**
     * @var \Employee
     *
     * @ORM\ManyToOne(targetEntity="Employee")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="second_architect_id", referencedColumnName="id")
     * })
     */
    private $secondArchitect;

    /**
     * @var \Site
     *
     * @ORM\ManyToOne(targetEntity="Site")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="site_id", referencedColumnName="id")
     * })
     */
    private $site;

    /**
     * @var \Employee
     *
     * @ORM\ManyToOne(targetEntity="Employee")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="strong_voltage_engineer_id", referencedColumnName="id")
     * })
     */
    private $strongVoltageEngineer;

    /**
     * @var \Employee
     *
     * @ORM\ManyToOne(targetEntity="Employee")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="supervisor_id", referencedColumnName="id")
     * })
     */
    private $supervisor;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Company", inversedBy="project")
     * @ORM\JoinTable(name="project_company",
     *   joinColumns={
     *     @ORM\JoinColumn(name="project_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="company_id", referencedColumnName="id")
     *   }
     * )
     */
    private $company;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Document", mappedBy="projectWork",cascade={"persist"})
     */
    private $documents;

    /**
     * @var \PersonContact
     *     
     */
    private $engineers;

    public function getEngineers(): ?array
    {
        return $this->engineers;
    }

    public function setEngineers(?array $engineers): self
    {
        $this->engineers = $engineers;

        return $this;
    }

    /**
     * @var \PersonContact
     *     
     */
    private $architects;

    public function getArchitects(): ?array
    {
        return $this->architects;
    }

    public function setArchitects(?array $architects): self
    {
        $this->architects = $architects;        
        return $this;
    }

    /**
     * @var \PersonContact
     *     
     */
    private $coordinators;

    public function getCoordinators(): ?array
    {
        return $this->coordinators;
    }

    public function setCoordinators(?array $coordinators): self
    {
        $this->coordinators = $coordinators;

        return $this;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->company = new \Doctrine\Common\Collections\ArrayCollection();
        $this->documents = new \Doctrine\Common\Collections\ArrayCollection();
        $this->architects = new \Doctrine\Common\Collections\ArrayCollection();
        $this->coordinators = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(int $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getWorkStartDate(): ?\DateTimeInterface
    {
        return $this->workStartDate;
    }

    public function setWorkStartDate(?\DateTimeInterface $workStartDate): self
    {
        $this->workStartDate = $workStartDate;

        return $this;
    }

    public function getWorkEndDate(): ?\DateTimeInterface
    {
        return $this->workEndDate;
    }

    public function setWorkEndDate(?\DateTimeInterface $workEndDate): self
    {
        $this->workEndDate = $workEndDate;

        return $this;
    }

    public function getStartSituation(): ?bool
    {
        return $this->startSituation;
    }

    public function setStartSituation(?bool $startSituation): self
    {
        $this->startSituation = $startSituation;

        return $this;
    }

    public function getEndSituation(): ?bool
    {
        return $this->endSituation;
    }

    public function setEndSituation(?bool $endSituation): self
    {
        $this->endSituation = $endSituation;

        return $this;
    }

    public function getState(): ?int
    {
        return $this->state;
    }

    public function setState(?int $state): self
    {
        $this->state = $state;

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

    public function getArchitect(): ?Employee
    {
        return $this->architect;
    }

    public function setArchitect(?Employee $architect): self
    {
        $this->architect = $architect;

        return $this;
    }

    public function getExternalEngineer(): ?PersonContact
    {
        return $this->externalEngineer;
    }

    public function setExternalEngineer(?PersonContact $externalEngineer): self
    {
        $this->externalEngineer = $externalEngineer;

        return $this;
    }

    public function getExternalArchitectureOffice(): ?EngineeringOffice
    {
        return $this->externalArchitectureOffice;
    }

    public function setExternalArchitectureOffice(?EngineeringOffice $externalArchitectureOffice): self
    {
        $this->externalArchitectureOffice = $externalArchitectureOffice;

        return $this;
    }

    public function getHvacEngineer(): ?Employee
    {
        return $this->hvacEngineer;
    }

    public function setHvacEngineer(?Employee $hvacEngineer): self
    {
        $this->hvacEngineer = $hvacEngineer;

        return $this;
    }

    public function getLowVoltageEngineer(): ?Employee
    {
        return $this->lowVoltageEngineer;
    }

    public function setLowVoltageEngineer(?Employee $lowVoltageEngineer): self
    {
        $this->lowVoltageEngineer = $lowVoltageEngineer;

        return $this;
    }

    public function getMedicalFluidEngineer(): ?Employee
    {
        return $this->medicalFluidEngineer;
    }

    public function setMedicalFluidEngineer(?Employee $medicalFluidEngineer): self
    {
        $this->medicalFluidEngineer = $medicalFluidEngineer;

        return $this;
    }

    public function getSafetyCoordinator(): ?PersonContact
    {
        return $this->safetyCoordinator;
    }

    public function setSafetyCoordinator(?PersonContact $safetyCoordinator): self
    {
        $this->safetyCoordinator = $safetyCoordinator;

        return $this;
    }

    public function getSanitaryEngineer(): ?Employee
    {
        return $this->sanitaryEngineer;
    }

    public function setSanitaryEngineer(?Employee $sanitaryEngineer): self
    {
        $this->sanitaryEngineer = $sanitaryEngineer;

        return $this;
    }

    public function getSecondArchitect(): ?Employee
    {
        return $this->secondArchitect;
    }

    public function setSecondArchitect(?Employee $secondArchitect): self
    {
        $this->secondArchitect = $secondArchitect;

        return $this;
    }

    public function getSite(): ?Site
    {
        return $this->site;
    }

    public function setSite(?Site $site): self
    {
        $this->site = $site;

        return $this;
    }

    public function getStrongVoltageEngineer(): ?Employee
    {
        return $this->strongVoltageEngineer;
    }

    public function setStrongVoltageEngineer(?Employee $strongVoltageEngineer): self
    {
        $this->strongVoltageEngineer = $strongVoltageEngineer;

        return $this;
    }

    public function getSupervisor(): ?Employee
    {
        return $this->supervisor;
    }

    public function setSupervisor(?Employee $supervisor): self
    {
        $this->supervisor = $supervisor;

        return $this;
    }

    /**
     * @return Collection|Company[]
     */
    public function getCompany(): Collection
    {
        return $this->company;
    }

    public function addCompany(Company $company): self
    {
        if (!$this->company->contains($company)) {
            $this->company[] = $company;
        }

        return $this;
    }

    public function removeCompany(Company $company): self
    {
        $this->company->removeElement($company);

        return $this;
    }

    /**
     * @return Collection|Document[]
     */
    public function getDocument(): Collection
    {
        return $this->documents;
    }

    public function addDocument(Document $document): self
    {
        if (!$this->documents->contains($document)) {
            $this->documents[] = $document;
            $document->setProject($this);
        }

        return $this;
    }

    public function removeDocument(Document $document): self
    {
        if ($this->documents->contains($document)) {
            $this->documents->removeElement($document);
            // set the owning side to null (unless already changed)
            if ($document->getProject() === $this) {
                $document->setProject(null);
            }
        }

        return $this;
    }

}
