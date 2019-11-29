$<!DOCTYPE html>
<html>
<head>
	<title>Timeline</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="nav.css">
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Red+Hat+Text&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
<?php
        require_once 'connect.php'; 

?>

	<div class="Partie1">
		<nav>
			<ul class="date-nav">
				<li class="all">All</li>
				<li class="1969">1969</li>
				<li class="1975">1975</li>
				<li class="1980">1980</li>
				<li class="1985">1985</li>
				<li class="1990">1990</li>
				<li class="1995">1995</li>
				<li class="2000">2000</li>
				<li class="2005">2005</li>
				<li class="2010">2010</li>
				<li class="2015">2015</li>
				<li class="2020">2020</li>
			</ul>
		</nav>
	</div>
	<div class="Partie2">
		<header>
			<h1><strong>Timeline</strong> web developpement</h1>
			<br>
			<ul class="filtre">
<?php

  $statement = $db->prepare('SELECT Categories_name FROM TM_categories');
                $statement->execute();

                 while($rez = $statement->fetch()){

                    ?>
                
                    	<li class="Web">
                        <?php 
                        echo $rez['Categories_name']; 
                        ?>
                        </li>
                   <?php
               }

                   ?>





				
				
			</ul>
		</header>
		<section>
			<aside>
				<ul class="dates-infos">


					
					<li class="1969 Web Jeux">
						<div>
							<h3>Aout 1969</h3>
							<ul>
								<li class="Web"></li>
								<li class="Jeux"></li>
							</ul>
						</div>
						<div>
							<p>Publication de "Resilient Web Design" par Jeremy Keith</p>
							<div class="flèche">
								<div class="trait-horizontale"></div>
								<div class="trait-top"></div>
								<div class="trait-bottom"></div>
							</div>
						</div>
					</li>
					<li class="1970 Informatique OS">
						<div>
							<h3>1971</h3>
							<ul>
								<li class="Informatique"></li>
								<li class="OS"></li>
							</ul>
						</div>
							<div>
							<p>Apparition de Touch Event</p>
							<div class="flèche">
								<div class="trait-horizontale"></div>
								<div class="trait-top"></div>
								<div class="trait-bottom"></div>
							</div>
						</div>
					</li>
					<li class="1970 Marques Web">
						<div>
							<h3>1974</h3>
							<ul>
								<li class="Marques"></li>
								<li class="Web"></li>
							</ul>
						</div>
							<div>
							<p>Apparition de Touch Event</p>
							<div class="flèche">
								<div class="trait-horizontale"></div>
								<div class="trait-top"></div>
								<div class="trait-bottom"></div>
							</div>
						</div>
					</li>
					<li class="1980 Jeux Informatique">
						<div>
							<h3>1980</h3>
							<ul>
								<li class="Jeux"></li>
								<li class="Informatique"></li>
							</ul>
						</div>
							<div>
							<p>Apparition de Touch Event</p>
							<div class="flèche">
								<div class="trait-horizontale"></div>
								<div class="trait-top"></div>
								<div class="trait-bottom"></div>
							</div>
						</div>
					</li>
					<li class="1980 OS Marques">
						<div>
							<h3>1983</h3>
							<ul>
								<li class="OS"></li>
								<li class="Marques"></li>
							</ul>
						</div>
							<div>
							<p>Apparition de Touch Event</p>
							<div class="flèche">
								<div class="trait-horizontale"></div>
								<div class="trait-top"></div>
								<div class="trait-bottom"></div>
							</div>
						</div>
					</li>
					<li class="1985 Web Informatique">
						<div>
							<h3>1989</h3>
							<ul>
								<li class="Web"></li>
								<li class="Informatique"></li>
							</ul>
						</div>
							<div>
							<p>Apparition de Touch Event</p>
							<div class="flèche">
								<div class="trait-horizontale"></div>
								<div class="trait-top"></div>
								<div class="trait-bottom"></div>
							</div>
						</div>
					</li>
					<li class="1990 Jeux OS">
						<div>
							<h3>1992</h3>
							<ul>
								<li class="Jeux"></li>
								<li class="OS"></li>
							</ul>
						</div>
							<div>
							<p>Apparition de Touch Event</p>
							<div class="flèche">
								<div class="trait-horizontale"></div>
								<div class="trait-top"></div>
								<div class="trait-bottom"></div>
							</div>
						</div>
					</li>
					<li class="1995 Marques Jeux">
						<div>
							<h3>1999</h3>
							<ul>
								<li class="Marques"></li>
								<li class="Jeux"></li>
							</ul>
						</div>
							<div>
							<p>Apparition de Touch Event</p>
							<div class="flèche">
								<div class="trait-horizontale"></div>
								<div class="trait-top"></div>
								<div class="trait-bottom"></div>
							</div>
						</div>
					</li>
					<li class="2010 Informatique Marques">
						<div>
							<h3>2013</h3>
							<ul>
								<li class="Informatique"></li>
								<li class="Marques"></li>
							</ul>
						</div>
							<div>
							<p>Apparition de Touch Event</p>
							<div class="flèche">
								<div class="trait-horizontale"></div>
								<div class="trait-top"></div>
								<div class="trait-bottom"></div>
							</div>
						</div>
					</li>
					<li class="2015 Jeux OS">
						<div>
							<h3>2016</h3>
							<ul>
								<li class="Jeux"></li>
								<li class="OS"></li>
							</ul>
						</div>
							<div>
							<p>Apparition de Touch Event</p>
							<div class="flèche">
								<div class="trait-horizontale"></div>
								<div class="trait-top"></div>
								<div class="trait-bottom"></div>
							</div>
						</div>
					</li>
				</ul>
			</aside>
			<article>
				<div>
					<h2>Création de Linux</h2>
					<ul>
						<li>OS</li>
						<li>Informatique</li>
					</ul>
					<h3>aout 1969</h3>
				</div>
				<div class="page-scroll">
					<div id="banniere">
						<figure>
							<img src="linux.png">
							<figcaption>Le logo de Linux</figcaption>
						</figure>
					</div>
					<p>
						En 1969, Ken Thompson qui travaillait alors pour les laboratoires Bell développa la première version d'un système d'exploitation mono-utilisateur sous le nom de New Ken's System. Il réalisa ce travail sur un mini-ordinateur PDP-7 (Programmed Data Processor) de marque DEC animé par General Comprehensive Operating System7 et rédigea le nouveau logiciel en langage d'assemblage. Le nom Unics fut suggéré par Brian Kernighan à la suite d'un jeu de mots « latin » avec Multics; « Multi- car Multics faisait la même chose de plusieurs façons alors qu'Unics faisait chaque chose d'une seule façon ». Ce nom fut par la suite contracté en Unix (pour être déposé finalement sous le nom UNIX par AT&T), à l'initiative de Brian Kernighan.

			Un jugement d'expédient datant de 19568 interdisait à l'entreprise AT&T, dont dépendait Bell Labs, de commercialiser autre chose que des équipements téléphoniques ou télégraphiques. C'est la raison pour laquelle la décision fut prise en 19759 de distribuer le système Unix complet
			En 1969, Ken Thompson qui travaillait alors pour les laboratoires Bell développa la première version d'un système d'exploitation mono-utilisateur sous le nom de New Ken's System. Il réalisa ce travail sur un mini-ordinateur PDP-7 (Programmed Data Processor) de marque DEC animé par General Comprehensive Operating System7 et rédigea le nouveau logiciel en langage d'assemblage. Le nom Unics fut suggéré par Brian Kernighan à la suite d'un jeu de mots « latin » avec Multics; « Multi- car Multics faisait la même chose de plusieurs façons alors qu'Unics faisait chaque chose d'une seule façon ». Ce nom fut par la suite contracté en Unix (pour être déposé finalement sous le nom UNIX par AT&T), à l'initiative de Brian Kernighan.

			Un jugement d'expédient datant de 19568 interdisait à l'entreprise AT&T, dont dépendait Bell Labs, de commercialiser autre chose que des équipements téléphoniques ou télégraphiques. C'est la raison pour laquelle la décision fut prise en 19759 de distribuer le système Unix complet
			En 1969, Ken Thompson qui travaillait alors pour les laboratoires Bell développa la première version d'un système d'exploitation mono-utilisateur sous le nom de New Ken's System. Il réalisa ce travail sur un mini-ordinateur PDP-7 (Programmed Data Processor) de marque DEC animé par General Comprehensive Operating System7 et rédigea le nouveau logiciel en langage d'assemblage. Le nom Unics fut suggéré par Brian Kernighan à la suite d'un jeu de mots « latin » avec Multics; « Multi- car Multics faisait la même chose de plusieurs façons alors qu'Unics faisait chaque chose d'une seule façon ». Ce nom fut par la suite contracté en Unix (pour être déposé finalement sous le nom UNIX par AT&T), à l'initiative de Brian Kernighan.

			Un jugement d'expédient datant de 19568 interdisait à l'entreprise AT&T, dont dépendait Bell Labs, de commercialiser autre chose que des équipements téléphoniques ou télégraphiques. C'est la raison pour laquelle la décision fut prise en 19759 de distribuer le système Unix complet
			En 1969, Ken Thompson qui travaillait alors pour les laboratoires Bell développa la première version d'un système d'exploitation mono-utilisateur sous le nom de New Ken's System. Il réalisa ce travail sur un mini-ordinateur PDP-7 (Programmed Data Processor) de marque DEC animé par General Comprehensive Operating System7 et rédigea le nouveau logiciel en langage d'assemblage. Le nom Unics fut suggéré par Brian Kernighan à la suite d'un jeu de mots « latin » avec Multics; « Multi- car Multics faisait la même chose de plusieurs façons alors qu'Unics faisait chaque chose d'une seule façon ». Ce nom fut par la suite contracté en Unix (pour être

					</p>
				</div>
			</article>
		</section>
	</div>
	<script
  src="http://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
	<script type="text/javascript">

		$('.date-nav li').on('click', function(e) {	  
			$('.date-nav li').removeClass('select-li');
			$(this).addClass('select-li');
		})

		$('.filtre li').on('click', function(e) {
			$(this).toggleClass('select2-li');
		})

		$('.dates-infos li').on('click', function(e) {	  
			$('.dates-infos li').removeClass('select3-li');
			$(this).addClass('select3-li');
		})

	</script>
</body>
</html>