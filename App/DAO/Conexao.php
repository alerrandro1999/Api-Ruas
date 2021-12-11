<?php

namespace App\DAO;

use App\Common\Environment;

use PDO;

class Conexao
{
    protected $pdo;

    public function __construct()
    {
        // $host = getenv('DB_HOST');
        // $user = getenv('DB_USER');
        // $pass = getenv('DB_PASS');
        // $dbname = getenv('DB_NAME');

        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $dbname = 'db_ruas';
        $charset = 'utf8';

        $this->pdo = new PDO('mysql:host='.$host.';charset='.$charset.';dbname='.$dbname, $user, $pass);
        $this->pdo->setAttribute(
            PDO::ATTR_ERRMODE,
            PDO::ERRMODE_EXCEPTION
        );
    }
}