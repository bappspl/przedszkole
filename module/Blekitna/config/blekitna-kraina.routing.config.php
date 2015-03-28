<?php

return array(
    'blekitna-home' => array(
        'type' => 'Zend\Mvc\Router\Http\Literal',
        'options' => array(
            'route'    => '/blekitna-kraina',
            'defaults' => array(
                'controller' => 'Blekitna\Controller\Blekitna',
                'action'     => 'home',
            ),
        ),
    ),
    'blekitna-viewPage' => array(
        'type' => 'Zend\Mvc\Router\Http\Segment',
        'options' => array(
            'route'    => '/blekitna-kraina/strona/:slug',
            'defaults' => array(
                'controller' => 'Blekitna\Controller\Blekitna',
                'action'     => 'viewPage',
            ),
        ),
    ),
    'blekitna-viewPrice' => array(
        'type' => 'Segment',
        'options' => array(
            'route'    => '/blekitna-kraina/cennik',
            'defaults' => array(
                'controller' => 'Blekitna\Controller\Blekitna',
                'action'     => 'price',
            ),
        ),
    ),
     'blekitna-viewGallery' => array(
        'type' => 'Segment',
        'options' => array(
            'route'    => '/blekitna-kraina/galeria',
            'defaults' => array(
                'controller' => 'Blekitna\Controller\Blekitna',
                'action'     => 'gallery',
            ),
        ),
    ),
    'blekitna-viewContact' => array(
        'type' => 'Segment',
        'options' => array(
            'route'    => '/blekitna-kraina/kontakt',
            'defaults' => array(
                'controller' => 'Blekitna\Controller\Blekitna',
                'action'     => 'contact',
            ),
        ),
    ),
    'blekitna-dokumenty' => array(
        'type' => 'Segment',
        'options' => array(
            'route'    => '/blekitna-kraina/dokumenty',
            'defaults' => array(
                'controller' => 'Blekitna\Controller\Blekitna',
                'action'     => 'dokumenty',
            ),
        ),
    ),
    'blekitna-nasza-kadra' => array(
        'type' => 'Segment',
        'options' => array(
            'route'    => '/blekitna-kraina/nasza-kadra',
            'defaults' => array(
                'controller' => 'Blekitna\Controller\Blekitna',
                'action'     => 'kadra',
            ),
        ),
    ),
);