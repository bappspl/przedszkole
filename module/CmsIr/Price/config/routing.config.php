<?php
return array(
    'price-main' => array(
        'type'    => 'Segment',
        'options' => array(
            'route'    => '/cms-ir/price/konsultacje-i-terapie',
            'defaults' => array(
                'module' => 'CmsIr\Price',
                'controller' => 'CmsIr\Price\Controller\Price',
                'action'     => 'list',
            ),
        ),
    ),
    'price' => array(
        'may_terminate' => true,
        'type'    => 'Segment',
        'options' => array(
            'route'    => '/cms-ir/price/:category',
            'defaults' => array(
                'module' => 'CmsIr\Price',
                'controller' => 'CmsIr\Price\Controller\Price',
                'action'     => 'list',
            ),
            'constraints' => array(
                'category' => '[a-zA-Z0-9_-]+'
            ),
        ),
        'child_routes' => array(
            'create' => array(
                'may_terminate' => true,
                'type' => 'Segment',
                'options' => array(
                    'route' => '/create',
                    'defaults' => array(
                        'module' => 'CmsIr\Price',
                        'controller' => 'CmsIr\Price\Controller\Price',
                        'action' => 'create',
                    ),
                ),
            ),
            'edit' => array(
                'may_terminate' => true,
                'type' => 'Segment',
                'options' => array(
                    'route' => '/edit/:price_id',
                    'defaults' => array(
                        'module' => 'CmsIr\Price',
                        'controller' => 'CmsIr\Price\Controller\Price',
                        'action' => 'edit',
                    ),
                    'constraints' => array(
                        'price_id' => '[0-9]+'
                    ),
                ),
            ),
            'delete' => array(
                'may_terminate' => true,
                'type' => 'Segment',
                'options' => array(
                    'route' => '/delete/:price_id',
                    'defaults' => array(
                        'module' => 'CmsIr\Price',
                        'controller' => 'CmsIr\Price\Controller\Price',
                        'action' => 'delete',
                    ),
                    'constraints' => array(
                        'price_id' => '[0-9]+'
                    ),
                ),
            ),
        ),
    ),
);