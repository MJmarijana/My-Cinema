<?php

class membreController extends Controller {
    
    public $modelsMembre;
    public $search;
	
    
    function __construct() {
        
        parent::__construct();
        $this->modelsMembre = $this->loadModel('membre');
        if (isset($_POST['search'])) {
			$this->search = $_POST['search'];
		}
	
    }
    
    
    function index($id = null) {
		
        $data['membre'] = $this->modelsMembre->getMembre($this->search);
		$data['membre_abo'] = $this->modelsMembre->getAbo();
        $this->render('index', $data);
    }
	
	function profil($id=null, $id_abo=null){
		
		$data['membre'] = $this->modelsMembre->getProfil($id);
		$data['membre_abo'] = $this->modelsMembre->getAbo();
		if ($id_abo != null) {
			$data['membre_abo'] = $this->modelsMembre->setAbo($id, $id_abo);
		}
		
		$this->render('profil',$data);
		
	}

}