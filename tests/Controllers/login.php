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
    
    if(intval($row['ID']) > 0){
        include('../tests/Models/status_update.php');
        $successmsg = "Connexion réussie! Redirection en cours";
        header('refresh:5;url=index.php?page=Lobby');
        if($_SESSION['role'] === 'vet') {
            include '../tests/Views/html_top_vets.php'; 
        } else {
            include '../tests/Views/html_top_clients.php'; 
        }
        
        include('../tests/Views/lobby.php');
    } else {
        $errormsg = "   
        <p>Vous n'avez pas de compte ou la combinaison est incorrecte!</p>";
        include('../tests/Views/html_top_login.php');
        include('../tests/Views/login.php');
    }
    break;
    default:
    include('../tests/Views/html_top_login.php');
        include('../tests/Views/login.php');
endswitch;
?>