<?php
/**
 * Created by PhpStorm.
 * User: Gabriel Ramos

 */

class Veiculo {
    public $Placa;
    public $modelo;
    public $fabricante;
    public $ano;
	public $numero_de_poltronas;
    public $tipo_assento;
    public $possui_banheiro;
    public $possui_ac;
    public $possui_frigobar;
	public $possui_wifi;
	public $possui_dvd;
	public $posicao_global;
	
    public function preenchePorArray($row){
        $this->Placa = $row["Placa"];
        $this->modelo = $row["modelo"];
		$this->fabricante = $row["fabricante"];
        $this->ano = $row["ano"];
        $this->numero_de_poltronas = $row["numero_de_poltronas"];
		$this->tipo_assento = $row["tipo_assento"];
		$this->possui_banheiro = $row["possui_banheiro"];
        $this->possui_ac = $row["possui_ac"];
        $this->possui_frigobar = $row["possui_frigobar"];
		$this->possui_wifi = $row["possui_wifi"];
		$this->possui_dvd = $row["possui_dvd"];
		$this->posicao_global = $row["posicao_global"];
}
}