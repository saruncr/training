<?php
class dbConn {
private $servername = "localhost";
private    $username = "root";
private    $password = "root";
private    $dbname  = 'StudentDb';
protected $conn;
/**
 * Description of dbConn
 *
 * @author sarun
 */

    //put your code here
    function __construct(){
        // Create connection
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    }
}

?>
