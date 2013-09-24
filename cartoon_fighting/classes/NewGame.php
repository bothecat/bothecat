<?php

class NewGame {
    
    private $param;
    private $view;
    private $fighters;
    
    public function __construct($param = null) {
        if($param != null) $this->param = (int)$param;
    }
    
    public function main() {
        $this->getFighters();
        $this->view = View::fighters($this->fighters);
        $this->view = View::data(array(
            'title' => 'New Game | BoTheCat'
        ));
        $this->view = View::headFiles(array(
            "<link rel='stylesheet' href='" . STYLES . "/styles.css' type='text/css'>",
            "<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>",
            "<script src='" . JS . "/new_game.js' type='text/javascript'></script>"
        ));
        $this->view = View::view('newgame');
    }
    
    private function getFighters() {
        $this->db = new DB();
        $sth = $this->db->dbh->query('SELECT * FROM `cf_fighters`');
        $this->fighters = $sth->fetchAll();
        #echo '<pre>';
        #print_r($result);
        #echo '</pre>';
        $this->db = null;
    }
    
}