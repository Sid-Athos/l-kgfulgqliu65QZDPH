<?php
include_once("./Models/db_connect.php");
include('./Controllers/Functions/PHP/messages.php');

$error = false;
$flag_email_taken = false;
$flag_name_taken = false;
// check if form is submitted

switch(isset($_POST)):  
    case(isset($_POST['password'])):
    $email = htmlspecialchars(trim($_POST['email']), ENT_QUOTES, 'UTF-8');
    $password = $_POST['password'];

        // check if the combination fname/lname/email is already used
        include('./Models/log_check.php');
        $row = $stmt->fetch();
        include('./Models/status_update.php');
        if(!empty($row)){
            $successmsg = "Connexion réussie!";
            $_SESSION['ID'] = $row['ID'];
            var_dump($_SESSION);
        } else {
            $errormsg = "Vous êtes déjà connecté! <a href='index.php?page=Login' class='alert-link'></br>Cliquez ici pour vous connecter</a>";
        }
        break;

        default:
    endswitch;
    include('./Views/templates/login_form.php');

?>