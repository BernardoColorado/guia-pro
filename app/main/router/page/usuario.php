<?php
/*
* Rutas de interaccion con el usuario
* Rutas de pago de usuario
* Salida e Inicio de sesion
*/
$app->get('/usuario/registrarse', \App\Controllers\Page\UsuarioController::class.':signupGet');
$app->post('/usuario/registrarse', \App\Controllers\Page\UsuarioController::class.':signupPost');
$app->get('/usuario/acceder', \App\Controllers\Page\UsuarioController::class.':signinGet');
$app->post('/usuario/acceder', \App\Controllers\Page\UsuarioController::class.':signinPost');
$app->get('/usuario/salir', \App\Controllers\Page\UsuarioController::class.':signout');
//
$app->get('/usuario/test', \App\Controllers\Page\UsuarioController::class.':test');

?>