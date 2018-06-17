<?php
	require("../Controllers/session_check.php");
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>MyStudio</title>
</head>

<body>
	<?php
		require('../Controllers/changename.php');
		$change=changename($_POST['pseudo']);
		if($change==1)
		{
			echo "<center>Les champs n'ont pas été remplis.</center>";
			header("refresh:6;url=changename_page.php");
		}
		else if($change==2)
		{
			echo "<center>Mot de passe incorrect. Veuillez réessayer.</center>";
			header("refresh:6;url=changename_page.php");
		}
		else if($change==3)
		{
			echo "<center>Ce pseudo est déjà pris, veuillez donner un autre pseudo.</center>";
			header("refresh:6;url=changename_page.php");
		}
		else if($change==4)
		{
			echo "<center>Le pseudo doit contenir un minimum de 5 caractères.</center>";
			header("refresh:6;url=changename_page.php");
		}
		else if($change==5)
		{
			echo "<center>Ce pseudo existe déjà, veuillez en choisir un autre.</center>";
			header("refresh:6;url=changename_page.php");
		}
		else if($changer==6)
		{
			echo"<center><h3>MyStudio</h3><br>Changement de nom ?
			<br>Votre nouveau nom est maintenant ".$_SESSION['ID'].".</center>";
			header("refresh:6;url=navigation.html");
		}
	?>
</body>
</html>