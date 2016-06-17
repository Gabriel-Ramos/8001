<?php
/**
 * Created by PhpStorm.
 * User: Gabriel Ramos

 */
require_once(__DIR__."/../data-access/MotoristaDAO.php");
require_once(__DIR__."/../model/Motorista.php");



class MotoristaController{
    private static $MotoristaDAO;

    protected function __construct(){
        self::$MotoristaDAO = new MotoristaDAO();
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

    public function getMotoristaPor($ordenacao){
        return self::$MotoristaDAO->getMotorista($ordenacao);
    }
    public function inserirMotorista($cod, $nome, $cidade, $posicao_global){
        $local = new Motorista(array($cod, $nome, $cidade, $posicao_global));
        self::$MotoristaDAO->inserirMotorista($local);
    }

}