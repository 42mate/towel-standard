<?php

//Define Constants
define('WORK_DIR', getcwd());

//Require Files
require_once dirname(__FILE__) . '/vendor/autoload.php';

if (file_exists(WORK_DIR . '/bootstrap.php')) {
    require_once WORK_DIR . '/configs/config.php';
    $appRun = true;
} else {
    $appRun = false;
    require_once dirname(__FILE__) . '/vendor/42mate/towel/src/Towel/Console/configs/config.php';
}
foreach (glob(APP_FW_DIR . "/includes/*.inc.php") as $includeFiles) {
    require_once "$includeFiles";
}
//Set Console Application
global $silex;
$silex = new Silex\Application();
$silex['debug'] = $appConfig['debug'];
if (array_key_exists('doctrine', $appConfig)) {
    $silex->register(new Silex\Provider\DoctrineServiceProvider(), $appConfig['doctrine']);
}
$silex->register(new Silex\Provider\TwigServiceProvider(), $appConfig['twig']);
$silex->register(new Silex\Provider\UrlGeneratorServiceProvider());

$silex->register(new Knp\Provider\ConsoleServiceProvider(), array(
    'console.name'              => 'TowelConsole',
    'console.version'           => '1.0.0',
    'console.project_directory' => COMMANDS_DIR,
));

//Init Twig Functions
require_once APP_FW_DIR . "/twig/twig_functions.inc.php";

//Init Twig Filters
require_once APP_FW_DIR . "/twig/twig_filters.inc.php";
$consoleApp = $silex['console'];
foreach (scandir(COMMANDS_DIR) as $file) {
    $pathinfo = pathinfo($file);
    if (substr($pathinfo['filename'], -7) === 'Command') {
        $command = COMMANDS_NAMESPACE . '\\' . $pathinfo['filename'];
        $consoleApp->add(new $command());
    }
}
$consoleApp->run();
