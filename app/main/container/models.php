<?php
//
$container['user']=function($container){

  return new App\Models\User;

};
//
$container['materia']=function($container){

  return new App\Models\Materia;

};
//
$container['tema']=function($container){

  return new App\Models\Tema;

};
//
?>