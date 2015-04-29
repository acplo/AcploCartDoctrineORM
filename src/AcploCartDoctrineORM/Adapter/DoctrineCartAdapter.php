<?php

namespace AcploCartDoctrineORM\Adapter;

use Doctrine\Common\Persistence\ObjectManager;
use AcploCartDoctrineORM\Adapter\CartCookieAdapterInterface;

class DoctrineCartAdapter implements CartAdapterInterface {

    protected $objectManager;

    function __construct(ObjectManager $om){
        $this->objectManager = $om;
    }


}