<!DOCTYPE HTML>

<html>


<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../tests/Controllers/Functions/JS/startTime.js"></script>
    <script type="text/javascript" src="../tests/Controllers/Functions/JS/datepicker.js"></script>
    <script type="text/javascript" src="../tests/Controllers/Functions/JS/body_load.js"></script>
    <script type="text/javascript" src="../tests/Controllers/Functions/JS/javastreets.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
    <link href="../tests/Views/CSS/stylesheet.css" type="text/css" rel="stylesheet">
</head>


<body onload="startTime();datepicker()">

    
    <div class="row navbar">
        <div class="col-xs-2">
            <a href="../tests/index.php?page=Lobby" title="Retour à l'accueil">
                <img src="../tests/Views/icons/icons8-cat-profile-96.svg" alt="Kitten" style="margin-left:-25px; margin-top:-2px;margin-bottom:2px" width="30px" height ="30px" class ="kitten_icon" >
            </a>
        
            <span style="float:right;margin-top:3px;color:#decba4" >
                    <?php 
                        echo $actual_date; 
                    ?>
                <br>
                    <span id="txt" onload="startTime()"style="color:#a2ab58">
                    </span>
            </span>
        </div>
        
        <div class="col-xs-6" style="color:#FFFFFF" id="hide">
            <a href="../tests/index.php?page=Rest" title="Planning général" style="margin-left:10px">
                <img src="../tests/Views/icons/icons8-schedule-64.png" alt="Kitten" width="25px" height ="25px">
            </a>
            <a href="../tests/index.php?page=Appointments" title="Rendez-vous à venir" style="margin-left:10px">
                <img src="../tests/Views/icons/rdv.png" alt="Kitten" width="25px" height ="25px">
            </a>
            <a href="../tests/index.php?page=Add_collab" title="Ajouter un collaborateur" style="margin-left:10px">
                <img src="../tests/Views/icons/add.png" alt="Kitten" width="25px" height ="25px">
            </a>
            <a href="../tests/index.php?page=Patients" title="Mes patients">
                <img src="../tests/Views/icons/animals.png" alt="Kitten" width="25px" height ="25px">
            </a></div>

        <div class="col-xs-6">
            <form action="../test_bootstrap.php" class="search_form" id="target" name="search_form" method="POST" style="margin-top:10px;margin-left:0px;margin-right:5px;float:left">
                        <input type="search" autofocus id="search_in" class ="search" optional result="5" size="40"name="search"title="Appuyez sur Entrée pour lancer la requête" placeholder="Rechercher un animal..."/>
            </form>            
            <a href="../tests/index.php?page=Messages" title="Messagerie">
                <img src="../tests/Views/icons/address-book-solid.svg" alt="Kitten" width="25px" height ="25px">
            </a>
            <a href="../tests/index.php?page=Settings" title="Mon compte">
                <img src="../tests/Views/icons/cogs-solid.svg" alt="Kitten" width="25px" height ="25px">
            </a>
            <a href="../tests/index.php?page=Logout" title="Déconnexion">
                <img src="../tests/Views/icons/sign-out-alt-solid.svg" alt="Kitten" width="25px" height ="25px">
            </a>
        </div>

        
    </div>
