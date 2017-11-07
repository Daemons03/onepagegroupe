// Fonction au chargement de la page
$(document).ready(function(){

	//Calcul la taille des section selon la taill de la fenêtre
	//$('section').css('height',$(window).height().toString()+"px");
	$('section').css('height',$(window).height().toString()+"px");
	$('section').css('paddingTop',$('nav').height().toString()+"px");
	

	//Recalcul en fonction de la taille de la fenêtre
	$(window).resize(function(){
		$('section').css('height',$(window).height().toString()+"px");
		$('section').css('paddingTop',$('nav').height().toString()+"px");
	});

	//Sur click dans les sections
	// $('section').click(function(){

	// 	var listeSections = $('section');
	// 	var indexSection = $(this).index();
	// 	var indexLast =  $('section').last().index();

	// 	var targetSection = (indexSection == indexLast) ? listeSections[0].id : listeSections[indexSection+1].id;

	// 	$('html').animate({
	// 		scrollTop:$('#'+targetSection).offset().top
	// 	},1000);

	// });
	$('#slidemini1').click(function(){
		if ($(this).attr("src") == "./images/slide1mini.png") {
			$(this).attr("src" , "./images/slide1agrandi.png");
			$("#figimg1").toggleClass("disparait");
			$("#slidemini2").css("display" , "none");
			$("#slidemini3").css("display" , "none");
			$("#slidemini4").css("display" , "none");
			$("#slidemini5").css("display" , "none");
		}else {
			$(this).attr("src" , "./images/slide1mini.png");
			$("#figimg1").toggleClass("disparait");
			$("#slidemini2").css("display" , "flex");
			$("#slidemini3").css("display" , "flex");
			$("#slidemini4").css("display" , "flex");
			$("#slidemini5").css("display" , "flex");
		}
	});
	$('#slidemini2').click(function(){
		if ($(this).attr("src") == "./images/slide2mini.png") {
			$(this).attr("src" , "./images/slide2agrandi.png");
			$("#figimg2").toggleClass("disparait");
			$("#slidemini1").css("display" , "none");
			$("#slidemini3").css("display" , "none");
			$("#slidemini4").css("display" , "none");
			$("#slidemini5").css("display" , "none");
		}else {
			$(this).attr("src" , "./images/slide2mini.png");
			$("#figimg2").toggleClass("disparait");
			$("#slidemini2").css("display" , "flex");
			$("#slidemini1").css("display" , "flex");
			$("#slidemini3").css("display" , "flex");
			$("#slidemini4").css("display" , "flex");
			$("#slidemini5").css("display" , "flex");
		}
	});
	$('#slidemini3').click(function(){
		if ($(this).attr("src") == "./images/slide3mini.png") {
			$(this).attr("src" , "./images/slide3agrandi.png");
			$("#figimg3").toggleClass("disparait");
			$("#slidemini2").css("display" , "none");
			$("#slidemini1").css("display" , "none");
			$("#slidemini4").css("display" , "none");
			$("#slidemini5").css("display" , "none");
		}else {
			$(this).attr("src" , "./images/slide3mini.png");
			$("#figimg3").toggleClass("disparait");
			$("#slidemini2").css("display" , "flex");
			$("#slidemini1").css("display" , "flex");
			$("#slidemini4").css("display" , "flex");
			$("#slidemini5").css("display" , "flex");
		}
	});
	$('#slidemini4').click(function(){
		if ($(this).attr("src") == "./images/slide4mini.png") {
			$(this).attr("src" , "./images/slide4agrandi.png");
			$("#figimg4").toggleClass("disparait");
			$("#slidemini2").css("display" , "none");
			$("#slidemini3").css("display" , "none");
			$("#slidemini1").css("display" , "none");
			$("#slidemini5").css("display" , "none");
		}else {
			$(this).attr("src" , "./images/slide4mini.png");
			$("#figimg4").toggleClass("disparait");
			$("#slidemini2").css("display" , "flex");
			$("#slidemini3").css("display" , "flex");
			$("#slidemini1").css("display" , "flex");
			$("#slidemini5").css("display" , "flex");
		}
	});
	$('#slidemini5').click(function(){
		if ($(this).attr("src") == "./images/slide5mini.png") {
			$(this).attr("src" , "./images/slide5agrandi.png");
			$("#figimg5").toggleClass("disparait");
			$("#slidemini2").css("display" , "none");
			$("#slidemini3").css("display" , "none");
			$("#slidemini4").css("display" , "none");
			$("#slidemini1").css("display" , "none");
		}else {
			$(this).attr("src" , "./images/slide5mini.png");
			$("#figimg5").toggleClass("disparait");
			$("#slidemini2").css("display" , "flex");
			$("#slidemini3").css("display" , "flex");
			$("#slidemini4").css("display" , "flex");
			$("#slidemini1").css("display" , "flex");
		}
	});
	//Sur sélection dans le menu
	// $('.nav-item').click(function(){
	// 	var listeMenu = $('nav-item');
	// 	var indexMenu = $(this).index();
	// 	//var targetSection = listeMenu[indexMenu].id;

	// 	console.log(listeMenu + "-" + indexMenu + "-" + indexMenu.id);

	// 	// $('html').animate({
	// 	// 	scrollTop:$('#'+targetSection).offset().top
	// 	// },1000);
	// });

});
