<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'CmsIr\Price\Controller\Price' => 'CmsIr\Price\Controller\PriceController'
        ),
    ),
    'router' => array(
        'routes' =>  include __DIR__ . '/routing.config.php',
    ),
    'view_manager' => array(
        'template_map' => array(
            'partial/flashmessages-price'  => __DIR__ . '/../view/partial/flashmessages-price.phtml',
            'partial/delete-price-modal'  => __DIR__ . '/../view/partial/delete-price-modal.phtml'
        ),
        'template_path_stack' => array(
            'price' => __DIR__ . '/../view'
        ),
        'display_exceptions' => true,
    ),
    'asset_manager' => array(
        'resolver_configs' => array(
            'paths' => array(
                __DIR__ . '/../public',
            ),
        ),
    ),
);