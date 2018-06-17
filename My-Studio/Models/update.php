<?php
	function update($POST)
	{
		$bdd = new PDO('mysql:host=localhost;dbname=mystudio;charset=utf8', 'root', 'isma');
		$req = $bdd->query('UPDATE USERS set username='.$_POST['new_pseudo'].' WHERE username='.$_POST['pseudo'].' AND pw='.$_POST['conf_pw']);
	}
?>