<?php

class Data {
    
    public static $db;
    public static $name;
    public static $message;
    
    public function __construct() {}
    
    public static function getMessages() {
        self::$db = new DB();
        $sth = self::$db->dbh->query("SELECT * FROM `guestbook` ORDER BY `date` DESC");
        $result = $sth->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($result);
        self::$db = null;
        exit;
    }
    
    public function insert() {
        // we inserting something
        if(isset($_POST['name'])):
            self::checkData();
        else:
            header('Location: httP://bothecat/guestbook/');
            exit;
        endif;
    }
    
    public static function checkData() {
        self::$name = htmlspecialchars($_POST['name']);
        self::$message = htmlspecialchars($_POST['message']);
        if(self::$name != null):
            $dbh = new DB();
            $sth = $dbh->dbh->prepare("INSERT INTO `guestbook` (`name`, `message`,
                `date`) VALUES (:name, :message, :date)");
            $sth->execute(array(
                ':name' => self::$name,
                ':message' => self::$message,
                ':date' => time()
            ));
            $lastid = $dbh->dbh->lastInsertId();
            $sth = $dbh->dbh->query("SELECT * FROM `guestbook`
                    WHERE `id` = '$lastid'");
            $result = $sth->fetch();
            echo json_encode($result);
            $dbh = null;
        else:
            echo 'error';
        endif;
    }
    
}