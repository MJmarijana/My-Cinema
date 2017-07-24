<div class="search-history charte">
	<form method="POST">
		<input type="text" value = "<?php if(isset($_POST['search'])) echo $_POST['search']; ?>" placeholder="Rechercher un historique" name="search">
        <input id="btn-history" type="submit" value="ok"/>
	</form>
</div>
<div class= "charte clear">
    <table id= "thistory">
        <thead>
            <tr>
                <th>Prenom</th>
                <th>Nom</th>
                <th>Les films vus</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody> 
            <?php
                foreach($data['history'] as $liste) {
                
                echo "<tr><td>".ucfirst($liste['prenom'])."</td>"."<td>".strtoupper($liste['nom'])."</td>".
                "<td>".$liste['titre']."</td>"."<td>".$liste['date']."</td>".
                '<td><img id = "img-modify" alt = "modify" name = "modify" src= "../../../my_cinema2/style/addh2.png" />
                <img id = "img-add" alt = "add" name = "add" src = "../../../my_cinema2/style/comh.png" /></td></td></tr>';
                }
            ?>
        </tbody>
    </table>
</div>