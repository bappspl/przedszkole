<?php

return array(
    'home' => array(
        'type' => 'Zend\Mvc\Router\Http\Literal',
        'options' => array(
            'route'    => '/pro-communications',
            'defaults' => array(
                'controller' => 'Page\Controller\Page',
                'action'     => 'home',
            ),
        ),
    ),
    'viewPage' => array(
        'type' => 'Zend\Mvc\Router\Http\Segment',
        'options' => array(
            'route'    => '/pro-communications/strona/:slug',
            'defaults' => array(
                'controller' => 'Page\Controller\Page',
                'action'     => 'viewPage',
            ),
        ),
    ),
    'viewPrice' => array(
        'type' => 'Segment',
        'options' => array(
            'route'    => '/pro-communications/cennik',
            'defaults' => array(
                'controller' => 'Page\Controller\Page',
                'action'     => 'price',
            ),
        ),
    ),
     'viewGallery' => array(
        'type' => 'Segment',
        'options' => array(
            'route'    => '/pro-communications/galeria',
            'defaults' => array(
                'controller' => 'Page\Controller\Page',
                'action'     => 'gallery',
            ),
        ),
    ),
    'viewContact' => array(
        'type' => 'Segment',
        'options' => array(
            'route'    => '/pro-communications/kontakt',
            'defaults' => array(
                'controller' => 'Page\Controller\Page',
                'action'     => 'contact',
            ),
        ),
    ),
    'contact-form' => array(
        'type' => 'Segment',
        'options' => array(
            'route'    => '/pro-communications/contact-form',
            'defaults' => array(
                'controller' => 'Page\Controller\Page',
                'action'     => 'contactForm',
            ),
        ),
    ),
    'terapeuci' => array(
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