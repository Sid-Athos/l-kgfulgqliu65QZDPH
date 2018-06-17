<?php
require('../Controllers/registration.php');
if(inscription($_POST['pseudo'], $_POST['password']) == 0) {
header("refresh:6;url=login_page.php");
echo"<center><h3>Mystudio</h3></center><br><center>L'inscription est une réussite<br>
</center><br>
<center>Nom : ".$_POST['pseudo']."<br>Mot de passe : ".$_POST['password']."<br>Compte : ".$_POST['type']."</center>";
} else {
echo"<img src='../Views/LOGO.jpg'width='100' height='90'>
<center><br><br><br><h1>S'inscrire sur Mystudio</h1></center><p class='txt' >MyStudio est une plateforme de diffusion de<br>musique de tous genres en streaming où artistes<br>et auditeurs se croisent.<br>Elle est destinée aux auditeurs de langue française<br>qui aiment avoir toutes les informations disponibles<br>sur leurs artistes favoris, paroles, biographies, et <br>collaborateurs fréquents.<br>
Les utilisateurs doivent s’inscrire pour accéder au site.<br> Les auditeurs peuvent écouter et apprécier les morceaux<br>de leurs artistes préférés, mais aussi profiter des paroles<br>qui sont accompagnées des traductions.<br>
    Lors de la création d’un compte utilisateur, il est possible<br>de s’enregistrer en tant qu’artiste et ainsi de diffuser ses<br>créations ou de créer un compte auditeur qui permet<br>simplement d’écouter.
Le site propose également des<br>suggestions d’écoutes en fonction des goûts et des<br> précédentes visites du client.</p>

        <form class='form' action='' method='POST'>
        <input type='text' class='champ' id='pseudo' placeholder='Pseudo**' name='pseudo' value='".$_POST['pseudo']."'>
        <br/>
        <input type='text' class='champ' id='mdp' placeholder='Mot de passe**' name='password' value='".$_POST['password']."'>
        <br/>
        <table><tr><td>M'inscrire en tant que:<td><td><input type='radio' name='type' value='artiste'checked>artiste</td><br>
        <td><input type='radio' name='type' value='auditeur'>auditeur<br></td></tr></table>
        <input type='submit' name='send' value='Envoyer'class='verif'>
        </form><br>
	<p class='msg'>as tu bien completer le formulaire avant de cliquer</p>

        <a class='href' href='login_page.php'>Retour à la page de connexion</a>
        <br>";

if(inscription($_POST['pseudo'], $_POST['password']) == 1) {

} else if(inscription($_POST['pseudo'], $_POST['password']) == 2) {
	echo "<center>Les champs ont mal été rempli</center>";

} else if(inscription($_POST['pseudo'], $_POST['password']) == 3) {
	echo "<center>Votre Pseudo doit contenir un minimum de 5 caractere et le mot de passe un maximum de 10 caractère</center>";
} else if(inscription($_POST['pseudo'], $_POST['password']) == 4) {
	echo "<center>Votre Pseudo existe déja</center>";
}
}
?>
<!doctype html public "-//W3C//DTD HTML 4.0 //EN">
<html>
<head>
       <title>Mettre des commentaires</title>
    <title>Mystudio</title>
    <meta content='http-equiv' content-type='text/html; charset = UTF-8'/>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet"> 
    <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="../Views/CSS/login_registration.css">


</head>
<body>
<!--Barre horizontale-->
<ul class="horizontale">
<li class="horizontale">
<a class="horizontale active" href="">MyStudio</a>
</li>
<li class="horizontale">
<img src='../Views/images/LOGO.jpg'width='100' height='90'>
</li>
<li style="float:right">
<a class="horizontale1" href="">MyStudio, C'est quoi ?<!--Image--></a>
</li>
</ul>

<script src="jquery.js"></script>
<script src="style.js"></script>

</head>
<body>
</body>
</html>
