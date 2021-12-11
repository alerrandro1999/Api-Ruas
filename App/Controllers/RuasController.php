<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;

use \Slim\Http\Response as Response;

use App\DAO\RuasDAO;


class RuasController
{
    public function getRuas(Request $request, Response $response, array $args) : Response
    {
        $ruasDAO = new RuasDAO();
        $ruas = $ruasDAO->getAllRuas();
        $response = $response->withJson($ruas);
        return $response;
    }

    public function getRuaById(Request $request, Response $response, array $args) : Response
    {
        $ruasDAO = new RuasDAO();
        $ruas = $ruasDAO->getRuaById($args['id']);
        $response = $response->withJson($ruas);
        return $response;
    }

    public function getRuaByTipo(Request $request, Response $response, array $args) : Response
    {
        $ruasDAO = new RuasDAO();
        $ruas = $ruasDAO->getRuaByTipo($args['tipo']);
        $response = $response->withJson($ruas);
        return $response;
    }
}