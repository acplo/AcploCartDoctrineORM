<?php

namespace AcploCartDoctrineORM;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;
use AcploCart\Event\CartEvent;
use Zend\EventManager\SharedEventManager;

class Module implements AutoloaderProviderInterface
{
    public function onBootstrap(MvcEvent $e)
    {
        $eventManager = $e->getApplication()->getEventManager();
        $sm = $e->getApplication()->getServiceManager();
        $listener = $sm->get('acplocartdoctrineorm_listener');
        $eventManager->attach($listener);
    }


    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                'acplocartdoctrineorm_listener'     => 'AcploCartDoctrineORM\Listener\Factory\CartListenerFactory',
                'acplocartdoctrineorm_cart_service' => 'AcploCartDoctrineORM\Service\Factory\CartServiceFactory'
            ),
        );
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                   __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__
                ),
            ),
        );
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
}
