<?php
function decryptage ($mot) {

	$a1 = str_split($mot);
	$a2 = $a1;
	$point = false;
		$a = 1;
	for($i=0;$i<count($a1);$i++) {
	
		if($a1[$i] == ".") {
			$point = true;
			$i++;
		}
		if($point == true) {
			// Stockage de la lettre précedant le point et de sa place
			$e = $a2[$a2[$i+1]];
			$p = $a2[$i+1];
			// substitution de la lettre précedant le point par celle qui est après le point
			$a2[$a2[$i+1]] = $a2[$i];
			//supression de la lettre apres le point et de sa place
			unset($a2[$i]);
			unset($a2[$i+1]);
			//replacage de la lettre stocker a sa place
			$l = implode("", $a2);
			$pos = strlen($l)-($p)-1;
			$sub = substr($l, 0, -$pos).$e.substr($l, -$pos);
			$a2 = str_split($sub);
			
		}
	}

	array_shift($a2);
	$value = implode($a2);
	return $value;
}


