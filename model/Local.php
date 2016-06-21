<?php
/**
 * Created by PhpStorm.
 * User: Renard
 * Date: 11/06/2016
 * Time: 18:04
 */

class Local {
    public $cod;
    public $nome;
    public $cidade;
    public $posicao_global;

    public function preenchePorArray($row){
        $this->cod = $row["cod"];
        $this->nome = $row["nome"];
        $this->cidade = $row["cidade"];
        $this->posicao_global = $row["posicao_global"];
    }

}