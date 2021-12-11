<?php

namespace App\Common;

class Environment
{
    //carregar as variavies de ambiente
    public static function load($dir)
    {
        //verifica se o arquivo existe
        if (!file_exists($dir.'/.env')) {
            return false;
        // echo 'deu ruim';
        }
            
        //define as variveis de ambiente
        $lines = file($dir.'/.env');
        foreach ($lines as $line) {
            putenv(trim($line));
        }

        
    }
}