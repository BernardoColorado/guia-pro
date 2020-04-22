<?php
//rutas de usuario
$app->get('/', \App\Controllers\Page\GuiaController::class.':index')->setName('home');
$app->get('/guia/materia', \App\Controllers\Page\GuiaController::class.':materia')->setName('materia');
$app->get('/guia/materia/{idMateria}/temario/{idTema}', \App\Controllers\Page\GuiaController::class.':temario')->setName('tema');
$app->get('/guia/materia/{idMateria}/temario/{idTema}/capitulo/{idCapitulo}', \App\Controllers\Page\GuiaController::class.':capitulo')->setName('capitulo');
?>