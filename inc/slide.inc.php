<style>
	#sec-0{
		background-color: #464646;
		color: white;
	}
	#sec-6{
		background-color: #464646;
		color: white;
	}
	#carouselExampleIndicators{
		display: block;
		margin-left: 30%;
		margin-top: 10%;
}
	#potofolio{
		display: none;
	}
	.disparait{
		display: none;
	}
	@media screen and (max-width: 640px){
	#carouselExampleIndicators{
		display: none;
	}
	#potofolio{
		display: block;
	}
	#sec-0{
		background-color: #ffffff;
		color: black;
	}
	#sec-6{
		background-color: #ffffff;
		color: white;
	}
	#sec-5{
		background-color: #464646;
		color: white;
	}
	}
</style>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <div id="slidert" class="carousel-inner w-50">
		    <?php
				$openSlide = fopen('slide.txt',"r");
				$openSlide2 = fopen('slide2.txt',"r");
				$openSlide3 = fopen('slide3.txt',"r");
				$passage = 0;
				while (!feof($openSlide)){
				$slideImage = fgets($openSlide);
				$slideTitre = fgets($openSlide2);
				$slideTexte = fgets($openSlide3);
				$slideSimage = explode("|", $slideImage);
				$slideStitre = explode("|",$slideTitre);
				$slideStexte = explode("|",$slideTexte);
				$passage ++;
						if ($passage == 1) {
							echo "<div class='carousel-item active'>";
						}else{
							echo "<div class='carousel-item'>";
						}			
						foreach ($slideSimage as $element) {
							echo "<img class='d-block w-100 border border-secondary' src=".$element."  height='300px' alt='Slide5'>";
						}
						echo "<figcaption class='text-center'>";
						echo "<h2>";
						foreach ($slideStitre as $element2) {
							echo $element2;
						}
						echo "</h2>";
						echo "<p>";
						foreach ($slideStexte as $element3) {
							echo $element3;
						}
						echo "</p>";
						echo "</figcaption>";
					echo "</div>";
					}
				fclose($openSlide3);
				fclose($openSlide2);
				fclose($openSlide);
		 	?>	
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
		<div class="container" id="potofolio">
			<div class="d-flex flex-nowrap justify-content-around mt-5">
				<div>
					<img id="slidemini1" src="./images/slide1mini.png">
					<figcaption id="figimg1" class="disparait text-center">
						<h2>Exercice 1 de CSS</h2>
						<p>Excercie qu'on a du réalisé pendant<br/> un week-end.</p>
					</figcaption>
				</div>
				<div>
					<img id="slidemini2" src="./images/slide2mini.png">
					<figcaption id="figimg2" class="disparait text-center">
						<h2>Exercice 2 de CSS</h2>
						<p>Exercice de CSS pour s'entrainer pour diviser une page en trois et mettre des images les une sur les autres.</p>
					</figcaption>
				</div>
			</div>
			<div class="d-flex flex-nowrap justify-content-around mt-5">
				<div>
					<img id="slidemini3" src="./images/slide3mini.png">
					<figcaption id="figimg3" class="disparait text-center">
						<h2>Exercice Bootstrap</h2>
						<p>Exercice de Bootstrap réalisé sans aucune ligne de CSS rajouter.</p>
					</figcaption>
				</div>
				<div>
					<img id="slidemini4" src="./images/slide4mini.png">
					<figcaption id="figimg4" class="disparait text-center">
						<h2>Exercice JavaScript</h2>
						<p>Premier exercice de JavaScript qui consistait à faire un questionnaire avec calcul des points et affichage des réponse juste ou fausse.</p>
					</figcaption>
				</div>
			</div>
			<div class="d-flex flex-nowrap justify-content-around mt-5">
				<div>
					<img id="slidemini5" src="./images/slide5mini.png">
					<figcaption id="figimg5" class="disparait text-center">
						<h2>Exercice du MasterMind.</h2>
						<p>Nous devions réalisé pour cette excercice le jeu du MasterMind en Javascript.</p>
					</figcaption>
				</div>
		</div>