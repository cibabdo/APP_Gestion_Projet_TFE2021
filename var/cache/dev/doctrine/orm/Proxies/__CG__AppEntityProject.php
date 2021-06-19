<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Project extends \App\Entity\Project implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'reference', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'title', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'year', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'workStartDate', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'workEndDate', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'startSituation', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'endSituation', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'state', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'createdAt', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'updatedAt', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'architect', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'externalEngineer', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'externalArchitectureOffice', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'hvacEngineer', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'lowVoltageEngineer', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'medicalFluidEngineer', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'safetyCoordinator', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'sanitaryEngineer', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'secondArchitect', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'site', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'strongVoltageEngineer', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'supervisor', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'company', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'documents', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'engineers', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'architects', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'coordinators'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'reference', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'title', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'year', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'workStartDate', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'workEndDate', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'startSituation', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'endSituation', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'state', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'createdAt', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'updatedAt', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'architect', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'externalEngineer', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'externalArchitectureOffice', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'hvacEngineer', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'lowVoltageEngineer', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'medicalFluidEngineer', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'safetyCoordinator', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'sanitaryEngineer', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'secondArchitect', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'site', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'strongVoltageEngineer', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'supervisor', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'company', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'documents', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'engineers', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'architects', '' . "\0" . 'App\\Entity\\Project' . "\0" . 'coordinators'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Project $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getEngineers(): ?array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEngineers', []);

        return parent::getEngineers();
    }

    /**
     * {@inheritDoc}
     */
    public function setEngineers(?array $engineers): \App\Entity\Project
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEngineers', [$engineers]);

        return parent::setEngineers($engineers);
    }

    /**
     * {@inheritDoc}
     */
    public function getArchitects(): ?array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArchitects', []);

        return parent::getArchitects();
    }

    /**
     * {@inheritDoc}
     */
    public function setArchitects(?array $architects): \App\Entity\Project
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArchitects', [$architects]);

        return parent::setArchitects($architects);
    }

    /**
     * {@inheritDoc}
     */
    public function getCoordinators(): ?array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCoordinators', []);

        return parent::getCoordinators();
    }

    /**
     * {@inheritDoc}
     */
    public function setCoordinators(?array $coordinators): \App\Entity\Project
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCoordinators', [$coordinators]);

        return parent::setCoordinators($coordinators);
    }

    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getReference(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getReference', []);

        return parent::getReference();
    }

    /**
     * {@inheritDoc}
     */
    public function setReference(string $reference): \App\Entity\Project
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setReference', [$reference]);

        return parent::setReference($reference);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle(string $title): \App\Entity\Project
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getYear(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getYear', []);

        return parent::getYear();
    }

    /**
     * {@inheritDoc}
     */
    public function setYear(int $year): \App\Entity\Project
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setYear', [$year]);

        return parent::setYear($year);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription(?string $description): \App\Entity\Project
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getWorkStartDate(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWorkStartDate', []);

        return parent::getWorkStartDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setWorkStartDate(?\DateTimeInterface $workStartDate): \App\Entity\Project
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWorkStartDate', [$workStartDate]);

        return parent::setWorkStartDate($workStartDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getWorkEndDate(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWorkEndDate', []);

        return parent::getWorkEndDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setWorkEndDate(?\DateTimeInterface $workEndDate): \App\Entity\Project
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWorkEndDate', [$workEndDate]);

        return parent::setWorkEndDate($workEndDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getStartSituation(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStartSituation', []);

        return parent::getStartSituation();
    }

    /**
     * {@inheritDoc}
     */
    public function setStartSituation(?bool $startSituation): \App\Entity\Project
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStartSituation', [$startSituation]);

        return parent::setStartSituation($startSituation);
    }

    /**
     * {@inheritDoc}
     */
    public function getEndSituation(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEndSituation', []);

        return parent::getEndSituation();
    }

    /**
     * {@inheritDoc}
     */
    public function setEndSituation(?bool $endSituation): \App\Entity\Project
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEndSituation', [$endSituation]);

        return parent::setEndSituation($endSituation);
    }

    /**
     * {@inheritDoc}
     */
    public function getState(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getState', []);

        return parent::getState();
    }

    /**
     * {@inheritDoc}
     */
    public function setState(?int $state): \App\Entity\Project
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setState', [$state]);

        return parent::setState($state);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(?\DateTimeInterface $createdAt): \App\Entity\Project
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(?\DateTimeInterface $updatedAt): \App\Entity\Project
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getArchitect(): ?\App\Entity\Employee
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getArchitect', []);

        return parent::getArchitect();
    }

    /**
     * {@inheritDoc}
     */
    public function setArchitect(?\App\Entity\Employee $architect): \App\Entity\Project
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setArchitect', [$architect]);

        return parent::setArchitect($architect);
    }

    /**
     * {@inheritDoc}
     */
    public function getExternalEngineer(): ?\App\Entity\PersonContact
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExternalEngineer', []);

        return parent::getExternalEngineer();
    }

    /**
     * {@inheritDoc}
     */
    public function setExternalEngineer(?\App\Entity\PersonContact $externalEngineer): \App\Entity\Project
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExternalEngineer', [$externalEngineer]);

        return parent::setExternalEngineer($externalEngineer);
    }

    /**
     * {@inheritDoc}
     */
    public function getExternalArchitectureOffice(): ?\App\Entity\EngineeringOffice
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExternalArchitectureOffice', []);

        return parent::getExternalArchitectureOffice();
    }

    /**
     * {@inheritDoc}
     */
    public function setExternalArchitectureOffice(?\App\Entity\EngineeringOffice $externalArchitectureOffice): \App\Entity\Project
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExternalArchitectureOffice', [$externalArchitectureOffice]);

        return parent::setExternalArchitectureOffice($externalArchitectureOffice);
    }

    /**
     * {@inheritDoc}
     */
    public function getHvacEngineer(): ?\App\Entity\Employee
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHvacEngineer', []);

        return parent::getHvacEngineer();
    }

    /**
     * {@inheritDoc}
     */
    public function setHvacEngineer(?\App\Entity\Employee $hvacEngineer): \App\Entity\Project
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHvacEngineer', [$hvacEngineer]);

        return parent::setHvacEngineer($hvacEngineer);
    }

    /**
     * {@inheritDoc}
     */
    public function getLowVoltageEngineer(): ?\App\Entity\Employee
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLowVoltageEngineer', []);

        return parent::getLowVoltageEngineer();
    }

    /**
     * {@inheritDoc}
     */
    public function setLowVoltageEngineer(?\App\Entity\Employee $lowVoltageEngineer): \App\Entity\Project
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLowVoltageEngineer', [$lowVoltageEngineer]);

        return parent::setLowVoltageEngineer($lowVoltageEngineer);
    }

    /**
     * {@inheritDoc}
     */
    public function getMedicalFluidEngineer(): ?\App\Entity\Employee
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMedicalFluidEngineer', []);

        return parent::getMedicalFluidEngineer();
    }

    /**
     * {@inheritDoc}
     */
    public function setMedicalFluidEngineer(?\App\Entity\Employee $medicalFluidEngineer): \App\Entity\Project
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMedicalFluidEngineer', [$medicalFluidEngineer]);

        return parent::setMedicalFluidEngineer($medicalFluidEngineer);
    }

    /**
     * {@inheritDoc}
     */
    public function getSafetyCoordinator(): ?\App\Entity\PersonContact
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSafetyCoordinator', []);

        return parent::getSafetyCoordinator();
    }

    /**
     * {@inheritDoc}
     */
    public function setSafetyCoordinator(?\App\Entity\PersonContact $safetyCoordinator): \App\Entity\Project
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSafetyCoordinator', [$safetyCoordinator]);

        return parent::setSafetyCoordinator($safetyCoordinator);
    }

    /**
     * {@inheritDoc}
     */
    public function getSanitaryEngineer(): ?\App\Entity\Employee
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSanitaryEngineer', []);

        return parent::getSanitaryEngineer();
    }

    /**
     * {@inheritDoc}
     */
    public function setSanitaryEngineer(?\App\Entity\Employee $sanitaryEngineer): \App\Entity\Project
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSanitaryEngineer', [$sanitaryEngineer]);

        return parent::setSanitaryEngineer($sanitaryEngineer);
    }

    /**
     * {@inheritDoc}
     */
    public function getSecondArchitect(): ?\App\Entity\Employee
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSecondArchitect', []);

        return parent::getSecondArchitect();
    }

    /**
     * {@inheritDoc}
     */
    public function setSecondArchitect(?\App\Entity\Employee $secondArchitect): \App\Entity\Project
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSecondArchitect', [$secondArchitect]);

        return parent::setSecondArchitect($secondArchitect);
    }

    /**
     * {@inheritDoc}
     */
    public function getSite(): ?\App\Entity\Site
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSite', []);

        return parent::getSite();
    }

    /**
     * {@inheritDoc}
     */
    public function setSite(?\App\Entity\Site $site): \App\Entity\Project
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSite', [$site]);

        return parent::setSite($site);
    }

    /**
     * {@inheritDoc}
     */
    public function getStrongVoltageEngineer(): ?\App\Entity\Employee
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStrongVoltageEngineer', []);

        return parent::getStrongVoltageEngineer();
    }

    /**
     * {@inheritDoc}
     */
    public function setStrongVoltageEngineer(?\App\Entity\Employee $strongVoltageEngineer): \App\Entity\Project
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStrongVoltageEngineer', [$strongVoltageEngineer]);

        return parent::setStrongVoltageEngineer($strongVoltageEngineer);
    }

    /**
     * {@inheritDoc}
     */
    public function getSupervisor(): ?\App\Entity\Employee
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSupervisor', []);

        return parent::getSupervisor();
    }

    /**
     * {@inheritDoc}
     */
    public function setSupervisor(?\App\Entity\Employee $supervisor): \App\Entity\Project
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSupervisor', [$supervisor]);

        return parent::setSupervisor($supervisor);
    }

    /**
     * {@inheritDoc}
     */
    public function getCompany(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCompany', []);

        return parent::getCompany();
    }

    /**
     * {@inheritDoc}
     */
    public function addCompany(\App\Entity\Company $company): \App\Entity\Project
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCompany', [$company]);

        return parent::addCompany($company);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCompany(\App\Entity\Company $company): \App\Entity\Project
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCompany', [$company]);

        return parent::removeCompany($company);
    }

    /**
     * {@inheritDoc}
     */
    public function getDocument(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDocument', []);

        return parent::getDocument();
    }

    /**
     * {@inheritDoc}
     */
    public function addDocument(\App\Entity\Document $document): \App\Entity\Project
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDocument', [$document]);

        return parent::addDocument($document);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDocument(\App\Entity\Document $document): \App\Entity\Project
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDocument', [$document]);

        return parent::removeDocument($document);
    }

}
