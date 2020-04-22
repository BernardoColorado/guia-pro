<?php
//
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
//
use Core\Config\Config as Config;
$config = Config::instanciate('../app/config/config.json');
//
$app = new \Slim\App();
//
/*********************/
/******CONTAINER******/
/*********************/
require_once '../app/main/container/main.php';
require_once '../app/main/container/database.php';
require_once '../app/main/container/models.php';
//
/******************/
/****ROUTER********/
/******************/
//
require_once '../app/main/router/page/guia.php';
require_once '../app/main/router/page/usuario.php';
//
/******************/
/****EJECUTAMOS****/
/******************/

$app->run();

?>