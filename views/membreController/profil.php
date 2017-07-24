<div class= "charte clear">
    <table id= "tmembre">
        <thead>
            <tr>
                <th>Identifiant</th>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Id Abo</th>
                <th>Nom Abo</th>
            </tr>
        </thead>
        <tbody> 
            <?php
    
                foreach($data['membre'] as $liste) {
                
                echo "<tr><td>".$liste['id_perso']."</td>"."<td>".ucfirst($liste['prenom'])."</td>".
                "<td>".strtoupper($liste['nom'])."</td>"."<td>".$liste['id_abo']."</td>".
                "<td>".$liste['nom_abo']."</td>".
                "<td><img id = 'img-modify' alt = 'modify' name = 'modify' src = ".WEBROOT."style/modify.png /></td></td></tr>";
                }
            ?>
        </tbody>
    </table>
</div>
<div class = "hidden" id="thiden">
	<table id= "tmembreabo">
        <thead>
            <tr>
                <th>Id Abo</th>
                <th>Nom Abo</th>
                <th>Resume</th>
                <th>Prix </th>
                <th>Duree</th>
            </tr>
        </thead>
        <tbody> 
            <?php
                foreach($data['membre_abo'] as $liste) {
                
                echo "<tr><td>".$liste['id_abo']."</td>"."<td>".$liste['nom']."</td>".
                "<td>".$liste['resum']."</td>"."<td>".$liste['prix']."</td>".
                "<td>".$liste['duree_abo']."</td>".
                "<td><a href=".$membre["0"]['id_perso']."/".$liste['id_abo']."><img id = img-add alt = add src = ../../../my_cinema2/style/add2.png /></a>
                <a href=".$membre["0"]['id_perso']."/5><img id = img-delete alt = delete src =../../../my_cinema2/style/delete.png /></a></td>"."</td></tr>";
                }
            ?>
        </tbody>
    </table>	
</div>
