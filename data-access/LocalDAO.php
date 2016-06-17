<?php

/**
 * Created by PhpStorm.
 * User: Gabriel Ramos

 */
 
require_once("DataAccessObject.php");
require_once(__DIR__."/../model/Local.php");

class LocalDAO extends DataAccessObject{

    public function getLocais($order_by){
        $locais = array();
        $query = "SELECT * FROM Localidade ORDER BY ".$order_by."";
        $rows = parent::retrieve($query, array());
        foreach($rows as $row){
            $local = new Local();
            $local->preenchePorArray($row);
            $locais[] = $local;
        }
        return $locais;
    }
    public function inserirLocal($local){
        $query = "INSERT INTO localidade (cod, nome, cidade, posicao_global) VALUES (".$local->cod.", ".$local->nome.", "
            .$local->cidade.", ".$local->posicao_global.")";
        $rows = parent::insert($query, array());

    }

} 


?>