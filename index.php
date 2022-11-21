<!DOCTYPE html>
<html>
<head>
	<link href="css/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One" rel="stylesheet">
	
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 		<link rel="stylesheet" href="/resources/demos/style.css">
 		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<!--   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>-->
		<script src="js/1121_jquery-ui.js"></script>

	<meta charset="utf-8">	
	<meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
	<meta name="viewport" content="width=device-width" />
	<title>SudOuest.fr - Calculez le prix de votre trajet sur autoroute en 2019</title>
</head>
<body>
	<header>
		<div class="titre">
			<h1>Calculez le prix du trajet</h1>
			<div class="chapeau">Découvrez les tarifs 2019 des autoroutes</br>dans le Sud-Ouest.</br>
			</div>
		</div>
<img src="css/images/visu.svg" alt="toto">

	</header>

					<?php
					// include (dirname(__FILE__).'/includes/ddc.php');
					// include (dirname(__FILE__).'/includes/datas.php');
					?>
<div id="tableauGares"></div>
			<section id="comboa">
				<div>
					<h2><label for="autoroute">Choisissez votre autoroute</label></h2>
					<select id="autoroute" onchange="myFunction()">
					    <option value=""></option>
					    <option value="A10">A10 - Bordeaux / Tours</option>
					    <option value="A62">A62 - Bordeaux / Toulouse</option>
					    <option value="A63">A63 - Bordeaux / Biriatou</option>
					    <option value="A64">A64 - Bayonne / Toulouse</option>
					    <option value="A65">A65 - Langon / Pau</option>
					    <option value="A89">A89 - Bordeaux / Brive</option>
					</select>
				</div>
			</section>
			
			
			<section>
				<div id='infoa' style="margin-top: 5px;"></div>
				<form id="A10" action="verif.php" method="get" class="flex-container" style="display : none;">
						<div>
							<h2><label for="tags">Votre entrée</label></h2>
						  	<legend>Tapez une lettre pour sélectionner un échangeur dans la liste.</legend>
						  	<input type="text" id="A10a" name="depart" required="required" placeholder="Ex. Lormont">
						 </div>
						<!-- CHAMP LISTE GARES ARRIVEE -->
						<div>
							<h2><label for="tags">Votre sortie</label></h2>
						  	<legend>Tapez une lettre pour sélectionner un échangeur dans la liste.</legend>
						  	<input type="text" id="A10r" name="arrivee" required placeholder="Ex. Tours">		
						</div>
					<input type="submit" id="valide" value="Calculez !">
			     </form>
				<form id="A62" action="verif.php" method="get" class="flex-container" style="display : none;">
						<div>
							<h2><label for="tags">Votre entrée</label></h2>
						  	<legend>Tapez une lettre pour sélectionner un échangeur dans la liste.</legend>
						  	<input type="text" id="A62a" name="depart" required="required" placeholder="Ex. Podensac">
						 </div>
						<!-- CHAMP LISTE GARES ARRIVEE -->
						<div>
							<h2><label for="tags">Votre sortie</label></h2>
						  	<legend>Tapez une lettre pour sélectionner un échangeur dans la liste.</legend>
						  	<input type="text" id="A62r" name="arrivee" required placeholder="Ex. Agen">		
						</div>
					<input type="submit" id="valide" value="Calculez !">
			     </form>
			     <form id="A63" action="verif.php" method="get" class="flex-container" style="display : none;">
						<div>
							<h2><label for="tags">Votre entrée</label></h2>
						  	<legend>Tapez une lettre pour sélectionner un échangeur dans la liste.</legend>
						  	<input type="text" id="A63a" name="depart" required="required" placeholder="Ex. Biriatou">
						 </div>
						<!-- CHAMP LISTE GARES ARRIVEE -->
						<div>
							<h2><label for="tags">Votre sortie</label></h2>
						  	<legend>Tapez une lettre pour sélectionner un échangeur dans la liste.</legend>
						  	<input type="text" id="A63r" name="arrivee" required placeholder="Ex. St-Jean-de...">		
						</div>
					<input type="submit" id="valide" value="Calculez !">
			     </form>
			      <form id="A64" action="verif.php" method="get" class="flex-container" style="display : none;">
						<div>
							<h2><label for="tags">Votre entrée</label></h2>
						  	<legend>Tapez une lettre pour sélectionner un échangeur dans la liste.</legend>
						  	<input type="text" id="A64a" name="depart" required="required" placeholder="Ex. Lannemezan">
						 </div>
						<!-- CHAMP LISTE GARES ARRIVEE -->
						<div>
							<h2><label for="tags">Votre sortie</label></h2>
						  	<legend>Tapez une lettre pour sélectionner un échangeur dans la liste.</legend>
						  	<input type="text" id="A64r" name="arrivee" required placeholder="Ex. Salies">		
						</div>
					<input type="submit" id="valide" value="Calculez !">
			     </form>
			     <form id="A65" action="verif.php" method="get" class="flex-container" style="display : none;">
						<div>
							<h2><label for="tags">Votre entrée</label></h2>
						  	<legend>Tapez une lettre pour sélectionner un échangeur dans la liste.</legend>
						  	<input type="text" id="A65a" name="depart" required="required" placeholder="Ex. Bazas">
						 </div>
						<!-- CHAMP LISTE GARES ARRIVEE -->
						<div>
							<h2><label for="tags">Votre sortie</label></h2>
						  	<legend>Tapez une lettre pour sélectionner un échangeur dans la liste.</legend>
						  	<input type="text" id="A65r" name="arrivee" required placeholder="Ex. Captieux">		
						</div>
					<input type="submit" id="valide" value="Calculez !">
			     </form>
			     <form id="A89" action="verif.php" method="get" class="flex-container" style="display : none;">
						<div>
							<h2><label for="tags">Votre entrée</label></h2>
						  	<legend>Tapez une lettre pour sélectionner un échangeur dans la liste.</legend>
						  	<input type="text" id="A89a" name="depart" required="required" placeholder="Ex. Libourne Nord">
						 </div>
						<!-- CHAMP LISTE GARES ARRIVEE -->
						<div>
							<h2><label for="tags">Votre sortie</label></h2>
						  	<legend>Tapez une lettre pour sélectionner un échangeur dans la liste.</legend>
						  	<input type="text" id="A89r" name="arrivee" required placeholder="Ex. Périgueux Est">		
						</div>
					<input type="submit" id="valide" value="Calculez !">
			     </form>
			</section>
