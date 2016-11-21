<!--page d'acceuil du site pour un visiteur non connecté-->
<!DOCTYPE html>
<html>
	<head>
		<meta content="text/html; charset=utf-8" http-equiv="content-type">
		<title>HUmanBeing</title>
		<link rel="stylesheet" type="text/css" href="views/css/base_page.css">
		<link rel="stylesheet" type="text/css" href="views/css/log_page.css">
	</head>
	<body>
	<div id="container">
		<?php include("views/base_page.php"); ?> 

		<div id="info_search">

			<p>vous pouvez effectuer des recherches parmis les profils utilisateurs et les projets qui ont fait le choix d'etre visibles aux utilisateurs non-inscrits</p>
		</div>

		<div id="bienvenue_text">
			<h1>Bienvenue sur HUB-HUmanBeing</h1>
			<ul>
				<li>Une plateforme de partage, d’entraide et de collaboration.</li>
				<li> Une mise en lien des personnes au travers de projets contribuant au bien-être d’une communauté humaine, et non une mise en lien des utilisateurs sur des bases de communautés idéologiques.</li>
				<li>Un logiciel pour tous : gratuité totale, ergonomie très accessible…</li>
				<li>De l’open source pour que le logiciel puisse évoluer au gré des besoins de tous.</li>
				<li>Un système permettant à tous les utilisateurs d’être acteurs de la modération.</li>
			</ul>
		</div>
			<div id="connexion">
				
			<div id="log_in">
				<input type="button" name="new_account" value="créer un compte" />
			</div>
			<div id="sign_in">
				<form>
				<input type="text" placeholder="pseudo" /> 
				<input type="password" placeholder="mot de passe"  /> 
				<input type="button" name="connect" value="connexion">
				</form>
			</div>
		</div>
	</div>
	</body>
</html>