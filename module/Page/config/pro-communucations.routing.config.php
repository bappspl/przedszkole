<?php

return array(
    'pro-home' => array(
        'type' => 'Zend\Mvc\Router\Http\Literal',
        'options' => array(
            'route'    => '/pro-comunications',
            'defaults' => array(
                'controller' => 'Page\Controller\Page',
                'action'     => 'home',
            ),
        ),
    ),
    'pro-viewPage' => array(
        'type' => 'Zend\Mvc\Router\Http\Segment',
        'options' => array(
            'route'    => '/pro-comunications/strona/:slug',
            'defaults' => array(
                'controller' => 'Page\Controller\Page',
                'action'     => 'viewPage',
            ),
        ),
    ),
    'pro-viewPrice' => array(
        'type' => 'Segment',
        'options' => array(
            'route'    => '/pro-comunications/cennik',
            'defaults' => array(
                'controller' => 'Page\Controller\Page',
                'action'     => 'price',
            ),
        ),
    ),
     'pro-viewGallery' => array(
        'type' => 'Segment',
        'options' => array(
            'route'    => '/pro-comunications/galeria',
            'defaults' => array(
                'controller' => 'Page\Controller\Page',
                'action'     => 'gallery',
            ),
        ),
    ),
    'pro-viewContact' => array(
        'type' => 'Segment',
        'options' => array(
            'route'    => '/pro-comunications/kontakt',
            'defaults' => array(
                'controller' => 'Page\Controller\Page',
                'action'     => 'contact',
            ),
        ),
    ),
    'pro-contact-form' => array(
        'type' => 'Segment',
        'options' => array(
            'route'    => '/contact-form',
            'defaults' => array(
                'controller' => 'Page\Controller\Page',
                'action'     => 'contactForm',
            ),
        ),
    ),
    'pro-terapeuci' => array(
        'type' => 'Segment',
        'options' => array(
            'route'    => '/pro-comunications/terapeuci',
            'defaults' => array(
                'controller' => 'Page\Controller\Page',
                'action'     => 'terapeuci',
            ),
        ),
    ),
);