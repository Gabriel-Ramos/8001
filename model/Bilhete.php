<?php
/**
 * Created by PhpStorm.
 * User: Gabriel Ramos

 */
class Bilhete {
    public $id_viagem;
    public $poltrona;
    public $cpf;
    public $trecho_de_embarque;
	public $trecho_de_desembarque;

    public function preenchePorArray($row){
        $this->id_viagem = $row["id_viagem"];
        $this->poltrona = $row["poltrona"];
        $this->cpf = $row["cpf"];
        $this->trecho_de_embarque = $row["trecho_de_embarque"];
		$this->trecho_de_desembarque = $row["trecho_de_desembarque"];
    }

}