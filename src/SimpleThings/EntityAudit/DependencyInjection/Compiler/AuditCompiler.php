<?php

namespace SimpleThings\EntityAudit\DependencyInjection\Compiler;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

class AuditCompiler implements CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder $container)
    {
        var_dump($container->get('app.connection_service'));die();
        //$repositoryFactory = $container->getDefinition('app.doctrine.orm.repository_factory');
        //$container->findDefinition('doctrine.orm.configuration')->addMethodCall('setRepositoryFactory', [$repositoryFactory]);
        /*
		$rootPath  = $container->getParameter('kernel.root_dir');
		$auditPath = $rootPath.'/../vendor/simplethings/entity-audit-bundle/src/SimpleThings/EntityAudit';

        $loader = new XmlFileLoader($container, new FileLocator($auditPath.'/Resources/config'));
        $loader->load('auditable'.$container->get('app.connection_service')->getManagerName().'.xml');

        var_dump($container->get('simplethings_entityaudit.manager'));die();
        */
    }
}