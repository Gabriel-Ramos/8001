<?php
/**
 * Created by PhpStorm.
 * User: Gabriel Ramos

 */
require_once(__DIR__."/../data-access/VeiculoDAO.php");
require_once(__DIR__."/../model/Veiculo.php");



class VeiculoController{
    private static $VeiculoDAO;

    protected function __construct(){
        self::$VeiculoDAO = new VeiculoDAO();
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

    public function getVeiculoPor($ordenacao){
        return self::$VeiculoDAO->getVeiculo($ordenacao);
    }
    public function inserirVeiculo($cod, $nome, $cidade, $posicao_global){
        $local = new Veiculo(array($cod, $nome, $cidade, $posicao_global));
        self::$VeiculoDAO->inserirVeiculo($local);
    }

}