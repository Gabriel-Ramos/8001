<?php

require_once(__DIR__."/../data-access/LocalDAO.php");
require_once(__DIR__."/../model/Local.php");



class LocalController{
    private static $localDAO;

    protected function __construct(){
        self::$localDAO = new LocalDAO();
    }

    public static function getInstance(){
        static $instance = null;
        if (null === $instance) {
            $instance = new static();
        }
        return $instance;
    }

    private function __clone(){
    }

    public function getLocaisPor($ordenacao){
        return self::$localDAO->getLocais($ordenacao);
    }
    public function inserirLocal($cod, $nome, $cidade, $posicao_global){
        $local = new Local(array($cod, $nome, $cidade, $posicao_global));
        self::$localDAO->inserirLocal($local);
    }

}