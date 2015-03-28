<?php

return array(
    'pro-home' => array(
        'type' => 'Zend\Mvc\Router\Http\Literal',
        'options' => array(
            'route'    => '/pro-communications',
            'defaults' => array(
                'controller' => 'Page\Controller\Page',
                'action'     => 'home',
            ),
        ),
    ),
    'pro-viewPage' => array(
        'type' => 'Zend\Mvc\Router\Http\Segment',
        'options' => array(
            'route'    => '/pro-communications/strona/:slug',
            'defaults' => array(
                'controller' => 'Page\Controller\Page',
                'action'     => 'viewPage',
            ),
        ),
    ),
    'pro-viewPrice' => array(
        'type' => 'Segment',
        'options' => array(
            'route'    => '/pro-communications/cennik',
            'defaults' => array(
                'controller' => 'Page\Controller\Page',
                'action'     => 'price',
            ),
        ),
    ),
     'pro-viewGallery' => array(
        'type' => 'Segment',
        'options' => array(
            'route'    => '/pro-communications/galeria',
            'defaults' => array(
                'controller' => 'Page\Controller\Page',
                'action'     => 'gallery',
            ),
        ),
    ),
    'pro-viewContact' => array(
        'type' => 'Segment',
        'options' => array(
            'route'    => '/pro-communications/kontakt',
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
            'route'    => '/pro-communications/terapeuci',
            'defaults' => array(
                'controller' => 'Page\Controller\Page',
                'action'     => 'terapeuci',
            ),
        ),
    ),
);