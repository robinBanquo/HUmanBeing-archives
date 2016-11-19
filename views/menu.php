<div id="menu_left">
	<!-- inserer un lien vers l'image de la BDD-->
	<img id="profile_button" class="big_menu_button" alt="avatar" src="views/images/spartacus.jpg" />
    <span id="mail_info" class="big_menu_button">
    <img alt="messagerie" src="views/images/message_menu.png"/>
    </span>       
	<span id="my_projects_button" class="big_menu_button">Projets</span> 
	<span id="agenda_button" class="big_menu_button">Agenda</span>
	<span id="ressources_button" class="big_menu_button">Ressources</span>
    <span id="ressources_info" class= "big_menu_button">3</span> <!-- petit indicateur lié au ressources pour visualiser si ya du nouveau -->
	<span id="moderation_button" class="big_menu_button">Modération</span>
    <span id="moderation_info_1" class= "big_menu_button">1</span> <!-- petit indicateur lié a la modération pour visualiser si ya du nouveau -->
    <span id="moderation_info_2" class= "big_menu_button">6</span> <!-- autre petit indicateur lié à la modération pour visualiser si ya du nouveau -->
</div>
<div class="menu_expanded" id="profile_menu"><!-- menu ouvrant quant on clique sur l'image de profil-->
			<span class=sub_menu_item><a href= "lien vers la page modifier mon profil">Modifier mon profil</a></span>
			<span class=sub_menu_item><a href= "lien vers la page mes compétences">Mes compétences</a></span>
			<span class=sub_menu_item><a href= "lien vers la page parametres de sécurité">Parametres de sécurité</a></span>
</div>
<div class="menu_expanded" id="my_projects_menu"><!-- menu ouvrant quant on clique sur projets-->
			<!-- il faudra une boucle PHP pour lister les projets de l'utilisateur-->
			<span class=sub_menu_item><a href= "lien vers la page du projet">projet 1</a></span>
			<span class=sub_menu_item><a href= "lien vers la page du projet">projet 2</a></span>
			<span class=sub_menu_item><a href= "lien vers la page du projet">projet 3</a></span>
			<span class=sub_menu_item><a href= "lien vers la page du projet">projet 4</a></span>
			<span class=sub_menu_item><a href= "lien vers la page créer un nouveau projet">Créer un nouveau projet</a></span>
</div>
<div class="menu_expanded" id="ressources_menu"> <!-- menu ouvrant quant on clique sur le bouton ressources-->
			<span class=sub_menu_item><a href= "lien vers la page HUB de ressources">HUB de ressources</a></span>
			<span class=sub_menu_item><a href= "lien vers la page Rechercher une ressource">Rechercher une ressource</a></span>
			<span class=sub_menu_item><a href= "lien vers la page Proposer des ressources">Proposer des ressources</a></span>
			<span class=sub_menu_item><a href= "lien vers la page Configurer ma gestion de ressources">Configurer </a></span>
</div>
<div class="menu_expanded" id="moderation_menu">
			<!-- menu ouvrant quant on clique sur le bouton modération horizontale-->
			<span class=sub_menu_item><a href= "HUB de modération">HUB de modération</a></span>
			<span class=sub_menu_item><a href= "Accès aux procédures lancées">Accès aux procédures lancées</a></span>
			<span class=sub_menu_item><a href= "Procédures correspondant à mes critères">Procédures correspondant à mes critères</a></span>
			<span class=sub_menu_item><a href= "Configurer mes critères de selection">Configurer mes critères de selection</a></span>
</div>