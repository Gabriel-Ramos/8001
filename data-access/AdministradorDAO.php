<?php
require_once("/data-access/DataAccessObject.php");
require_once("/model/Administrador.php");
/**
 * Created by PhpStorm.
 * User: Renard
 * Date: 11/06/2016
 * Time: 19:41
 */

class AdministradorDAO extends DataAccessObject{

    public function getAdministradores(){
        $administradores = array();
        $query = "SELECT * FROM Administrador INNER JOIN Pessoa ON Administrador.cpf = Pessoa.cpf";
        $rows = parent::query($query);
        foreach($rows as $row){
            $administradores[] = new Administrador($row['cpf'], $row['nome'], $row['data_nascimento'], $row['cep'], $row['endereco'],
                $row['complemento'], $row['bairro'], $row['cidade'], $row['estado'], $row['ddd'], $row['telefone'], $row['senha']);
        }
        return $administradores;
    }
    //toDo:Prevent SQL Injection
    public function getAdministrador($cpf){
        $administradores = array();
        $query = "SELECT * FROM Administrador INNER JOIN Pessoa ON Administrador.cpf = Pessoa.cpf WHERE cpf = ".$cpf."";
        $rows = parent::query($query);
        foreach($rows as $row){
            $administrador = new Administrador();
            $administradores[] = $administrador->restoreFromPDOStatement($row);
        }
        return $administradores[0];
    }
}