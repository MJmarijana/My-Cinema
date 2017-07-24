<?php

class historyModel extends Model {
    
    
    function getHistory($search="") {

        $sql="SELECT prenom, nom, titre, date FROM tp_historique_membre
        JOIN tp_film ON tp_historique_membre.id_film=tp_film.id_film
        JOIN tp_membre ON tp_historique_membre.id_membre=tp_membre.id_membre
        JOIN tp_fiche_personne ON tp_membre.id_fiche_perso=tp_fiche_personne.id_perso";
        if ($search != "") {
                $sql = $sql. " WHERE tp_fiche_personne.nom LIKE ? OR prenom LIKE ? ORDER BY tp_historique_membre.date ASC";
                $search = "%" . $search . "%";
            }
            $query = self::$_pdo->prepare($sql);
            $query->bindParam(1, $search);
            $query->bindParam(2, $search);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
    }   

}