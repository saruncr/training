<?php
include_once './autoload.php';
include_once './dbConn.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dbConnection
 *
 * @author sarun
 */
class dbConnection extends dbConn{
    //put your code here
    public function __construct() {
        parent::__construct();
        print_r($this->conn);
        exit;
    }
}
