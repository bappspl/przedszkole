<?php

return array(
    'home-intro' => array(
        'type' => 'Zend\Mvc\Router\Http\Literal',
        'options' => array(
            'route'    => '/',
            'defaults' => array(
                'controller' => 'Page\Controller\Intro',
                'action'     => 'home',
            ),
        ),
    ),
);