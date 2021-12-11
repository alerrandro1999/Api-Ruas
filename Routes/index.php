<?php

use App\Controllers\RuasController;

use function Src\slimConfiguration;

$app = new \Slim\App(slimConfiguration());

$app->get('/ruas', RuasController::class . ':getRuas');
$app->get('/ruas/id={id}', RuasController::class . ':getRuaById');
$app->get('/ruas/tipo={tipo}', RuasController::class . ':getRuaByTipo');

$app->run();

