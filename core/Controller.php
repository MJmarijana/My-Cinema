<?php

class Controller {
    
    protected $data = array(); 
    protected $layout = "default"; 
    
    function __construct() {
        if (isset($_POST)) { 
            $this->data = $_POST;
        }      
    }
    
    function render($filename, $data) {   
        $this->data = array_merge($this->data, $data); 
        extract($data);      
        ob_start();
        require(ROOT."views/".get_class($this)."/".$filename.".php");
        $content_for_layout = ob_get_clean();
        if ($this->layout == false) {
            echo  $content_for_layout;
            return 1;
        } else {
            require(ROOT."views/layout/".$this->layout.".php");
            return 2;
        }        
    }
    
    function loadModel($name) {
        require_once(ROOT."models/".strtolower($name)."Model.php");
        $name = $name."Model";
        return $this->$name = new $name;
    }
    
    
}