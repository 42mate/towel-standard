<?php

global $appConfig;

define('APP_ROOT_DIR', dirname(__FILE__) . '/../../..');
define('APP_WEB_DIR', APP_ROOT_DIR . '/web');
define('APP_UPLOADS_DIR', APP_WEB_DIR . '/uploads');
define('APP_LIB_DIR', APP_ROOT_DIR . '/vendor');
define('APP_FW_DIR', APP_ROOT_DIR . '/vendor/42mate/towel/src/Towel');
define('APP_CONFIG_DIR', dirname(__FILE__));
define('APP_DIR', dirname(__FILE__) . '/..');
define('APP_BASE_URL', '/');
define('APP_SYS_EMAIL', 'your@email.com');

$appConfig = array(
    'doctrine' => array(
        'dbs.options' => array(
            'default' => array(
                'driver' => 'pdo_mysql',
                'host' => 'localhost',
                'dbname' => 'db_name',
                'user' => 'db_user',
                'password' => 'db_pass',
                'charset' => 'utf8',
            ),
            /**
             * 'mysql_two' => array(
             *   'driver'    => 'pdo_mysql',
             *   'host'      => 'mysql_write.someplace.tld',
             *   'dbname'    => 'my_database',
             *   'user'      => 'my_username',
             *   'password'  => 'my_password',
             *   'charset'   => 'utf8',
             *   ),
             */
        ),
    ),

    'twig' => array(
        'twig.path' => array(
            APP_DIR . '/Views',
            APP_FW_DIR . '/MVC/Views'
        )
    ),

    'sessions' => array(
        'name' => '_SESS_APP',
        'cookie_lifetime' => 0,
        'session.storage.save_path' => '/tmp/',
    ),

    'class_map' => array(
        'user_controller' => '\Towel\MVC\Controller\User',
        'user_model' => '\Towel\MVC\Model\User',
        'app' =>  '\Towel\BaseApp',
    ),

    'debug' => true,
);
