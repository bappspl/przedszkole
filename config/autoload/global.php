<?php
return array(
    'db' => array(
        'driver'         => 'Pdo',
        'dsn'            => 'mysql:dbname=vmadmin_przed;host=sql.s12.vdl.pl',
        'driver_options' => array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
        ),
    ),
    'service_manager' => array(
         'factories' => array(
             'Zend\Db\Adapter\Adapter'
                     => 'Zend\Db\Adapter\AdapterServiceFactory',
         ),
    ),
    'static_salt' => 'aFGQ475SDsdfsaf2342',
    'app_name' => 'przedszkole',
    'logger_mail' => false,
    'site' => array(
        'pro' => 2,
        'kraina' => 1
    )
);
