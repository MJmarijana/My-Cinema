<div class="search-membre charte">
	<form method="POST">
		<input type="text" value = "<?php if(isset($_POST['search'])) echo $_POST['search']; ?>" placeholder="Rechercher un Membre" name="search">
        <input id="btn-membre" type="submit" value="ok"/>
	</form>
</div>
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
                "<td><a href=membre/profil/".$liste['id_perso']."><img id = 'img-modify' alt = 'modify' name = 'modify' src=  '../../../my_cinema2/style/modify.png' /></a></td></td></tr>";
                }
            ?>
        </tbody>
    </table>
</div>
