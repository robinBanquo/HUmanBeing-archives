
$(document).ready(function(){

	$(".menu_expanded").hide();//on cache initialement tout les sous menus.

//#########Affichage des sous-menus en cliquant sur les boutons correspondants et animations associées##########

	var $initial_text_shadow = $(".big_menu_button").css("text-shadow"); //on met dans une variable la couleur initiale de l'ombre des boutons

	$("#profile_button").click(function(){
		$(".menu_expanded").hide();//on commence par fermer ceux qui seraient éventuelleme,t déja ouverts
		$("#profile_menu").show();
		$(".big_menu_button").css("text-shadow", $initial_text_shadow);//on réinitialise la couleur de tout les bouttons
	});
	$("#my_projects_button").click(function(){
		$(".menu_expanded").hide();
		$("#my_projects_menu").show();
		$(".big_menu_button").css("text-shadow", $initial_text_shadow);//on réinitialise la couleur de tout les bouttons
		$( this ).css("text-shadow", "0 0 30px rgba(0,0,200,1)");
	});
	$("#ressources_button").click(function(){
		$(".menu_expanded").hide();
		$("#ressources_menu").show();
		$(".big_menu_button").css("text-shadow", $initial_text_shadow);//on réinitialise la couleur de tout les bouttons
		$( this ).css("text-shadow", "0 0 30px rgba(200,0,0,0.7)");
	});
	$("#moderation_button").click(function(){
		$(".menu_expanded").hide();
		$("#moderation_menu").show();
		$(".big_menu_button").css("text-shadow", $initial_text_shadow);//on réinitialise la couleur de tout les bouttons
		$( this ).css("text-shadow", "0 0 30px rgba(0,200,0,0.7)");
	});
	$(.menu_expanded).show();
});
