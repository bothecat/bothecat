<?php

class DB {
    
    public $dbh;
    
    public function __construct() {
        try {
            $this->dbh = new PDO('mysql:host=' . DBHOST . ';dbname=' .
                    DBNAME, DBUSER, DBPASS);
        } catch(PDOException $e) {
            exit($e->getMessage());
        }
    }
    
    public function __destruct() {
        $this->dbh = null;
    }
    
}