<?php
session_start();
function conect ($POST) {

	require_once('../Models/search_pseudo.php');
	require_once('decryptage.php');

	$list = array("pseudo", "password", "type");
	$check = 0;
	for($i=0;$i<count($list); $i++) {
		if(!empty($_POST[$list[$i]]) && isset($_POST[$list[$i]]) ) {
			$check++;
		}
	}
	if(!isset($_POST['pseudo']) || !isset($_POST['password'])) {
                return 3;
	}else if($check != 3) {
		return 1;
	} else {
	$donnees = search_pseudo($_POST['pseudo']);
	$mot = $donnees['pw'];
	$word = decryptage($mot);
	if($donnees['username'] == $_POST['pseudo'] && $word == $_POST['password'] && $donnees['category'] == $_POST['type'])  {
		$_SESSION['pseudo'] = $_POST['pseudo'];
		//$_SESSION['id'] = $donnees['id_user'];
		//$_SESSION['type'] = $_POST['type'];
		return 0;
	}else{
		return 2;
	}
	}
}
?>
