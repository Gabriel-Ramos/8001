<?php
/**
 * Created by PhpStorm.
 * User: Gabriel Ramos

 */

class Trecho {
    public $id;
    public $distancia;
    public $itinerario;
    public $valor;
	public $local_destino;
	public $local_saida;

    public function preenchePorArray($row){
        $this->id = $row["id"];
        $this->distancia = $row["distancia"];
        $this->itinerario = $row["itinerario"];
        $this->valor = $row["valor"];
		$this->local_destino = $row["local_destino"];
		$this->local_saida = $row["local_saida"];
    }
}