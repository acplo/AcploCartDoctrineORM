<?php
namespace AcploCartDoctrineORM\Service\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use AcploCartDoctrineORM\Service\CartService;

/**
* Factory
*/
class CartServiceFactory implements FactoryInterface
{

    public function createService(ServiceLocatorInterface $sm)
    {
        $om = $sm->get('Doctrine\ORM\EntityManager');
    	$service = new CartService($om);
        return $service;
    }
}