</body>
		<footer>
		</footer>
		<script type="text/javascript">
						$( function() {
					     var gpA10 = [
					      'Ambarès/St-Loubès','Ambès','Blaye','Bordeaux (rocade)','Carbon-Blanc','Châtellerault Nord','Châtellerault Sud','Futuroscope','Libourne/St-Antoine','Lormont','Mirambeau','Niort Sud','Paris (périphérique)','Poitiers Nord','Poitiers Sud','Pons','St-Aubin-de-Blaye','Ste-Maure','Ste-Eulalie','Saintes','St-Jean-d\'Angély','St-Maixent-l\'Ecole-Soudan','St-André-de-Cubzac','Tours Centre','Virsac','Vouillé (Limoges Niort)'
					    ];
					    var gpA62 = [
					      'Agen','Aiguillon','Bordeaux (rocade)','Castelsarrasin','Eurocentre','La Brède','La Réole','Langon','Marmande','Montauban','Podensac','St-Jory','Toulouse Ouest (rocade)','Toulouse Est (rocade)','Valence-d\'Agen'
					    ];
					    var gpA63 = [
					      'Arcachon','Bayonne Mousserolles','Bordeaux (rocade)','Bayonne Nord','Bayonne Sud','Biarritz (Demi-Échangeur Nord)','Biarritz (Demi-Échangeur Sud)','Biriatou','Capbreton (Demi-Échangeur Sud)','Ondres','St-Geours-de-Maremne','St-Jean-de-Luz Nord','St-Jean-de-Luz Sud'
					    ];
					    var gpA64 = [
					      'Artix','Bayonne Nord','Bayonne Sud','Boussens','Briscous','Capvern','Guiche','Lannemezan','Le Chapitre','Lescar','Lestelle-de-St-Martory','Martres-Tolosane','Montréjeau','Mouguerre Bourg','Mouguerre Elizaberry','Mousserolles','Muret-Nord','Orthez','Pau Centre','Peyrehorade','St-Gaudens','St-Martory','Salies','Soumoulou','Tarbes Est','Tarbes Ouest','Toulouse Sud (rocade)','Tournay','Urt'
					    ];
					    var gpA65 = [
					      'Artix','Aire-sur-Adour-Nord','Aire-sur-Adour-Sud','Bazas','Bordeaux (rocade)','Captieux','Garlin','La Réole','Langon','Le Caloy','Lescar','Orthez','Pau Centre','Podensac','Roquefort','Thèze'
					    ];
					    var gpA89 = [
					      'Bordeaux (rocade)','Brive Ouest','Coutras','Libourne Nord','Libourne Ouest','Mansac Terrasson','Montpon-Ménestérol','Mussidan Est','Mussidan Sud','Périgueux Est','Périgueux Ouest','Périgueux Sud','Thenon Est / La Bachellerie'
					      ];



							$("#A10a,#A10r" ).autocomplete({
						      source: gpA10
						    });					  
						    $("#A62a,#A62r" ).autocomplete({
						      source: gpA62
						    });
							$("#A63a,#A63r" ).autocomplete({
						      source: gpA63
						    });
						    $("#A64a,#A64r" ).autocomplete({
						      source: gpA64
						    });
						    $("#A65a,#A65r" ).autocomplete({
						      source: gpA65
						    });
						    $("#A89a,#A89r" ).autocomplete({
						      source: gpA89
						    });
					   }); 


					function myFunction() {
					 	var A10 = document.getElementById('A10');
					 	var A62 = document.getElementById('A62');
					 	var A63 = document.getElementById('A63');
					 	var A64 = document.getElementById('A64');
					 	var A65 = document.getElementById('A65');
					 	var A89 = document.getElementById('A89');
					    var selectautoroute = document.getElementById('autoroute').value;
				    
					 	if (selectautoroute == 'A10') {
					 		A10.style.display = "block";
					 		A62.style.display = "none";
					 		A63.style.display = "none";
					 		A64.style.display = "none";
					 		A65.style.display = "none";
					 		A89.style.display = "none";
					 		// document.getElementById('infoa').innerHTML = "Vous empruntez l\'" + selectautoroute;
							// console.log(selectautoroute)
					 	}
					 	else if (selectautoroute == 'A62') {
					 		A10.style.display = "none";
					 		A62.style.display = "block";
					 		A63.style.display = "none";
					 		A64.style.display = "none";
					 		A65.style.display = "none";
					 		A89.style.display = "none";
					 		// document.getElementById('infoa').innerHTML = "Vous empruntez l\'" + selectautoroute;
							// console.log(selectautoroute)
					 	}
					 	else if (selectautoroute == 'A63') {
					 		A10.style.display = "none";
					 		A62.style.display = "none";
					 		A63.style.display = "block";
					 		A64.style.display = "none";
					 		A65.style.display = "none";
					 		A89.style.display = "none";
					 		// document.getElementById('infoa').innerHTML = "Vous empruntez l\'" + selectautoroute;
							// console.log(selectautoroute)
					 	}
					 	else if (selectautoroute == 'A64') {
					 		A10.style.display = "none";
					 		A62.style.display = "none";
					 		A63.style.display = "none";
					 		A64.style.display = "block";
					 		A65.style.display = "none";
					 		A89.style.display = "none";
					 		// document.getElementById('infoa').innerHTML = "Vous empruntez l\'" + selectautoroute;
							// console.log(selectautoroute)
					 	}
					 	else if (selectautoroute == 'A65') {
					 		A10.style.display = "none";
					 		A62.style.display = "none";
					 		A63.style.display = "none";
					 		A64.style.display = "none";
					 		A65.style.display = "block";
					 		A89.style.display = "none";
					 		// document.getElementById('infoa').innerHTML = "Vous empruntez l\'" + selectautoroute;
							// console.log(selectautoroute)
					 	}
					 	else if (selectautoroute == 'A89') {
					 		A10.style.display = "none";
					 		A62.style.display = "none";
					 		A63.style.display = "none";
					 		A64.style.display = "none";
					 		A65.style.display = "none";
					 		A89.style.display = "block";
					 		// document.getElementById('infoa').innerHTML = "Vous empruntez l\'" + selectautoroute;
							// console.log(selectautoroute)
					 	}
					 	else if (selectautoroute == '') {
					 		A10.style.display = "none";
					 		A62.style.display = "none";
					 		A63.style.display = "none";
					 		A64.style.display = "none";
					 		A65.style.display = "none";
					 		A89.style.display = "none";
					 		document.getElementById('infoa').innerHTML = "";
							console.log(selectautoroute)		 		
					 	}
				}
		</script>

</html>