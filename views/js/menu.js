
$(document).ready(function(){

	$(".menu_expanded").hide();//on cache initialement tout les sous menus.

//#########Affichage des sous-menus en cliquant sur les boutons correspondants et animations associées##########

	var $initial_bg_color = $(".big_menu_button").css("background-color"); //on met dans une variable la couleur initiale du background color des boutons
	var $initial_color = $(".big_menu_button").css("color");// idem avec la couleur du texte, qui resservira pour réinitialiser le texte et la bordure
	var $open_bg_color= "rgb(143,80,88)";// couleur du background une fois ouvert
	var $open_color= "rgb(211,211,211)";

	$("#profile_button").click(function(){
		$(".menu_expanded").hide();//on commence par fermer ceux qui seraient éventuelleme,t déja ouverts
		$("#profile_menu").show();
		//on réinitialise le tout
		$(".big_menu_button").css("background-color", $initial_bg_color);
		$(".big_menu_button").css("color", $initial_color);
		$(".big_menu_button").css("border-color", $initial_color);
		//puis on modifie pour l'élément en question
		$(this).css("border-color", $open_color);

// il faudra trouver un truc pour que ca se voye que l'image a été cliquée
	});
	$("#my_projects_button").click(function(){
		$(".menu_expanded").hide();
		$("#my_projects_menu").show();
		//on réinitialise le tout
		$(".big_menu_button").css("background-color", $initial_bg_color);
		$(".big_menu_button").css("color", $initial_color);
		$(".big_menu_button").css("border-color", $initial_color);
		//puis on modifie pour l'élément en question
		$(this).css("background-color", $open_bg_color);
		$(this).css("color", $open_color);
		$(this).css("border-color", $open_color);
	});
	$("#ressources_button").click(function(){
		$(".menu_expanded").hide();
		$("#ressources_menu").show();
		//on réinitialise le tout
		$(".big_menu_button").css("background-color", $initial_bg_color);
		$(".big_menu_button").css("color", $initial_color);
		$(".big_menu_button").css("border-color", $initial_color);
		//puis on modifie pour l'élément en question
		$(this).css("background-color", $open_bg_color);
		$(this).css("color", $open_color);
		$(this).css("border-color", $open_color);
	});
	$("#moderation_button").click(function(){
		$(".menu_expanded").hide();
		$("#moderation_menu").show();
		//on réinitialise le tout
		$(".big_menu_button").css("background-color", $initial_bg_color);
		$(".big_menu_button").css("color", $initial_color);
		$(".big_menu_button").css("border-color", $initial_color);
		//puis on modifie pour l'élément en question
		$(this).css("background-color", $open_bg_color);
		$(this).css("color", $open_color);
		$(this).css("border-color", $open_color);
	});

});
