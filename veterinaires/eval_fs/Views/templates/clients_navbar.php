<div class="topnav" id="myTopnav">
  <a href="./index.php?page=Members_lobby" class="active">Home</a>
  <a href="./index.php?page=New_appointment">Prendre rendez-vous</a>
  <a href="./index.php?page=Appointments">Gestion des rendez-vous</a>
  <a href="./index.php?page=Tracking">Suivi</a>
  <a href="./index.php?page=Messages">Messagerie</a>
</div>
<body>
<?php if (isset($successmsg)) { success($successmsg); } ?>
<?php if (isset($errormsg)) { alert($errormsg); } ?>