
<div id="menu">
	<div id="menu_left">
		<!-- inserer un lien vers l'image de la BDD-->
		<img id="profile_button" class="big_menu_button" alt="avatar" src="views/images/spartacus.jpg" />
        <span id="mail_info" class="big_menu_button">
        <img alt="messagerie" src="views/images/message_menu.png"/>
        </span>       
		<span id="my_projects_button" class="big_menu_button">Projets</span> 
		<span id="agenda_button" class="big_menu_button">Agenda</span>
		<span id="resources_button" class="big_menu_button">Ressources</span>
        <span id="ressources_info" class= "big_menu_button">3</span> <!-- petit indicateur lié au ressources pour visualiser si ya du nouveau -->
		<span id="moderation_button" class="big_menu_button">Modération</span>
        <span id="moderation_info_1" class= "big_menu_button">1</span> <!-- petit indicateur lié a la modération pour visualiser si ya du nouveau -->
        <span id="moderation_info_2" class= "big_menu_button">6</span> <!-- autre petit indicateur lié à la modération pour visualiser si ya du nouveau -->
	</div>
	<div id="menu_right">
		<div id="menu_top">
			<form method="post" action="">
				<!-- à voir -->
				<input id="menu_search_tool" type="text" name="search" placeholder="Recherche" />
                <input id="submit_search" type="submit"/> 
			</form>
			<span id=profile_button> <img src="views/images/logo_hub.gif" />
			</span>
			<!-- image à retravailler car pas jolie -->
		</div>
		<div id="menu_expanded">
			<div>
					<!-- il faudra une boucle PHP pour lister les projets de l'utilisateur, ainsi que -->
					<span class=sub_menu_project><a href= "lien vers la page du projet">projet 1</a></span>
					<span class=sub_menu_project><a href= "lien vers la page du projet">projet 1</a></span>
					<span class=sub_menu_project><a href= "lien vers la page du projet">projet 1</a></span>
					<span class=sub_menu_project><a href= "lien vers la page du projet">projet 1</a></span>
			</div>
		</div>
	</div>
</div>