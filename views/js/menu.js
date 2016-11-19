
$(document).ready(function(){

	$(".menu_expanded").hide();//on cache initialement tout les sous menus.

//Affichage des sous-menus en cliquant sur les boutons correspondants
	$("#profile_button").click(function(){
		$(".menu_expanded").hide();//on commence par fermer ceux qui seraient éventuelleme,t déja ouverts
		$("#profile_menu").show();
	});
	$("#my_projects_button").click(function(){
		$(".menu_expanded").hide();
		$("#my_projects_menu").show();
	});
	$("#ressources_button").click(function(){
		$(".menu_expanded").hide();
		$("#ressources_menu").show();
	});
	$("#moderation_button").click(function(){
		$(".menu_expanded").hide();
		$("#moderation_menu").show();
	});



});

