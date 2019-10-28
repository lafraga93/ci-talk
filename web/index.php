<?php

declare(strict_types=1);

require_once '../vendor/autoload.php';

$router = new \Bramus\Router\Router();

$router->get('/', 'App\Controller\HomeController@showUploadResource');
$router->post('/upload', 'App\Controller\FileUploadController@getFileData');

$router->run();
