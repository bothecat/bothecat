<?php

class Help {
    
    private $param;
    private $view;
    
    public function __construct($param = null) {
        if($param != null) $this->param = (int)$param;
    }
    
    public function main() {
        $this->view = View::data(array(
            'title' => 'Help | BoTheCat'
        ));
        $this->view = View::headFiles(array(
            "<link rel='stylesheet' href='" . STYLES . "/styles.css' type='text/css'>",
        ));
        $this->view = View::view('help');
    }
    
}