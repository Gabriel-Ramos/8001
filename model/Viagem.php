<?php
/**
 * Created by PhpStorm.
 * User: Renard
 * Date: 11/06/2016
 * Time: 18:05
 */

class Viagem {
    public $id;
    public $cpf_motorist;
    public $placa_veiculo;
    public $hora_saida;
	public $hora_chegada;
	
    public function preenchePorArray($row){
        $this->id = $row["id"];
        $this->cpf_motorist = $row["cpf_motorista"];
        $this->placa_veiculo = $row["placa_veiculo"];
        $this->hora_saida = $row["hora_saida"];
		$this->hora_chegada = $row["hora_chegada"];
}
}
