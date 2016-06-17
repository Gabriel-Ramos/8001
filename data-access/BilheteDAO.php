<?php
/**
 * Created by PhpStorm.
 * User: Gabriel Ramos

 */


require_once("DataAccessObject.php");
require_once(__DIR__."/../model/Bilhete.php");

class BilheteDAO extends DataAccessObject{

    public function getBilhete($order_by){
        $locais = array();
        $query = "SELECT * FROM Bilhete ORDER BY ".$order_by."";
        $rows = parent::retrieve($query, array());
        foreach($rows as $row){
            $local = new Bilhete();
            $local->preenchePorArray($row);
            $locais[] = $local;
        }
        return $locais;
    }
    public function inserirBilhete($local){
        $query = "INSERT INTO Bilhete (cod, nome, cidade, posicao_global) VALUES (".$local->cod.", ".$local->nome.", "
            .$local->cidade.", ".$local->posicao_global.")";
        $rows = parent::insert($query, array());

    }

} 

