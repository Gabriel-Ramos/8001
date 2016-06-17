<?php
/**
 * Created by PhpStorm.
 * User: Gabriel Ramos

 */

class Pessoa {
    public $cpf;
    public $nome;
    public $data_nascimento;
    public $cep;
    public $endereco;
    public $complemento;
    public $bairro;
    public $cidade;
    public $estado;
    public $ddd;
    public $telefone;
	
	public function preenchePorArray($row){
        $this->cpf = $row["cpf"];
        $this->nome = $row["nome"];
        $this->data_nascimento = $row["data_nascimento"];
        $this->cep = $row["cep"];
		$this->endereco = $row["endereco"];
		$this->complemento = $row["complemento"];
        $this->bairro = $row["bairro"];
        $this->cidade = $row["cidade"];
        $this->estado = $row["estado"];
		$this->ddd = $row["ddd"];
		$this->telefone = $row["telefone"];
    }
}