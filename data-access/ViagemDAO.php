<?php
/**
 * Created by PhpStorm.
 * User: Gabriel Ramos

 */


require_once("DataAccessObject.php");
require_once(__DIR__."/../model/viagem.php");

class ViagemDAO extends DataAccessObject{

    public function getViagem($order_by){
        $locais = array();
        $query = "SELECT * FROM Viagem ORDER BY ".$order_by."";
        $rows = parent::retrieve($query, array());
        foreach($rows as $row){
            $local = new Viagem();
            $local->preenchePorArray($row);
            $locais[] = $local;
        }
        return $locais;
    }
    public function inserirViagem($local){
        $query = "INSERT INTO Viagem (cod, nome, cidade, posicao_global) VALUES (".$local->cod.", ".$local->nome.", "
            .$local->cidade.", ".$local->posicao_global.")";
        $rows = parent::insert($query, array());

    }

} 

