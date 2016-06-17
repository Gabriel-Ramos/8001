<?php
/**
 * Created by PhpStorm.
 * User: Gabriel Ramos

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