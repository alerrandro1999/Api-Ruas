<?php

namespace App\DAO;

use App\DAO\Conexao;

use PDO;

class RuasDAO extends Conexao
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllRuas()
    {
        $ruas = $this->pdo
                     ->query('SELECT ID, RUA 
                                     FROM RUAS')
                     ->fetchAll(PDO::FETCH_ASSOC);
        return $ruas;
    }
    public function getRuaById($id)
    {
        $ruas = $this->pdo->query("SELECT ID, RUA FROM RUAS WHERE ID = $id")
                     ->fetchAll(PDO::FETCH_ASSOC);
        return $ruas;
    }

    public function getRuaByTipo($tipo)
    {
        $ruas = $this->pdo->query("SELECT ID, RUA FROM RUAS WHERE RUA LIKE '%$tipo%' ")
                     ->fetchAll(PDO::FETCH_ASSOC);
        return $ruas;
    }
} 