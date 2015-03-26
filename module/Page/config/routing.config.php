<?php

return array(
    'home' => array(
        'type' => 'Zend\Mvc\Router\Http\Literal',
        'options' => array(
            'route'    => '/',
            'defaults' => array(
                'controller' => 'Page\Controller\Page',
                'action'     => 'home',
            ),
        ),
    ),
    'viewPage' => array(
        'type' => 'Zend\Mvc\Router\Http\Segment',
        'options' => array(
            'route'    => '/strona/:slug',
            'defaults' => array(
                'controller' => 'Page\Controller\Page',
                'action'     => 'viewPage',
            ),
        ),
    ),
    'viewPrice' => array(
        'type' => 'Segment',
        'options' => array(
            'route'    => '/cennik',
            'defaults' => array(
                'controller' => 'Page\Controller\Page',
                'action'     => 'price',
            ),
        ),
    ),
     'viewGallery' => array(
        'type' => 'Segment',
        'options' => array(
            'route'    => '/galeria',
            'defaults' => array(
                'controller' => 'Page\Controller\Page',
                'action'     => 'gallery',
            ),
        ),
    )
);