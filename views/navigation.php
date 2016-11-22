<!DOCTYPE html>
<html>

	<?php include("views/head.php") ; ?> <!-- chargement de tout le head de la page -->
	<body>

			<div id="global_container">
				<?php
					include("views/js/scripts_list.php");//les scripts JS de la page
				?>
				<?php
					include("views/base_page.php");//l'outil recherche et le logo
					include("views/menu.php") ; //le menu de gauche
				?>
			</div>

	</body>

</html>
