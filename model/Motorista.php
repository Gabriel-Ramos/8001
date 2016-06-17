<?php
/**
 * Created by PhpStorm.
 * User: Gabriel Ramos

 */
class Motorista {
    public $cpf;
    public $matricula;
    public $cnh;
    public $emissao_cnh;
	public $validadade_cnh;
    public $data_admissao;

    public function preenchePorArray($row){
        $this->cpf = $row["cpf"];
        $this->matricula = $row["matricula"];
        $this->cnh = $row["cnh"];
        $this->emissao_cnh = $row["emissao_cnh"];
		$this->validadade_cnh = $row["validadade_cnh"];
        $this->data_admissao = $row["data_admissao"];
		
    }

}