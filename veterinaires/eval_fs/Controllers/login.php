<?php
session_start();
include_once("./Models/db_connect.php");
include('./Controllers/Functions/PHP/messages.php');

switch(isset($_POST)):  
    case(isset($_POST['password'])):
    $email = htmlspecialchars(trim($_POST['email']), ENT_QUOTES, 'UTF-8');
    $password = $_POST['password'];

        // check if the combination fname/lname/email is already used
        include('./Models/log_check.php');
        $row = $stmt->fetch();
        if(!empty($row)){
            include('./Models/status_update.php');
            $successmsg = "Connexion réussie! Redirection en cours";
            $_SESSION['ID'] = $row['ID'];
            $_SESSION['role'] = $row['role'];
            header('refresh:5;url=index.php?page=Members_lobby');
        } else {
            $errormsg = "Vous êtes déjà connecté! <a href='index.php?page=Members_lobby' class='alert-link'></br>Cliquez ici pour accèder à l'espace membre</a>";
            $_SESSION['ID'] = $row['ID'];
            $_SESSION['role'] = $row['role'];
        }
        break;
    default:
endswitch;

include('./Views/templates/html_top.php');
include('./Views/templates/log_reg_bar.php');
include('./Views/templates/login_form.php');
?>