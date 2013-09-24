<?php

class Game {
    
    private $param;
    private $view;
    private $player_1;
    private $player_2;
    private $fighters_data;
    
    public function __construct($param = null) {
        if($param != null) $this->param = (int)$param;
        Session::init();
        if(!isset($_SESSION['player_1']) && !isset($_SESSION['player_2'])):
            header('Location: http://bothecat/cartoon_fighting');
            exit;
        endif;
    }
    
    public function main() {
        if($this->fighters_data != null) $this->view = View::fighters($this->fighters_data);
        $this->view = View::data(array(
            'title' => 'Game | BoTheCat'
        ));
        $this->view = View::headFiles(array(
            "<link rel='stylesheet' href='" . STYLES . "/styles.css' type='text/css'>",
            "<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>",
            "<script src='" . JS . "/game.js' type='text/javascript'></script>"
        ));
        $this->view = View::view('game');
    }
    
    public function start() {
        $this->player_1 = Session::get('player_1');
        $this->player_2 = Session::get('player_2');
        $this->fighters_data = array(
            'player_1' => $this->getFighterInformation($this->player_1),
            'player_2' => $this->getFighterInformation($this->player_2)
        );
        $this->main();
    }
    
    public function getFighterInformation($id) {
        $this->db = new DB();
        $sth = $this->db->dbh->query("SELECT * FROM `cf_fighters` WHERE 
            `id` = '$id'");
        $result = $sth->fetch(PDO::FETCH_ASSOC);
        return $result;
        $this->db = null;
    }
    
    public function exitGame() {
        Session::init();
        Session::destroy();
        header('Location: http://bothecat/cartoon_fighting');
        exit;
    }
    
    public function winnerSet() {
        if(isset($_POST['winner'])):
            switch($_POST['winner']):
                case 'player':
                    $this->winner = 1;
                    break;
                case 'computer':
                    $this->winner = 2;
                    break;
            endswitch;
            Session::set('winner', $this->winner);
        else:
            header('Location: ' . APP);
            exit;
        endif;
        echo 'name';
    }
    
    public function gameOver() {
        if(Session::get('winner') != null):
            if(Session::get('winner') === 1) echo 'You are win!';
            else echo 'You are lose';
            Session::destroy();
        else:
            header('Location: ' . APP);
            exit;
        endif;
    }
    
}