<?php
/**
 * Created by PhpStorm.
 * User: Gabriel Ramos

 */
require_once(__DIR__."/../data-access/ViagemDAO.php");
require_once(__DIR__."/../model/viagem.php");



class ViagemController{
    private static $ViagemDAO;

    protected function __construct(){
        self::$ViagemDAO = new ViagemDAO();
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

    public function getViagemPor($ordenacao){
        return self::$ViagemDAO->getViagem($ordenacao);
    }
    public function inserirViagem($cod, $nome, $cidade, $posicao_global){
        $local = new Viagem(array($cod, $nome, $cidade, $posicao_global));
        self::$ViagemDAO->inserirViagem($local);
    }

}