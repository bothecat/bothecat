<?php

class Fighter {
    
    private $id;
    
    public function __construct() {}
    
    public function getInform() {
        if(isset($_POST['fighter'])):
            $this->id = (int)$_POST['id'];
            $this->db = new DB();
            $sth = $this->db->dbh->query("SELECT * FROM `cf_fighters` WHERE 
                `id` = '$this->id'");
            $result = $sth->fetch(PDO::FETCH_ASSOC);
            echo $result = json_encode($result);
            $this->db = null;
        endif;
        exit;
    }
    
    public function selectToOpponent() {
        $this->db = new DB();
        $sth = $this->db->dbh->query("SELECT COUNT(*) FROM `cf_fighters`");
        $result = $sth->fetch();
        $this->opponent_id = rand(0, $result[0]);
        $sth = $this->db->dbh->query("SELECT * FROM `cf_fighters` WHERE
            `id` = '$this->opponent_id'");
        $result = $sth->fetch(PDO::FETCH_ASSOC);
        echo $result = json_encode($result);
        $this->db = null;
        exit;
    }
    
    public function setFighters() {
        if(isset($_POST['set_fighters'])):
            Session::init();
            Session::set('player_1', (int)$_POST['p1_id']);
            Session::set('player_2', (int)$_POST['p2_id']);
            $ret_arr = array('error' => 0);
        else:
            $ret_arr = array('error' => 1);
        endif;
        echo json_encode($ret_arr);
    }
    
}