<?php
/**
 * Created by PhpStorm.
 * User: Gabriel Ramos

 */
class Cliente {
    public $cpf;
    public $senha;

    public function preenchePorArray($row){
        $this->cpf = $row["cpf"];
        $this->senha = $row["senha"];
    }

}