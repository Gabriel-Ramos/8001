<?php
/**
 * Created by PhpStorm.
 * User: Gabriel Ramos

 */
require_once(__DIR__."/../data-access/BilheteDAO.php");
require_once(__DIR__."/../model/Bilhete.php");



class BilheteController{
    private static $BilheteDAO;

    protected function __construct(){
        self::$BilheteDAO = new BilheteDAO();
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

    public function getBilhetePor($ordenacao){
        return self::$BilheteDAO->getBilhete($ordenacao);
    }
    public function inserirBilhete($cod, $nome, $cidade, $posicao_global){
        $local = new Bilhete(array($cod, $nome, $cidade, $posicao_global));
        self::$BilheteDAO->inserirBilhete($local);
    }

}