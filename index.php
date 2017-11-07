<!doctype html>
<html lang="fr">

  <head>
	<title>Bienvenue sur Aformac !</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

	<!-- Script Personnel -->
	<link rel="stylesheet" type="text/css" href="./css/style.css">
  </head>

  <body>

	<!-- header -->
	<header>

		<nav id="nav1" class="navbar navbar-expand-lg navbar-dark bg-light bg-dark fixed-top">
		  
		  <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
			<ul class="navbar-nav">
			  <li class="nav-item active">
				<a class="nav-link text-white" href="#sec1">Accueil <span class="sr-only">(current)</span></a>
			  </li>
			  <li class="nav-item dropdown">
				<a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				  Présentation
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				  <a class="dropdown-item" href="#sec-1">Formation</a>
				  <a class="dropdown-item" href="#sec-2">Métiers</a>
				  <a class="dropdown-item" href="#sec-2">Équipe</a>
				</div>
			  </li>
			  <li class="nav-item">
				<a class="nav-link text-white" href="#sec-5">Galerie</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link text-white" href="#sec-6">Adresse</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link text-white" href="#sec-7">Contact</a>
			  </li>
			</ul>
		  </div>
		  </nav>
		  <?php 
				require_once './inc/nav.inc.php'; 
			?>
	</header>

	<!-- Container principal -->
	<div id="onePage" class="container-fluid justify-content-center">

		<!-- Section 1 - Accueil -->
		<section class="" id='sec-0'>
			<h1>Accueil</h1>
			<?php 
				require_once './inc/accueil.inc.php'; 
			?>
		</section>
		
		<!-- Section 2 - Présentation Formation -->
		<section class="" id='sec-1'>
			<h1>Présentation de la Formation</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit alias, eum numquam ipsam dolores itaque porro voluptatibus repudiandae laudantium quam quasi sapiente neque dolorem veritatis recusandae labore et maiores sint!</p>
		</section>

		<!-- Section 3 - Présentation Métiers -->
		<section class="" id='sec-2'>
			<h1>Métiers</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit alias, eum numquam ipsam dolores itaque porro voluptatibus repudiandae laudantium quam quasi sapiente neque dolorem veritatis recusandae labore et maiores sint!</p>

			<h1>Technos</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit alias, eum numquam ipsam dolores itaque porro voluptatibus repudiandae laudantium quam quasi sapiente neque dolorem veritatis recusandae labore et maiores sint!</p>
		</section>

		<!-- Section 4 - Présentation Equipe -->
		<section class="" id='sec-4'>
			<h1>Présentation de l'Équipe</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit alias, eum numquam ipsam dolores itaque porro voluptatibus repudiandae laudantium quam quasi sapiente neque dolorem veritatis recusandae labore et maiores sint!</p>            
		</section>

		<!-- Section 5 - Galerie -->
		<section id='sec-5'>
			<h1>Galerie</h1>
			<?php 
				require_once './inc/slide.inc.php'; 
			?>
		</section>

		<!-- Section 6 - Adresse -->
		<section class="" id='sec-6'>
			<h1>Adresse</h1>
			<?php 
				require_once './inc/maps.inc.php'; 
			?>
		</section>

		<!-- Section 7 - Contact -->
		<section class="" id='sec-7'>
			<h1>Contact</h1>

				<form class="p-4 bg-dark rounded">

				  <div class="form-group text-center">
					<label for="labelNotice" class="text-white text-center">* Champs Obligatoires</label>
				  </div>

				  <div class="form-group row">
					<label for="labelNom" class="col-sm-2 col-form-label text-white text-right">Nom* :</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control rounded" id="inputNom">
					</div>
				  </div>

				  <div class="form-group row">
					<label for="labelPrenom" class="col-sm-2 col-form-label text-white text-right">Prénom* :</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control rounded" id="inputPrenom">
					</div>
				  </div>

				  <div class="form-group row">
					<label for="labelMail" class="col-sm-2 col-form-label text-white text-right">Mail* :</label>
					<div class="col-sm-10">
					  <input type="email" class="form-control rounded" id="inputMail">
					</div>
				  </div>

				  <div class="form-group row">
					<label for="labelPhone" class="col-sm-2 col-form-label text-white text-right">Téléphone :</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control rounded" id="inputPhone">
					</div>
				  </div>

				  <div class="form-group row">
					<label for="labelSujet" class="col-sm-2 col-form-label text-white text-right">Sujet* :</label>
					<div class="col-sm-10">
					  <input type="text" class="form-control rounded" id="inputSujet">
					</div>
				  </div>

				  <div class="form-group text-center">
					<label for="labelMessage" class="text-white text-center">Message* :</label>
					<textarea class="form-control rounded" id="inputMessage" rows="3"></textarea>
				  </div>

				  <div class="form-group text-center">
				  	<button type="submit" class="btn btn-success text-white">Envoyer</button>
				  </div>
				
					

				</form>
		</section>

	</div>


	<!-- footer -->
	<footer class="bg-dark text-white">
		<div class="justify-content-center">
			<p>Ceci est le footer</p>
		</div>
	</footer>


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

	<!-- script Personnel -->
	<script type="text/javascript" src="./js/script.js"></script>

  </body>
</html>