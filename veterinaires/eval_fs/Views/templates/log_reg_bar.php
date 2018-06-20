<div class="topnav" id="myTopnav">
  <a href="./index.php?page=Home" class="active">Home</a>
  <a href="./index.php?page=Login">Se connecter</a>
  <a href="./index.php?page=Inscription">S'inscrire</a>
  <?php  if(isset($connect)){ echo '<ahref="./index.php?page=Members_lobby">Accueil</a>';} ?>
</div>
<body>