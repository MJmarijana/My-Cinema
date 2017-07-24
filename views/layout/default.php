<!DOCTYPE html>
    <html lang="fr">
        <head>
            <link type="text/css" rel="stylesheet" href="<?=WEBROOT?>style/style.css"/>
            <meta charset="utf-8"/>
            <title>My cinema 2</title>
        </head>
        <body>
            <header class="charte">
				<div class="nav">
					<figure>
						<a class="left" href="film"><img id="img-logo" alt="logo" src="<?=WEBROOT?>style/Capture.png" /></a>
					</figure>
					<nav class="left">
						<a id="mycinema" href="film">My Cinema</a>
						<a id="film" href="<?=WEBROOT?>film">Films</a>
						<a id="abo" href= "<?=WEBROOT?>membre">Espace Membre</a>
						<a id="reduc" href="<?=WEBROOT?>history">Historique Membre</a>
					</nav>
				</div>
			</header>
			<?php echo $content_for_layout;?>
			<footer class = "charte">
                
				<p>My Cinema by Marijana M</p> 
                
			</footer>
			<script type="text/javascript" src="/my_cinema2/script-membre.js"></script>
        </body>
    </html>    
