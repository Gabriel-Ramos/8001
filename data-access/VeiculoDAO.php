<?php
/**
 * Created by PhpStorm.
 * User: Gabriel Ramos

 */


require_once("DataAccessObject.php");
require_once(__DIR__."/../model/Veiculo.php");

class VeiculoDAO extends DataAccessObject{

    public function getVeiculo($order_by){
        $locais = array();
        $query = "SELECT * FROM Veiculo ORDER BY ".$order_by."";
        $rows = parent::retrieve($query, array());
        foreach($rows as $row){
            $local = new Veiculo();
            $local->preenchePorArray($row);
            $locais[] = $local;
        }
        return $locais;
    }
    public function inserirVeiculo($local){
        $query = "INSERT INTO Veiculo (cod, nome, cidade, posicao_global) VALUES (".$local->cod.", ".$local->nome.", "
            .$local->cidade.", ".$local->posicao_global.")";
        $rows = parent::insert($query, array());

    }

} 

