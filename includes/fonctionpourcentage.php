<?php
				function pourcentage($choix, $total){
					 if ($choix>0) {
					 	$toto=number_format((($choix-$total)/($total)*100), 1, ',', '');
					 return $toto;
					 }
					 else{
					 $toto=0;
					 return $toto;	
					 }
					 
				}
?>