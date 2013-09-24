<?php

class View {
    
    public static $data;
    public static $head_files;
    public static $fighters;
    
    public function __construct() {}
    
    public static function view($url) {
        require_once VIEWS . '/header_view.php';
        require_once VIEWS . '/' .$url . '_view.php';
        require_once VIEWS . '/footer_view.php';
    }
    
    public static function data($data) {
        self::$data = $data;
    }
    
    public static function headFiles($data) {
        self::$head_files = $data;
    }
    
    public static function fighters($data) {
        self::$fighters = $data;
    }
    
}