<?php

class membreModel extends Model {
    
    
    function getMembre($search="") {
        
        $sql = "SELECT id_perso, tp_fiche_personne.nom as nom, prenom, tp_abonnement.id_abo as id_abo, tp_abonnement.nom as nom_abo
                FROM tp_fiche_personne
                JOIN tp_membre ON tp_fiche_personne.id_perso=tp_membre.id_fiche_perso
                JOIN tp_abonnement ON tp_membre.id_abo=tp_abonnement.id_abo";
         if ($search != "") {
  			$sql = $sql. " WHERE tp_fiche_personne.nom LIKE ? OR prenom LIKE ? ORDER BY tp_fiche_personne.prenom ASC";
  			$search = "%" . $search . "%";
  		}
        $query = self::$_pdo->prepare($sql);
        $query->bindParam(1, $search);
        $query->bindParam(2, $search);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
	}
	
	function getAbo() {
		
		$sql = "SELECT id_abo, nom, resum, prix, duree_abo FROM tp_abonnement";
        $query = self::$_pdo->prepare($sql);
        $query->bindParam(":id_abo", $id_abo);
        $query->bindParam(":nom", $nom);
		$query->bindParam(":resum", $resum);
        $query->bindParam(":prix", $prix);
		$query->bindParam(":duree_abo", $duree_abo);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
		
	}
	
	function getProfil($id) {
		
        $sql = "SELECT id_perso, tp_fiche_personne.nom as nom, prenom, tp_abonnement.id_abo as id_abo, tp_abonnement.nom as nom_abo
                FROM tp_fiche_personne
                JOIN tp_membre ON tp_fiche_personne.id_perso=tp_membre.id_fiche_perso
                JOIN tp_abonnement ON tp_membre.id_abo=tp_abonnement.id_abo WHERE id_perso=:id";
		
        $query = self::$_pdo->prepare($sql);
        $query->bindParam(":id", $id);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
		
    }
	
	function setAbo($id, $abo)  {
		
		$sql = "UPDATE tp_membre SET id_abo=:abo WHERE id_fiche_perso=:id";
		
        $query = self::$_pdo->prepare($sql);
		$query->bindParam(":abo", $abo);
        $query->bindParam(":id", $id);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
		
	}

}