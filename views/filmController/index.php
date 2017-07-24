<div class="search charte">
	<form method="POST" action="#">
		<input type="text" value = "<?php if(isset($_POST['search'])) echo $_POST['search']; ?>" placeholder="Rechercher un Titre" name="search">
		<SELECT name="genre" id ="genre">
            <option>Genres</option>
            <?php
			 foreach($data['tp_genre'] as $liste) {
				if (isset($_POST['genre']) && $_POST['genre'] == $liste['nom']) {
					
				 echo "<option selected>" . $liste['nom'] . "</option>";
				}
				else {
				echo "<option>" . $liste['nom'] . "</option>";
			   }
			 }
            ?>
        </SELECT>
        <SELECT name="distrib" id = "distrib">
            <option>Distributeurs</option>
            <?php
                foreach($data['tp_distrib'] as $liste) {
					if (isset($_POST['distrib']) && $_POST['distrib'] == $liste['nom']) {
					
						echo "<option selected>" . $liste['nom'] . "</option>";
					}
					else {
						echo "<option>" . $liste['nom'] . "</option>";
            
					}
				}
            ?>
        </SELECT>
		<input type="date" name="seance"/>
        <input id="btn-film" type="submit" value="ok"/>
	</form>
</div>
<div class= "charte clear">
    <table id= "tfilm">
        <thead>
            <tr>
                <th>Titres</th>
                <th>Genres</th>
                <th>Distributeurs</th>
				<th>Seances</th>
            </tr>
        </thead>
        <tbody> 
            <?php
                if (!empty($data['tp_film_search'])) {
					foreach($data['tp_film_search'] as $liste) {
                
						echo "<tr><td>".$liste['titre']."</td>"."<td>".$liste['genre']."</td>"."<td>".$liste['distrib']."</td><td>".$liste['seance']."</td></tr>";
					}
				} else {
					echo "<tr><td colspan=4>Aucun film correspondant a vos criteres.</td></tr>";

				}
            ?>
        </tbody>
    </table>
</div>