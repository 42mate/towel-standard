<?php

add_route('get', '/', array(
    'controller' => new Towel\MVC\Controller\BaseController(),
    'action' => 'index',
));

if ($appConfig['debug']) {
    get_app()->silex()->error(function (\Exception $e)  {
        $controller = new Towel\MVC\Controller\BaseController();
        return $controller->routeError($e);
    });
}
