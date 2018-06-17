<?php
	function changename($POST)
	{
		require("../Controllers/session_check.php");
		require_once('../Models/search_pseudo.php');
		require_once('../Models/update.php');
		else if(!isset($_POST['new_pseudo']) || !isset($_POST['conf_pw']))
		{
			return 1;
		}
		else if($_POST['conf_pw']!=$_SESSION['pw'])
		{
			return 2;
		}
		else if(empty($_POST['new_pseudo']))
		{
			return 3;
		}
		else if(strlen($_POST['new_pseudo'])<=5)
		{
			return 4;
		}
		else
		{
			$donnees=search_pseudo($POST);
			if(!empty($donnees['username']))
			{
				return 5;
			}
			else
			{
				$_POST['pseudo']=$_SESSION['ID'];
				update($POST]);
				$_SESSION['ID']=$_POST['new_pseudo'];
				return 6;
			}
		}
	}
?>