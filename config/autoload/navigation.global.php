<?php

return array(
    'navigation' => array(
        'default' => array(
            array(
                'label' => 'Dashboard',
                'route' => 'dashboard',
                'class' => 'fa fa-home',
                'id'    => 2,
            ),
            array(
                'label' => 'Menu',
                'route' => 'menu-main',
                'class' => 'fa fa-bars',
                'id'    => 4,
                'pages' => array(
                    array(
                        'label' => 'Lista menu',
                        'route' => 'menu',
                        'visibleInPrimary' => true
                    ),
                    array(
                        'label' => 'Edycja menu',
                        'route' => 'menu/edit',
                        'visibleInPrimary' => false
                    ),
                ),
            ),
//            array(
//                'label' => 'Strony',
//                'route' => 'page-main',
//                'class' => 'fa fa-file-text-o',
//                'id'    => 2,
//                'website_id' => 1,
//                'pages' => array(
//                    array(
//                        'label' => 'Dodaj nową',
//                        'route' => 'page/create',
//                        'visibleInPrimary' => true
//                    ),
//                    array(
//                        'label' => 'Lista stron',
//                        'route' => 'page',
//                        'visibleInPrimary' => true
//                    ),
//                    array(
//                        'label' => 'Edycja strony',
//                        'route' => 'page/edit',
//                        'params' => array(),
//                        'visibleInPrimary' => false
//                    ),
//                    array(
//                        'label' => 'Usuwanie strony',
//                        'route' => 'page/delete',
//                        'params' => array(),
//                        'visibleInPrimary' => false
//                    ),
//                ),
//            ),
            array(
                'label' => 'Strony',
                'route' => 'post-main',
                'class' => 'fa fa-file-text-o',
                'id'    => 2,
                'pages' => array(
                    // Błękitna kraina
                    array(
                        'label' => 'Nasze przedszkole',
                        'route' => 'post',
                        'params' => array('category' => 'nasze-przedszkole'),
                        'visibleInPrimary' => true,
                        'website_id' => 1
                    ),
                    array(
                        'label' => 'Tworzenie sekcji - Nasze przedszkole',
                        'route' => 'post/create',
                        'params' => array('category' => 'nasze-przedszkole'),
                        'visibleInPrimary' => false,
                        'website_id' => 1
                    ),
                    array(
                        'label' => 'Edycja sekcji - Nasze przedszkole',
                        'route' => 'post/edit',
                        'params' => array('category' => 'nasze-przedszkole'),
                        'visibleInPrimary' => false,
                        'website_id' => 1
                    ),
                    array(
                        'label' => 'Podgląd sekcji - Nasze przedszkole',
                        'route' => 'post/preview',
                        'params' => array('category' => 'nasze-przedszkole'),
                        'visibleInPrimary' => false,
                        'website_id' => 1
                    ),
                    array(
                        'label' => 'Wizja i misja',
                        'route' => 'post',
                        'params' => array('category' => 'wizja-i-misja'),
                        'visibleInPrimary' => true,
                        'website_id' => 1
                    ),
                    array(
                        'label' => 'Tworzenie sekcji - Wizja i misja',
                        'route' => 'post/create',
                        'params' => array('category' => 'wizja-i-misja'),
                        'visibleInPrimary' => false,
                        'website_id' => 1
                    ),
                    array(
                        'label' => 'Edycja sekcji - Wizja i misja',
                        'route' => 'post/edit',
                        'params' => array('category' => 'wizja-i-misja'),
                        'visibleInPrimary' => false,
                        'website_id' => 1
                    ),
                    array(
                        'label' => 'Podgląd sekcji - Wizja i misja',
                        'route' => 'post/preview',
                        'params' => array('category' => 'wizja-i-misja'),
                        'visibleInPrimary' => false,
                        'website_id' => 1
                    ),
                    array(
                        'label' => 'Dzień w przedszkolu',
                        'route' => 'post',
                        'params' => array('category' => 'dzien-w-przedszkolu'),
                        'visibleInPrimary' => true,
                        'website_id' => 1
                    ),
                    array(
                        'label' => 'Tworzenie sekcji - Dzień w przedszkolu',
                        'route' => 'post/create',
                        'params' => array('category' => 'dzien-w-przedszkolu'),
                        'visibleInPrimary' => false,
                        'website_id' => 1
                    ),
                    array(
                        'label' => 'Edycja sekcji - Dzień w przedszkolu',
                        'route' => 'post/edit',
                        'params' => array('category' => 'dzien-w-przedszkolu'),
                        'visibleInPrimary' => false,
                        'website_id' => 1
                    ),
                    array(
                        'label' => 'Podgląd sekcji - Dzień w przedszkolu',
                        'route' => 'post/preview',
                        'params' => array('category' => 'dzien-w-przedszkolu'),
                        'visibleInPrimary' => false,
                        'website_id' => 1
                    ),
                    array(
                        'label' => 'Terapia',
                        'route' => 'post',
                        'params' => array('category' => 'terapia'),
                        'visibleInPrimary' => true,
                        'website_id' => 1
                    ),
                    array(
                        'label' => 'Tworzenie sekcji - Terapia',
                        'route' => 'post/create',
                        'params' => array('category' => 'terapia'),
                        'visibleInPrimary' => false,
                        'website_id' => 1
                    ),
                    array(
                        'label' => 'Edycja sekcji - Terapia',
                        'route' => 'post/edit',
                        'params' => array('category' => 'terapia'),
                        'visibleInPrimary' => false,
                        'website_id' => 1
                    ),
                    array(
                        'label' => 'Podgląd sekcji - Terapia',
                        'route' => 'post/preview',
                        'params' => array('category' => 'terapia'),
                        'visibleInPrimary' => false,
                        'website_id' => 1
                    ),
                    array(
                        'label' => 'Wczesne Wspomaganie Rozwoju',
                        'route' => 'post',
                        'params' => array('category' => 'wczesne-wspomaganie-rozwoju'),
                        'visibleInPrimary' => true,
                        'website_id' => 1
                    ),
                    array(
                        'label' => 'Tworzenie sekcji - Wczesne Wspomaganie Rozwoju',
                        'route' => 'post/create',
                        'params' => array('category' => 'wczesne-wspomaganie-rozwoju'),
                        'visibleInPrimary' => false,
                        'website_id' => 1
                    ),
                    array(
                        'label' => 'Edycja sekcji - Wczesne Wspomaganie Rozwoju',
                        'route' => 'post/edit',
                        'params' => array('category' => 'wczesne-wspomaganie-rozwoju'),
                        'visibleInPrimary' => false,
                        'website_id' => 1
                    ),
                    array(
                        'label' => 'Podgląd sekcji - Wczesne Wspomaganie Rozwoju',
                        'route' => 'post/preview',
                        'params' => array('category' => 'wczesne-wspomaganie-rozwoju'),
                        'visibleInPrimary' => false,
                        'website_id' => 1
                    ),
                    array(
                        'label' => 'Informacje',
                        'route' => 'post',
                        'params' => array('category' => 'informacje'),
                        'visibleInPrimary' => true,
                        'website_id' => 1
                    ),
                    array(
                        'label' => 'Tworzenie sekcji - Informacje',
                        'route' => 'post/create',
                        'params' => array('category' => 'informacje'),
                        'visibleInPrimary' => false,
                        'website_id' => 1
                    ),
                    array(
                        'label' => 'Edycja sekcji - Informacje',
                        'route' => 'post/edit',
                        'params' => array('category' => 'informacje'),
                        'visibleInPrimary' => false,
                        'website_id' => 1
                    ),
                    array(
                        'label' => 'Podgląd sekcji - Informacje',
                        'route' => 'post/preview',
                        'params' => array('category' => 'informacje'),
                        'visibleInPrimary' => false,
                        'website_id' => 1
                    ),
                    // Pro comunications
                    array(
                        'label' => 'Gabinet',
                        'route' => 'post',
                        'params' => array('category' => 'gabinet'),
                        'visibleInPrimary' => true,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Tworzenie sekcji - Gabinet',
                        'route' => 'post/create',
                        'params' => array('category' => 'gabinet'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Edycja sekcji - Gabinet',
                        'route' => 'post/edit',
                        'params' => array('category' => 'gabinet'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Podgląd sekcji - Gabinet',
                        'route' => 'post/preview',
                        'params' => array('category' => 'gabinet'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Arteterapia',
                        'route' => 'post',
                        'params' => array('category' => 'arteterapia'),
                        'visibleInPrimary' => true,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Tworzenie sekcji - Arteterapia',
                        'route' => 'post/create',
                        'params' => array('category' => 'arteterapia'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Edycja sekcji - Arteterapia',
                        'route' => 'post/edit',
                        'params' => array('category' => 'arteterapia'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Podgląd sekcji - Arteterapia',
                        'route' => 'post/preview',
                        'params' => array('category' => 'arteterapia'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Fizjoterapia',
                        'route' => 'post',
                        'params' => array('category' => 'fizjoterapia'),
                        'visibleInPrimary' => true,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Tworzenie sekcji - Fizjoterapia',
                        'route' => 'post/create',
                        'params' => array('category' => 'fizjoterapia'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Edycja sekcji - Fizjoterapia',
                        'route' => 'post/edit',
                        'params' => array('category' => 'fizjoterapia'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Podgląd sekcji - Fizjoterapia',
                        'route' => 'post/preview',
                        'params' => array('category' => 'fizjoterapia'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Masaż Shantala',
                        'route' => 'post',
                        'params' => array('category' => 'masaz-shantala'),
                        'visibleInPrimary' => true,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Tworzenie sekcji - Masaż Shantala',
                        'route' => 'post/create',
                        'params' => array('category' => 'masaz-shantala'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Edycja sekcji - Masaż Shantala',
                        'route' => 'post/edit',
                        'params' => array('category' => 'masaz-shantala'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Podgląd sekcji - Masaż Shantala',
                        'route' => 'post/preview',
                        'params' => array('category' => 'masaz-shantala'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Integracja Sensoryczna SI',
                        'route' => 'post',
                        'params' => array('category' => 'integracja-sensoryczna-si'),
                        'visibleInPrimary' => true,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Tworzenie sekcji - Integracja Sensoryczna SI',
                        'route' => 'post/create',
                        'params' => array('category' => 'integracja-sensoryczna-si'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Edycja sekcji - Integracja Sensoryczna SI',
                        'route' => 'post/edit',
                        'params' => array('category' => 'integracja-sensoryczna-si'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Podgląd sekcji - Integracja Sensoryczna SI',
                        'route' => 'post/preview',
                        'params' => array('category' => 'integracja-sensoryczna-si'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Neurologopeda',
                        'route' => 'post',
                        'params' => array('category' => 'neurologopeda'),
                        'visibleInPrimary' => true,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Tworzenie sekcji - Neurologopeda',
                        'route' => 'post/create',
                        'params' => array('category' => 'neurologopeda'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Edycja sekcji - Neurologopeda',
                        'route' => 'post/edit',
                        'params' => array('category' => 'neurologopeda'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Podgląd sekcji - Neurologopeda',
                        'route' => 'post/preview',
                        'params' => array('category' => 'neurologopeda'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Psycholog',
                        'route' => 'post',
                        'params' => array('category' => 'psycholog'),
                        'visibleInPrimary' => true,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Tworzenie sekcji - Psycholog',
                        'route' => 'post/create',
                        'params' => array('category' => 'psycholog'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Edycja sekcji - Psycholog',
                        'route' => 'post/edit',
                        'params' => array('category' => 'psycholog'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Podgląd sekcji - Psycholog',
                        'route' => 'post/preview',
                        'params' => array('category' => 'psycholog'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Terapia czaszkowo-krzyżowa',
                        'route' => 'post',
                        'params' => array('category' => 'terapia-czaszkowo-krzyzowa'),
                        'visibleInPrimary' => true,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Tworzenie sekcji - Terapia czaszkowo-krzyżowa',
                        'route' => 'post/create',
                        'params' => array('category' => 'terapia-czaszkowo-krzyzowa'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Edycja sekcji - Terapia czaszkowo-krzyżowa',
                        'route' => 'post/edit',
                        'params' => array('category' => 'terapia-czaszkowo-krzyzowa'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Podgląd sekcji - Terapia czaszkowo-krzyżowa',
                        'route' => 'post/preview',
                        'params' => array('category' => 'terapia-czaszkowo-krzyzowa'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Terapia Warnkego',
                        'route' => 'post',
                        'params' => array('category' => 'terapia-warnkego'),
                        'visibleInPrimary' => true,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Tworzenie sekcji - Terapia Warnkego',
                        'route' => 'post/create',
                        'params' => array('category' => 'terapia-warnkego'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Edycja sekcji - Terapia Warnkego',
                        'route' => 'post/edit',
                        'params' => array('category' => 'terapia-warnkego'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Podgląd sekcji - Terapia Warnkego',
                        'route' => 'post/preview',
                        'params' => array('category' => 'terapia-warnkego'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Pedagog',
                        'route' => 'post',
                        'params' => array('category' => 'pedagog'),
                        'visibleInPrimary' => true,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Tworzenie sekcji - Pedagog',
                        'route' => 'post/create',
                        'params' => array('category' => 'pedagog'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Edycja sekcji - Pedagog',
                        'route' => 'post/edit',
                        'params' => array('category' => 'pedagog'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Podgląd sekcji - Pedagog',
                        'route' => 'post/preview',
                        'params' => array('category' => 'pedagog'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Trening metodą Tomatisa',
                        'route' => 'post',
                        'params' => array('category' => 'trening-metoda-tomatisa'),
                        'visibleInPrimary' => true,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Tworzenie sekcji - Trening metodą Tomatisa',
                        'route' => 'post/create',
                        'params' => array('category' => 'trening-metoda-tomatisa'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Edycja sekcji - Trening metodą Tomatisa',
                        'route' => 'post/edit',
                        'params' => array('category' => 'trening-metoda-tomatisa'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Podgląd sekcji - Trening metodą Tomatisa',
                        'route' => 'post/preview',
                        'params' => array('category' => 'trening-metoda-tomatisa'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Logopeda',
                        'route' => 'post',
                        'params' => array('category' => 'logopeda'),
                        'visibleInPrimary' => true,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Tworzenie sekcji - Logopeda',
                        'route' => 'post/create',
                        'params' => array('category' => 'logopeda'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Edycja sekcji - Logopeda',
                        'route' => 'post/edit',
                        'params' => array('category' => 'logopeda'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Podgląd sekcji - Logopeda',
                        'route' => 'post/preview',
                        'params' => array('category' => 'logopeda'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Sala doświadczeń',
                        'route' => 'post',
                        'params' => array('category' => 'sala-doswiadczen'),
                        'visibleInPrimary' => true,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Tworzenie sekcji - Sala doświadczeń',
                        'route' => 'post/create',
                        'params' => array('category' => 'sala-doswiadczen'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Edycja sekcji - Sala doświadczeń',
                        'route' => 'post/edit',
                        'params' => array('category' => 'sala-doswiadczen'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Podgląd sekcji - Sala doświadczeń',
                        'route' => 'post/preview',
                        'params' => array('category' => 'sala-doswiadczen'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Muzykoterapia',
                        'route' => 'post',
                        'params' => array('category' => 'muzykoterapia'),
                        'visibleInPrimary' => true,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Tworzenie sekcji - Muzykoterapia',
                        'route' => 'post/create',
                        'params' => array('category' => 'muzykoterapia'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Edycja sekcji - Muzykoterapia',
                        'route' => 'post/edit',
                        'params' => array('category' => 'muzykoterapia'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Podgląd sekcji - Muzykoterapia',
                        'route' => 'post/preview',
                        'params' => array('category' => 'muzykoterapia'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Wczesne Wspomaganie Rozwoju',
                        'route' => 'post',
                        'params' => array('category' => 'wczesne-wspomaganie-rozwoju'),
                        'visibleInPrimary' => true,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Tworzenie sekcji - Wczesne Wspomaganie Rozwoju',
                        'route' => 'post/create',
                        'params' => array('category' => 'wczesne-wspomaganie-rozwoju'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Edycja sekcji - Wczesne Wspomaganie Rozwoju',
                        'route' => 'post/edit',
                        'params' => array('category' => 'wczesne-wspomaganie-rozwoju'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Podgląd sekcji - Wczesne Wspomaganie Rozwoju',
                        'route' => 'post/preview',
                        'params' => array('category' => 'wczesne-wspomaganie-rozwoju'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                ),
            ),
            array(
                'label' => 'Slider',
                'route' => 'slider-main',
                'class' => 'fa fa-picture-o',
                'id'    => 2,
                'pages' => array(
//                    array(
//                        'label' => 'Dodaj nowy',
//                        'route' => 'slider/create',
//                        'visibleInPrimary' => true
//                    ),
                    array(
                        'label' => 'Lista sliderów',
                        'route' => 'slider',
                        'visibleInPrimary' => true
                    ),
                    array(
                        'label' => 'Edycja slidera',
                        'route' => 'slider/edit',
                        'params' => array(),
                        'visibleInPrimary' => false
                    ),
                    array(
                        'label' => 'Usuwanie slidera',
                        'route' => 'slider/delete',
                        'params' => array(),
                        'visibleInPrimary' => false
                    ),
                    array(
                        'label' => 'Lista elementów',
                        'route' => 'slider/items',
                        'params' => array(),
                        'visibleInPrimary' => false
                    ),
                    array(
                        'label' => 'Dodaj nowy element',
                        'route' => 'slider/items/create',
                        'params' => array(),
                        'visibleInPrimary' => false
                    ),
                    array(
                        'label' => 'Edycja elementu',
                        'route' => 'slider/items/edit',
                        'params' => array(),
                        'visibleInPrimary' => false
                    ),
                ),
            ),
            array(
                'label' => 'Pracownicy',
                'route' => 'users-main',
                'class' => 'fa fa-users',
                'id'    => 4,
                'pages' => array(
                    array(
                        'label' => 'Dodaj nowy',
                        'route' => 'users/create',
                        'visibleInPrimary' => true
                    ),
                    array(
                        'label' => 'Lista pracowników',
                        'route' => 'users',
                        'visibleInPrimary' => true
                    ),
                    array(
                        'label' => 'Edycja pracownika',
                        'route' => 'users/edit',
                        'params' => array(),
                        'visibleInPrimary' => false
                    ),
                    array(
                        'label' => 'Podgląd pracownika',
                        'route' => 'users/preview',
                        'params' => array(),
                        'visibleInPrimary' => false
                    ),
                    array(
                        'label' => 'Usuwanie pracownika',
                        'route' => 'users/delete',
                        'params' => array(),
                        'visibleInPrimary' => false
                    )  ,
                    array(
                        'label' => 'Zmiana hasła',
                        'route' => 'users/change-password',
                        'params' => array(),
                        'visibleInPrimary' => false
                    )
                ),
            ),
//            array(
//                'label' => 'Newsletter',
//                'route' => 'newsletter-main',
//                'class' => 'fa fa-envelope-o',
//                'id'    => 4,
//                'pages' => array(
//                    array(
//                        'label' => 'Wiadomości',
//                        'route' => 'newsletter',
//                        'visibleInPrimary' => true
//                    ),
//                    array(
//                        'label' => 'Tworzenie wiadomości',
//                        'route' => 'newsletter/create',
//                        'visibleInPrimary' => false
//                    ),
//                    array(
//                        'label' => 'Edycja wiadomości',
//                        'route' => 'newsletter/edit',
//                        'visibleInPrimary' => false
//                    ),
//                    array(
//                        'label' => 'Podgląd wiadomości',
//                        'route' => 'newsletter/preview',
//                        'visibleInPrimary' => false
//                    ),
//                    array(
//                        'label' => 'Subskrybenci',
//                        'route' => 'newsletter/subscriber-list',
//                        'visibleInPrimary' => true
//                    ),
//                    array(
//                        'label' => 'Tworzenie subskrybenta',
//                        'route' => 'newsletter/subscriber-list/create',
//                        'visibleInPrimary' => false
//                    ),
//                    array(
//                        'label' => 'Edycja subskrybenta',
//                        'route' => 'newsletter/subscriber-list/edit',
//                        'visibleInPrimary' => false
//                    ),
//                    array(
//                        'label' => 'Podgląd subskrybenta',
//                        'route' => 'newsletter/subscriber-list/preview',
//                        'visibleInPrimary' => false
//                    ),
//                    array(
//                        'label' => 'Grupy subskrybentów',
//                        'route' => 'newsletter/subscriber-group',
//                        'visibleInPrimary' => true,
//                    ),
//                    array(
//                        'label' => 'Tworzenie grupy',
//                        'route' => 'newsletter/subscriber-group/create',
//                        'visibleInPrimary' => false
//                    ),
//                    array(
//                        'label' => 'Edycja grupy',
//                        'route' => 'newsletter/subscriber-group/edit',
//                        'visibleInPrimary' => false
//                    ),
//                    array(
//                        'label' => 'Podgląd grupy',
//                        'route' => 'newsletter/subscriber-group/preview',
//                        'visibleInPrimary' => false
//                    ),
//                    array(
//                        'label' => 'Ustawienia',
//                        'route' => 'newsletter/settings',
//                        'visibleInPrimary' => true
//                    ),
//                ),
//            ),
            array(
                'label' => 'Słowniki',
                'route' => 'dictionary-main',
                'class' => 'fa fa-book',
                'id'    => 2,
                'pages' => array(
                    array(
                        'label' => 'Lista stanowisk',
                        'route' => 'dictionary',
                        'params' => array('category' => 'position'),
                        'visibleInPrimary' => true,
                        'website_id' => 1
                    ),
                    array(
                        'label' => 'Tworzenie stanowiska',
                        'route' => 'dictionary/create',
                        'params' => array('category' => 'position'),
                        'visibleInPrimary' => false,
                        'website_id' => 1
                    ),
                    array(
                        'label' => 'Edycja stanowiska',
                        'route' => 'dictionary/edit',
                        'params' => array('category' => 'position'),
                        'visibleInPrimary' => false,
                        'website_id' => 1
                    ),
                    array(
                        'label' => 'Lista grup',
                        'route' => 'dictionary',
                        'params' => array('category' => 'group'),
                        'visibleInPrimary' => true,
                        'website_id' => 1
                    ),
                    array(
                        'label' => 'Tworzenie grupy',
                        'route' => 'dictionary/create',
                        'params' => array('category' => 'group'),
                        'visibleInPrimary' => false,
                        'website_id' => 1
                    ),
                    array(
                        'label' => 'Edycja grupy',
                        'route' => 'dictionary/edit',
                        'params' => array('category' => 'group'),
                        'visibleInPrimary' => false,
                        'website_id' => 1
                    ),
                    array(
                        'label' => 'Lista stanowisk',
                        'route' => 'dictionary',
                        'params' => array('category' => 'position'),
                        'visibleInPrimary' => true,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Tworzenie stanowiska',
                        'route' => 'dictionary/create',
                        'params' => array('category' => 'position'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                    array(
                        'label' => 'Edycja stanowiska',
                        'route' => 'dictionary/edit',
                        'params' => array('category' => 'position'),
                        'visibleInPrimary' => false,
                        'website_id' => 2
                    ),
                ),
            ),
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'navigation' => 'Zend\Navigation\Service\DefaultNavigationFactory',
        ),
    ),
);