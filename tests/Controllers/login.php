<?php
session_start();
var_dump($_SESSION);
include("../tests/Models/db_connect.php");
include('../tests/Controllers/Functions/PHP/messages.php');
include('../tests/Models/actual_date.php');
$actual_date = get_date($db);

switch(isset($_POST['login'])):  
    case 'Register':
    $email = htmlspecialchars(trim($_POST['em']), ENT_QUOTES, 'UTF-8');
    $password = htmlspecialchars(trim($_POST['pw']), ENT_QUOTES, 'UTF-8');

        // check if the combination fname/lname/email is already used
        include('../tests/Models/log_check.php');
        unset($_SESSION['ID'],$_SESSION['role']);
        $_SESSION['ID'] = $row['ID'];
        $_SESSION['role'] = $row['role'];
        
        if($row){
            include('../tests/Models/status_update.php');
            $successmsg = "Connexion réussie! Redirection en cours";
            header('refresh:5;url=index.php?page=Lobby');
        } else {
            $errormsg = "
            Vous n'avez pas de compte!<p> Vous allez être redirigé vers la page d'inscription</p>";
            header('refresh:8;url=index.php?page=Register');
        }
        include('../tests/Views/html_top_vets.php');
        break;
        default:
        include('../tests/Views/html_top_login.php');
        include('../tests/Views/login.php');
    endswitch;
    
?>