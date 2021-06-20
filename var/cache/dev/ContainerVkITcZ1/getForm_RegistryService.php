<?php

namespace ContainerVkITcZ1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_RegistryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormRegistryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormRegistry.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormExtensionInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'DependencyInjection'.\DIRECTORY_SEPARATOR.'DependencyInjectionExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'ResolvedFormTypeFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'Proxy'.\DIRECTORY_SEPARATOR.'ResolvedTypeFactoryDataCollectorProxy.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'ResolvedFormTypeFactory.php';

        return $container->privates['form.registry'] = new \Symfony\Component\Form\FormRegistry([0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Form\\CompanyActivityType' => ['privates', 'App\\Form\\CompanyActivityType', 'getCompanyActivityTypeService', true],
            'App\\Form\\CompanyType' => ['privates', 'App\\Form\\CompanyType', 'getCompanyTypeService', true],
            'App\\Form\\DepartmentType' => ['privates', 'App\\Form\\DepartmentType', 'getDepartmentTypeService', true],
            'App\\Form\\DocumentType' => ['privates', 'App\\Form\\DocumentType', 'getDocumentTypeService', true],
            'App\\Form\\EmployeeType' => ['privates', 'App\\Form\\EmployeeType', 'getEmployeeTypeService', true],
            'App\\Form\\EngineeringOfficeSortType' => ['privates', 'App\\Form\\EngineeringOfficeSortType', 'getEngineeringOfficeSortTypeService', true],
            'App\\Form\\EngineeringOfficeType' => ['privates', 'App\\Form\\EngineeringOfficeType', 'getEngineeringOfficeTypeService', true],
            'App\\Form\\LocationType' => ['privates', 'App\\Form\\LocationType', 'getLocationTypeService', true],
            'App\\Form\\PersonContactType' => ['privates', 'App\\Form\\PersonContactType', 'getPersonContactTypeService', true],
            'App\\Form\\PlanningType' => ['privates', 'App\\Form\\PlanningType', 'getPlanningTypeService', true],
            'App\\Form\\ProjectCommentType' => ['privates', 'App\\Form\\ProjectCommentType', 'getProjectCommentTypeService', true],
            'App\\Form\\ProjectType' => ['privates', 'App\\Form\\ProjectType', 'getProjectTypeService', true],
            'App\\Form\\ProjectWorkType' => ['privates', 'App\\Form\\ProjectWorkType', 'getProjectWorkTypeService', true],
            'App\\Form\\RequestType' => ['privates', 'App\\Form\\RequestType', 'getRequestTypeService', true],
            'App\\Form\\RoleType' => ['privates', 'App\\Form\\RoleType', 'getRoleTypeService', true],
            'App\\Form\\SigninType' => ['privates', 'App\\Form\\SigninType', 'getSigninTypeService', true],
            'App\\Form\\SiteType' => ['privates', 'App\\Form\\SiteType', 'getSiteTypeService', true],
            'App\\Form\\UserType' => ['privates', 'App\\Form\\UserType', 'getUserTypeService', true],
            'App\\Form\\WorkType' => ['privates', 'App\\Form\\WorkType', 'getWorkTypeService', true],
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => ['privates', 'form.type.entity', 'getForm_Type_EntityService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => ['privates', 'form.type.choice', 'getForm_Type_ChoiceService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType' => ['privates', 'form.type.color', 'getForm_Type_ColorService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => ['services', 'form.type.file', 'getForm_Type_FileService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => ['privates', 'form.type.form', 'getForm_Type_FormService', true],
        ], [
            'App\\Form\\CompanyActivityType' => '?',
            'App\\Form\\CompanyType' => '?',
            'App\\Form\\DepartmentType' => '?',
            'App\\Form\\DocumentType' => '?',
            'App\\Form\\EmployeeType' => '?',
            'App\\Form\\EngineeringOfficeSortType' => '?',
            'App\\Form\\EngineeringOfficeType' => '?',
            'App\\Form\\LocationType' => '?',
            'App\\Form\\PersonContactType' => '?',
            'App\\Form\\PlanningType' => '?',
            'App\\Form\\ProjectCommentType' => '?',
            'App\\Form\\ProjectType' => '?',
            'App\\Form\\ProjectWorkType' => '?',
            'App\\Form\\RequestType' => '?',
            'App\\Form\\RoleType' => '?',
            'App\\Form\\SigninType' => '?',
            'App\\Form\\SiteType' => '?',
            'App\\Form\\UserType' => '?',
            'App\\Form\\WorkType' => '?',
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => '?',
        ]), ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.form.transformation_failure_handling'] ?? $container->load('getForm_TypeExtension_Form_TransformationFailureHandlingService'));
            yield 1 => ($container->privates['form.type_extension.form.http_foundation'] ?? $container->load('getForm_TypeExtension_Form_HttpFoundationService'));
            yield 2 => ($container->privates['form.type_extension.form.validator'] ?? $container->load('getForm_TypeExtension_Form_ValidatorService'));
            yield 3 => ($container->privates['form.type_extension.upload.validator'] ?? $container->load('getForm_TypeExtension_Upload_ValidatorService'));
            yield 4 => ($container->privates['form.type_extension.csrf'] ?? $container->load('getForm_TypeExtension_CsrfService'));
            yield 5 => ($container->privates['form.type_extension.form.data_collector'] ?? $container->load('getForm_TypeExtension_Form_DataCollectorService'));
        }, 6), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.repeated.validator'] ?? ($container->privates['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension()));
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.submit.validator'] ?? ($container->privates['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension()));
        }, 1)], new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_guesser.validator'] ?? $container->load('getForm_TypeGuesser_ValidatorService'));
            yield 1 => ($container->privates['form.type_guesser.doctrine'] ?? $container->load('getForm_TypeGuesser_DoctrineService'));
        }, 2))], new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), ($container->privates['data_collector.form'] ?? $container->getDataCollector_FormService())));
    }
}
