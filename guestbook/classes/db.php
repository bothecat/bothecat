<?php

class DB {
    
    public $dbh;
    private $dsn = 'mysql:host=localhost;dbname=bothecat';
    private $user = 'root';
    private $pass = '';
    
    public function __construct() {   
        try {
            $this->dbh = new PDO($this->dsn, $this->user, $this->pass);
        } catch(PDOException $e) {
            exit($e->getMessage());
        }
    }
    
    public function __destruct() {
        $this->dbh = null;
    }
    
}