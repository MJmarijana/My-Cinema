<?php

class filmModel extends Model {

    function getGenre() {
        
        $sql = "SELECT nom FROM tp_genre ORDER BY tp_genre.nom ASC";
        $query = self::$_pdo->prepare($sql);
        $query->bindParam(":nom", $nom);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    
    }
    
    function getDistrib() {
        
        $sql = "SELECT nom FROM tp_distrib ORDER BY tp_distrib.nom ASC";
        $query = self::$_pdo->prepare($sql);
        $query->bindParam(":nom", $nom);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    
    }
    
    function searchTitre($search="", $genre="", $distrib="", $seance="") {
        
        $sql = "SELECT tp_film.id_film, titre, tp_genre.nom as genre, tp_distrib.nom as distrib, tp_grille_programme.debut_sceance AS seance FROM tp_film
        LEFT JOIN tp_genre ON tp_film.id_genre=tp_genre.id_genre
        LEFT JOIN tp_distrib ON tp_film.id_distrib=tp_distrib.id_distrib
		LEFT JOIN tp_grille_programme ON tp_film.id_film=tp_grille_programme.id_film";
		
		$flag = false;
		
        if (!empty($search)) {
			$flag = true;
			$search = '"%' . $search . '%"';
  			$sql = $sql. " WHERE titre LIKE ".$search;
  		}
		if ($genre !== "Genres" && !is_null($genre)) {
			$condition = ($flag == false) ? ' WHERE' : ' AND';
			$sql = $sql . $condition . " tp_genre.nom = '".$genre . "'";
			$flag = true;

		}
		if ($distrib != "Distributeurs" && !is_null($distrib)) {
			$condition = ($flag == false) ? ' WHERE' : ' AND';
  			$sql = $sql . $condition . " tp_distrib.nom = '" . $distrib ."'";
			$flag = true;

		}
		
		if ($seance != "" && !is_null($seance)) {
			$condition = ($flag == false) ? ' WHERE' : ' AND';
  			$sql = $sql . $condition . ' tp_grille_programme.debut_sceance LIKE "%' . $seance .'%"';
			$flag = true;

		}
		
		
		$sql .= ' ORDER BY tp_film.titre';
		
        $query = self::$_pdo->prepare($sql);
        $query->bindParam(":search", $search);
		$query->bindParam(":genre", $genre);
		$query->bindParam(":seance", $seance);
		$query->bindParam(":distrib", $distrib);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);


        
    }
}

