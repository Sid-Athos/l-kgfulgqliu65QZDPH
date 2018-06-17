<?php
function cryptage ($POST) {
	
	$value = $_POST['password'];
	$a1 = str_split($value);
	$a2 = $a1;
	array_push($a2, ".");
	$key = array();
	$lettres = array("a", "e", "i", "n", "s", "t", "l", "r");
	for($i=0;$i<count($a1);$i++) {
		for($j=0;$j<count($lettres);$j++) {
			if($lettres[$j] == $a1[$i]) {
				array_push($a2, $a1[$i].$i);
				//array_push($key, (string)$i);
				unset($a2[$i]);
				array_values($a2);
			}
		}
	}
	$value = implode($a2);
	//$value1 = implode($key);
	return $value;
}
?>
