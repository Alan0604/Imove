<?php

class Conexao {
    public static $instance;

    private static $localdb = 'localhost';
    private static $nomedb = 'Imovel';
    private static $usuariodb = 'root';
    private static $senhadb = '';
        
    function __construct() {
    }
    
    public static function getInstance(){
        if(!isset(self::$instance)){
            $pdoConf = 'mysql:host=' . self::$localdb . ';dbname=' . self::$nomedb . ';charset=utf8';
            self::$instance = new PDO($pdoConf, self::$usuariodb, self::$senhadb);
        }
        return self::$instance;
    }
}