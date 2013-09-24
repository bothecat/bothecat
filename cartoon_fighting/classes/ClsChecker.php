<?php

class ClsChecker {
    
    private $url;
    private $method;
    private $param;
    
    public function __construct($url) {
        $this->url = explode('/', $url);
        $this->classNameCheck();
        $this->methodCheck();
        $this->paramCheck();
        $this->objCreate();
    }
    
    private function classNameCheck() {
        switch($this->url[0]):
            case 'newgame':
                $this->class = 'NewGame';
                break;
            case 'game':
                $this->class = 'Game';
                break;
            case 'help':
                $this->class = 'Help';
                break;
            case 'records':
                $this->class = 'Records';
                break;
            case 'fighter':
                $this->class = 'Fighter';
                break;
            default:
                $this->class = 'Index';
                break;
        endswitch;
    }
    
    private function methodCheck() {
        $this->method = isset($this->url[1]) ? $this->url[1] : 'main';
    }
    
    private function paramCheck() {
        $this->param = isset($this->url[2]) ? $this->url[2] : null;
    }
    
    private function objCreate() {
        $class = new $this->class;
        $class->{$this->method}($this->param);
    }
    
}