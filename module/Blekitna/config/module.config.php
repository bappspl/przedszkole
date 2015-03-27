<?php

return array(
    'router' => array(
        'routes' =>  array_merge(
            include __DIR__ . '/blekitna-kraina.routing.config.php'
        )
    ),
    'controllers' => array(
        'invokables' => array(
            'Blekitna\Controller\Blekitna' => 'Blekitna\Controller\BlekitnaController'
        ),
    ),
    'view_manager' => array(
        'doctype'                  => 'HTML5',
        'template_map' => array(
            'layout/blekitna' => __DIR__ . '/../view/layout/blekitna.phtml',
            'partial-blekitna/layout/header' => __DIR__ . '/../view/partial/layout/header.phtml',
            'partial-blekitna/layout/footer' => __DIR__ . '/../view/partial/layout/footer.phtml',
        ),
        'template_path_stack' => array(
            'page_home_site' => __DIR__ . '/../view'
        ),
        'display_exceptions' => true,
    ),
    'view_helpers' => array(
        'invokables'=> array(
            'menuHelper' => 'CmsIr\Menu\View\Helper\MenuHelper',
        ),
    ),
    'asset_manager' => array(
        'resolver_configs' => array(
            'paths' => array(
                __DIR__ . '/../public',
            ),
        ),
    ),

);
