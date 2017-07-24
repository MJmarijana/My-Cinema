<?php

class historyController extends Controller {
    
    public $modelsHistory;
    public $search;
	
    
    function __construct() {
        
        parent::__construct();
        $this->modelsHistory = $this->loadModel('history');
        if (isset($_POST['search'])) {
			$this->search = $_POST['search'];
        }
	
    }
    
    
    function index() {
        
        $data['history'] = $this->modelsHistory->getHistory($this->search);
        $this->render('index', $data);
    }
    
}