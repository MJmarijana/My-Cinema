<?php

class filmController extends Controller {
    
    public $modelsFilm;
	public $search;
	public $genre;
	public $distrib;
    public $seance;
	
    function __construct() {
        
    parent::__construct();
        
		$this->modelsFilm = $this->loadModel('film') ;
		if (isset($_POST['search'])) {
			$this->search = $_POST['search'];
		}
		if (isset($_POST['genre'])) {
			$this->genre = $_POST['genre'];
				
		}
		if (isset($_POST['distrib'])) {
			$this->distrib = $_POST['distrib'];
				
		}
			
		if (isset($_POST['seance'])) {
			$this->seance = $_POST['seance'];
		}
    }
    
    
    function index() {

        $data['tp_genre'] = $this->modelsFilm->getGenre();
        $data['tp_distrib'] = $this->modelsFilm->getDistrib();
		
        $data['tp_film_search'] = $this->modelsFilm->searchTitre($this->search, $this->genre, $this->distrib, $this->seance);
        $this->render('index', $data);
    }
    
}