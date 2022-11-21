			var resultat = document.getElementById('resultat').innerHTML;
			var newPara = document.createElement('div');
			var texte = document.createTextNode('Ce trajet n\'a pas été calculé !');

			if (resultat == false) {
			newPara.id='alerte';
			newPara.appendChild(texte);
			document.body.appendChild(newPara);
			}