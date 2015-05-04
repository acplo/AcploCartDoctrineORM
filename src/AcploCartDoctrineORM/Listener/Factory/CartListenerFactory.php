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
	$datalog = date('Y-m-d', time()) . "_acplocommerce.log";
	$listener->setLogger(\AcploLog\Log\StaticLogger::getInstance($datalog));
	return $listener;
    }

}
