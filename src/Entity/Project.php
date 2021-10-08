<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\Collection;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Project
 *
 * @ORM\Table(name="project", indexes={@ORM\Index(name="pk_site_idx", columns={"site_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\ProjectRepository")
 * @UniqueEntity(
 *  fields={"title"},
 *  message="Ce titre est déjà renseigné"
 * )
 * @UniqueEntity(
 *  fields={"reference"},
 *  message="Cette référence est déjà renseignée"
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
     * @var \Site
     *
     * @ORM\ManyToOne(targetEntity="Site")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="site_id", referencedColumnName="id")
     * })
     */
    private $site;    

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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="EngineeringOffice", inversedBy="project")
     * @ORM\JoinTable(name="project_engineering",
     *   joinColumns={
     *     @ORM\JoinColumn(name="project_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="engineering_id", referencedColumnName="id")
     *   }
     * )
     */
    private $engineeringOffice;
  

    /**
     * @var \Employee
     * 
     */
    private $architect;

    /**
     * @var \Employee
     * 
     */
    private $hvacEngineer;

    /**
     * @var \Employee
     * 
     */
    private $lowVoltageEngineer;

    /**
     * @var \Employee
     * 
     */
    private $medicalFluidEngineer;

    /**
     * @var \Employee
     * 
     */
    private $secondArchitect;

    /**
     * @var \Employee
     * 
     */
    private $strongVoltageEngineer;

    /**
     * @var \Employee
     * 
     */
    private $supervisor;

    /**
     * @var \Employee
     * 
     */
    private $sanitaryEngineer;

    /**
     * @var \Employee
     * 
     */
    private $externalArchitectureOffice;

    /**
     * @var \Employee
     * 
     */
    private $externalEngineer;

    /**
     * @var \Employee
     * 
     */
    private $safetyCoordinator;

    /**
     * @var \Employee
     * 
     */
    private $test;

    public function getTest(): ?Employee
    {
        return $this->test;
    }

    public function setTest(?Employee $test): self
    {
        $this->test = $test;

        return $this;
    }

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\ProjectPerson", mappedBy="project",cascade={"persist"})
     */
    private $persons;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->persons = new \Doctrine\Common\Collections\ArrayCollection();
        $this->company = new \Doctrine\Common\Collections\ArrayCollection();
        $this->engineeringOffice = new \Doctrine\Common\Collections\ArrayCollection();        
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

    public function getSite(): ?Site
    {
        return $this->site;
    }

    public function setSite(?Site $site): self
    {
        $this->site = $site;

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

    public function getSecondArchitect(): ?Employee
    {
        return $this->secondArchitect;
    }

    public function setSecondArchitect(?Employee $secondArchitect): self
    {        
        $this->secondArchitect = $secondArchitect;

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

    public function getsupervisor(): ?Employee
    {
        return $this->supervisor;
    }

    public function setSupervisor(?Employee $supervisor): self
    {        
        $this->supervisor = $supervisor;

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

    public function getExternalArchitectureOffice(): ?PersonEngineering
    {
        return $this->externalArchitectureOffice;
    }

    public function setExternalArchitectureOffice(?PersonEngineering $externalArchitectureOffice): self
    {        
        $this->externalArchitectureOffice = $externalArchitectureOffice;

        return $this;
    }

    public function getExternalEngineer(): ?PersonEngineering
    {
        return $this->externalEngineer;
    }

    public function setExternalEngineer(?PersonEngineering $externalEngineer): self
    {        
        $this->externalEngineer = $externalEngineer;

        return $this;
    }

    public function getSafetyCoordinator(): ?PersonEngineering
    {
        return $this->safetyCoordinator;
    }

    public function setSafetyCoordinator(?PersonEngineering $safetyCoordinator): self
    {        
        $this->safetyCoordinator = $safetyCoordinator;

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
     * @return Collection|EngineeringOffice[]
     */
    public function getEngineeringOffice(): Collection
    {
        return $this->engineeringOffice;
    }

    public function addEngineeringOffice(EngineeringOffice $engineeringOffice): self
    {
        if (!$this->engineeringOffice->contains($engineeringOffice)) {
            $this->engineeringOffice[] = $engineeringOffice;
        }

        return $this;
    }

    public function removeEngineeringOffice(EngineeringOffice $engineeringOffice): self
    {
        $this->engineeringOffice->removeElement($engineeringOffice);

        return $this;
    }  

     /**
     * @return Collection|ProjectPerson[]
     */
    public function getPersons(): Collection
    {
        return $this->persons;
    }   

    public function addPerson(ProjectPerson $person): self
    {
        if (!$this->persons->contains($person)) {
            $this->persons[] = $person;
            $person->setProject($this);
        }

        return $this;
    }

    public function removePerson(ProjectPerson $person): self
    {
        if ($this->persons->contains($person)) {
            $this->persons->removeElement($person);
            // set the owning side to null (unless already changed)
            /*
            if ($person->getProject() === $this) {
                $person->setProject(null);
            }
            */
        }

        return $this;
    }

}
