<?php

class View {
    
    public function __construct() {}
    
    public static function view($page) {
        require_once $_SERVER['DOCUMENT_ROOT'] . '/guestbook/temp/temp/' . $page . '.php';
    }
    
}