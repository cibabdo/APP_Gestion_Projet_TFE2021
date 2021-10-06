<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * ProjectWork
 *
 * @ORM\Table(name="project_work", indexes={@ORM\Index(name="fk_work_idx", columns={"work_id"}), @ORM\Index(name="fk_company2_idx", columns={"company_id"}), @ORM\Index(name="fk_project5_idx", columns={"project_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\ProjectWorkRepository")
 * @UniqueEntity(
 *  fields={"work", "company", "project"},
 *  message="Ce poste avec cette entreprise est déjà enregistré"
 * )
 */
class ProjectWork
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
     * @ORM\Column(name="comment", type="text", length=0, nullable=true)
     */
    private $comment;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="provisional_reception_date", type="date", nullable=true)
     */
    private $provisionalReceptionDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="final_delivery_date", type="date", nullable=true)     
     * @Assert\GreaterThan(propertyPath="provisionalReceptionDate", message="La date doit être postérieure à la date provisoire")     
     */
    private $finalDeliveryDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="vincotte_reception_date", type="date", nullable=true)
     * @Assert\GreaterThan(propertyPath="finalDeliveryDate", message="La date doit être postérieure à la date définitive")
     */
    private $vincotteReceptionDate;

    /**
     * @var \Company
     *
     * @ORM\ManyToOne(targetEntity="Company")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_id", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    private $company;

    /**
     * @var \Project
     *
     * @ORM\ManyToOne(targetEntity="Project")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="project_id", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    private $project;

    /**
     * @var \Work
     *
     * @ORM\ManyToOne(targetEntity="Work")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="work_id", referencedColumnName="id", onDelete="CASCADE")
     * })
     */
    private $work;

     /**
     * @ORM\OneToMany(targetEntity="App\Entity\Document", mappedBy="projectWork",cascade={"persist"})
     */
    private $documents;

    public function __construct()
    {
        $this->documents = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getProvisionalReceptionDate(): ?\DateTimeInterface
    {
        return $this->provisionalReceptionDate;
    }

    public function setProvisionalReceptionDate(?\DateTimeInterface $provisionalReceptionDate): self
    {
        $this->provisionalReceptionDate = $provisionalReceptionDate;

        return $this;
    }

    public function getFinalDeliveryDate(): ?\DateTimeInterface
    {
        return $this->finalDeliveryDate;
    }

    public function setFinalDeliveryDate(?\DateTimeInterface $finalDeliveryDate): self
    {
        $this->finalDeliveryDate = $finalDeliveryDate;

        return $this;
    }

    public function getVincotteReceptionDate(): ?\DateTimeInterface
    {
        return $this->vincotteReceptionDate;
    }

    public function setVincotteReceptionDate(?\DateTimeInterface $vincotteReceptionDate): self
    {
        $this->vincotteReceptionDate = $vincotteReceptionDate;

        return $this;
    }

    public function getCompany(): ?Company
    {
        return $this->company;
    }

    public function setCompany(?Company $company): self
    {
        $this->company = $company;

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

    public function getWork(): ?Work
    {
        return $this->work;
    }

    public function setWork(?Work $work): self
    {
        $this->work = $work;

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
            $document->setProjectWork($this);
        }

        return $this;
    }

    public function removeDocument(Document $document): self
    {
        if ($this->documents->contains($document)) {
            $this->documents->removeElement($document);
            // set the owning side to null (unless already changed)
            if ($document->getProjectWork() === $this) {
                $document->setProjectWork(null);
            }
        }

        return $this;
    }


}
