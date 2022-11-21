
				function myFunction() {
					 	var resultatauto = document.getElementById('resultatauto');
					 	var resultatmoto = document.getElementById('resultatmoto');
					 	var moyenneauto = document.getElementById('moyenneauto');
					 	var moyennemoto = document.getElementById('moyennemoto');
					 	var selectresult = document.getElementById('selectresult').value;
				    
					 	if (selectresult == 'auto') {
					 		resultatauto.style.display = "block";
					 		moyenneauto.style.display = "block";
					 		resultatmoto.style.display = "none";
					 		moyennemoto.style.display = "none";
					 		document.getElementById('categorie').innerHTML = "...les frais de péage en " +selectresult+" seront de : ";
					 		console.log(selectresult)
					 	}
					 	else if (selectresult == 'moto') {
					 		resultatauto.style.display = "none";
					 		moyenneauto.style.display = "none";
					 		resultatmoto.style.display = "block";
					 		moyennemoto.style.display = "block";
					 		document.getElementById('categorie').innerHTML = "...les frais de péage en " +selectresult+" seront de : ";
					 		console.log(selectresult)
					 	}
				}
