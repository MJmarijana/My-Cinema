<?php

class userController extends Controller {
    
    public $modelsUser;
    
    function __construct() {
        
        parent::__construct();
        $this->modelsUser = $this->loadModel('User') ;
    }
    
    
    function index() {
    
        $data['User'] = $this->modelsUser->getUser(1);
        $this->render('index', $data);
        
    }
    
}