<?php
/**
 * Created by PhpStorm.
 * User: Gabriel Ramos

 */


require_once("DataAccessObject.php");
require_once(__DIR__."/../model/Trecho.php");

class TrechoDAO extends DataAccessObject{

    public function getTrecho($order_by){
        $locais = array();
        $query = "SELECT * FROM Trecho ORDER BY ".$order_by."";
        $rows = parent::retrieve($query, array());
        foreach($rows as $row){
            $local = new Trecho();
            $local->preenchePorArray($row);
            $locais[] = $local;
        }
        return $locais;
    }
    public function inserirTrecho($local){
        $query = "INSERT INTO Trecho (cod, nome, cidade, posicao_global) VALUES (".$local->cod.", ".$local->nome.", "
            .$local->cidade.", ".$local->posicao_global.")";
        $rows = parent::insert($query, array());

    }

} 

