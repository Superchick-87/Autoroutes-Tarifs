<?php
/*Script pour renommer les nom de fichier en Dos De Chameau */
/* www.webatelier.biz*/

	function remplacemot($tring){
		$tring = str_replace("Péage","",$tring );
		$tring = str_replace(" ","",$tring );
		return $tring;
	}
?>