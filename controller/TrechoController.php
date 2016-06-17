<?php
/**
 * Created by PhpStorm.
 * User: Gabriel Ramos

 */
require_once(__DIR__."/../data-access/TrechoDAO.php");
require_once(__DIR__."/../model/Trecho.php");



class TrechoController{
    private static $TrechoDAO;

    protected function __construct(){
        self::$TrechoDAO = new TrechoDAO();
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

    public function getTrechoPor($ordenacao){
        return self::$TrechoDAO->getTrecho($ordenacao);
    }
    public function inserirTrecho($cod, $nome, $cidade, $posicao_global){
        $local = new Trecho(array($cod, $nome, $cidade, $posicao_global));
        self::$TrechoDAO->inserirTrecho($local);
    }

}