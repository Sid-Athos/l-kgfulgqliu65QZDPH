<?php
function inscription ($POST) {

        require_once('../Models/search_pseudo.php');
        require_once('../Models/insert.php');
        require_once('cryptage.php');

	if(!isset($_POST['pseudo']) || !isset($_POST['password'])) {
		return 1;
	} else if(empty($_POST['pseudo']) || empty($_POST['password'])) {
		return 2;
	} else if(strlen($_POST['pseudo']) <= 5 )  {
		return 3;
	} else {
	
		$donnees = search_pseudo($_POST['pseudo']);

		if(!empty($donnees['username'])) {
			return 4;
		} else {
		$word = cryptage($_POST['pseudo']);
		//echo "<br><br><br><br><br><br><br><br>retour =".$word;
		//$data = explode(",", $word);
		//$mdp = $data[0];
		//$key = $data[1];
		$datas = array($_POST['pseudo'],$_POST['type'],$word);
		insert($datas);
			return 0;
		}
	}
}
?>
