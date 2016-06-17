<?php
/**
 * Created by PhpStorm.
 * User: Gabriel Ramos

 */
require_once(__DIR__."/../data-access/PessoaDAO.php");
require_once(__DIR__."/../model/Pessoa.php");



class PessoaController{
    private static $PessoaDAO;

    protected function __construct(){
        self::$PessoaDAO = new PessoaDAO();
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

    public function getPessoaPor($ordenacao){
        return self::$PessoaDAO->getPessoa($ordenacao);
    }
    public function inserirPessoa($cod, $nome, $cidade, $posicao_global){
        $local = new Pessoa(array($cod, $nome, $cidade, $posicao_global));
        self::$PessoaDAO->inserirPessoa($local);
    }

}