<?php
/**
 * Created by PhpStorm.
 * User: Renard
 * Date: 11/06/2016
 * Time: 18:41
 */
require_once(__DIR__."/../data-access/LocalDAO.php");


class LocalController{
    private static $localDAO;

    protected function __construct(){
        self::$localDAO = new LocalDAO();
    }

    public static function getInstance(){
        static $instance = null;
        if (null === $instance) {
            $instance = new static();
        }
        return $instance;
    }

    private function __clone(){
    }

    public function getLocaisPor($ordenacao){
        return self::$localDAO->getLocais($ordenacao);
    }

}