<?php

namespace AcploCartDoctrineORM\Listener\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use AcploCartDoctrineORM\Listener\CartListener;

/**
 * Factory
 */
class CartListenerFactory implements FactoryInterface
{

    public function createService(ServiceLocatorInterface $sm)
    {
	$service = $sm->get('acplocartdoctrineorm_cart_service');
	$listener = new CartListener($service);
	$listener->setLogger($sm->get('jcommerce.log'));
	return $listener;
    }

}
