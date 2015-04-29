<?php
return [
    'doctrine' => [
        'driver' => [
            'acplocartdoctrineorm_entity' => [
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'paths' => __DIR__ . '/../src/AcploCartDoctrineORM/Entity',
            ],

            'orm_default' => [
                'drivers' => [
                    'AcploCartDoctrineORM\Entity' => 'acplocartdoctrineorm_entity',
                ],
            ],
        ],
    ]
];
