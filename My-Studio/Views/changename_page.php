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
		echo"<center><br><br><br><br><br><br><br><h1>Vous voulez changer de pseudo, ".$_SESSION['ID']." ?</h1>
		<form action='../Views/changename_page2.php' method='POST'>
		<input type='text' placeholder='Pseudo' name='new_pseudo' value=''>
		<input type='hidden' placeholder='Password' name='conf_pw' value=''>
		<br>
		<input type='submit' name='send' value='Envoyer'>
		</form>
		Donnez-nous votre nouveau pseudo pour faire le changement.<br></center>";
	?>
</body>
</html>