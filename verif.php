<!DOCTYPE html>
<html>
	<head>
		<link href="css/style.css" rel="stylesheet">
		<link href="css/aos.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One" rel="stylesheet">
		<meta charset="utf-8">	
		<meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
		<meta name="viewport" content="width=device-width"/>
		<title>SudOuest.fr - Calculez le prix de votre trajet sur autoroute en 2019</title>
	</head>
	<header>
			<h1 id="titre">Le prix de votre trajet</h1>
	</header>
	<body>
		<section>
		<div id="chapeau" class="chapeau">Tarif indicatif en vigueur depuis le 1<sup>er</sup> février 2019.</div>
		<div id="resultat">
		<?php

			include (dirname(__FILE__).'/includes/ddc.php');
			include (dirname(__FILE__).'/includes/pointvirgule.php');
			include (dirname(__FILE__).'/includes/datas.php');
			include (dirname(__FILE__).'/includes/fonctionpourcentage.php');
			include (dirname(__FILE__).'/includes/distancedif.php');
			include (dirname(__FILE__).'/includes/trajet.php');
			
			$gareD=$_GET["depart"];
			$gareA=$_GET["arrivee"];

			if ($gareD == $gareA) {
				echo '<div>Vous devez choisir deux échangeurs distincts !
					</div>';
			}
			else{
				$i=0;
				for ($i=0; $i < count($temps) ; $i++) {
							if ($gareD == $temps[$i][2] && $gareA == $temps[$i][6]){								
								echo '
								 <h2>En roulant '.distancedif($temps[$i][3],$temps[$i][7]).' km sur l\''.$temps[$i][0].'...</h2>
								 <h3 class="interlignebas">Entrée : '.$temps[$i][1].'<br/>'.$temps[$i][2].'</h3>
								 <div>
										<svg id="parcours" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 -5 400 60" style="enable-background:new 0 0 400 60;" xml:space="preserve">
									<g>
										<g>
											<line class="fondparcours" x1="14.2" y1="26" x2="386.2" y2="26"/>
											<polygon class="fondparcoursdir" points="16.2,11 16.2,41 1.2,26"/>
											<polygon class="fondparcoursdir" points="384.2,11 384.2,41 399.2,26"/>
										</g>
									</g>

									<line class="path" x1="'.trajetd($temps[$i][3],$temps[$i][16]).'" y1="26" x2="'.trajetd($temps[$i][7],$temps[$i][16]).'" y2="26"/>
									<text transform="matrix(1 0 0 1 21 12)" class="villesparcours">'.$temps[$i][14].'</text>
									<text transform="matrix(1 0 0 1 '.$temps[$i][27].' 55)" class="villesparcours">'.$temps[$i][15].'</text>
									</svg>
								</div>
								 <h3 class="interlignehaut">Sortie : '.$temps[$i][5].'<br/>'.$temps[$i][6].'</h3>
								 
								 
								 <h2 id="categorie">... les frais de péage seront de :</h2>
								 <div id="resultatauto">
									 <div data-aos="zoom-in" class="rond">
										 <div class="prix">'.pointvirgule($temps[$i][9]).' €</div>
										 <div class="pourcentage">+'.pourcentage($temps[$i][9],$temps[$i][8]).' %</div>
										 <legend class="legendrond">(par rapport au tarif 2018)</legend>
									</div>
								</div>
								
								<div id="resultatmoto" style="display:none;">
									 <div data-aos="zoom-in" class="rond">
										 <div class="prix">'.pointvirgule($temps[$i][12]).' €</div>
										 <div class="pourcentage">+'.pourcentage($temps[$i][12],$temps[$i][11]).' %</div>
										 <legend class="legendrond">(par rapport au tarif 2018)</legend>
									</div>
								</div>
								<div>
										<legend><label for="selectresult">Changer de moyen de transport</label></legend>
										<select id="selectresult" onchange="myFunction()">
											<option value="auto">Auto (classe 1)</option>
											<option value="moto">Moto (classe 5)</option>
										</select>
									</div>';

								 echo '<h2>Les tarifs à connaître sur cette autoroute</h2>';
								 // <legend>Moyenne constatée pour les véhicules de catégorie 1</legend>
								 echo '<div id="moyenneauto" data-aos="zoom-in">
								 ';
								include (dirname(__FILE__).'/includes/moyennes.php');
								
								foreach ($moyenneprixauto as $key => $value) {
										
											echo '<div style="text-align: left;" class="intitule">'.$key.' '.pointvirgule($value*10).'€/10km
													</div>
													 <div class="graph1" style="width: '.(($value)*280).'%;">
													 </div>';
											}
								echo '</div>';

		// AFFICHER POUR OPTION MOTO
								echo '<div id="moyennemoto" data-aos="zoom-in" style="display:none;">
								 ';
								include (dirname(__FILE__).'/includes/moyennes.php');
								
								foreach ($moyenneprixmoto as $key => $value) {
										
											echo '<div style="text-align: left;" class="intitule">'.$key.' '.pointvirgule($value*10).'€/10km
													</div>
													 <div class="graph1" style="width: '.(($value)*280).'%;">
													 </div>';
											}
								echo '</div>';
							echo '
							<br/>
							<button class="accordion">Le détail des coûts par tronçon</button>
						      <div class="panel">
						      <div class="flex-container">
						            <div>
						               <img class="visu" src="css/images/graduation'.$temps[$i][0].'.svg">
						            </div>';
						            include (dirname(__FILE__).'/includes/accordion1'.$temps[$i][0].'.html');
						            echo'
								</div>
								<br>
						      </div>
						    <button class="accordion">L\'évolution des prix sur ce réseau depuis 2011</button>
						     <div class="panel">
						     <div class="flex-container">';
						            include (dirname(__FILE__).'/includes/accordion2'.$temps[$i][0].'.html');
						            echo '
						            <div>
						               <img class="visu" src="css/images/evo'.$temps[$i][0].'.svg">
						            </div>
								</div>
						      </div>';
	
					}
				}
			}
		?>
		</div>	
		
		<form action="index.php">
			<input type="submit" id="valide" value="Retour">
		</form>
	
		</section>

		<script src="js/alert.js"></script>
		<footer>
		</footer>
	
	</body>






		
<script src="js/selectcat.js"></script>
<script src="js/accordeon.js"></script>
<script src="js/aos.js"></script>
<script>
    AOS.init({
    easing: 'ease-in-out-sine'
    });
</script>


</html>


