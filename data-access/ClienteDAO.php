<?php
/**
 * Created by PhpStorm.
 * User: Gabriel Ramos

 */


require_once("DataAccessObject.php");
require_once(__DIR__."/../model/Cliente.php");

class ClienteDAO extends DataAccessObject{

    public function getCliente($order_by){
        $locais = array();
        $query = "SELECT * FROM Cliente ORDER BY ".$order_by."";
        $rows = parent::retrieve($query, array());
        foreach($rows as $row){
            $local = new Cliente();
            $local->preenchePorArray($row);
            $locais[] = $local;
        }
        return $locais;
    }
    public function inserirCliente($local){
        $query = "INSERT INTO Cliente (cod, nome, cidade, posicao_global) VALUES (".$local->cod.", ".$local->nome.", "
            .$local->cidade.", ".$local->posicao_global.")";
        $rows = parent::insert($query, array());

    }

} 

