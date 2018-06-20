<?php

include_once("./Models/db_connect.php");

$error = false;
$flag_email_taken = false;
$flag_name_taken = false;
// check if form is submitted

switch(isset($_POST['register'])):  
    case 'Register':
    $email = htmlspecialchars(trim($_POST['email']), ENT_QUOTES, 'UTF-8');
    $password = $_POST['password'];

    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $email_error = "Entrez une addresse email valide";
    }
    if(strlen($password) < 6) {
        $error = true;
        $password_error = "6 caractères ou plus";
    }
    
    if (!$error) {
        // check if the combination fname/lname/email is already used
        include('./Models/log_check.php');
        $row = $stmt->fetch();
        if($row){
            $_SESSION['user_ID'] = $row['ID'];
        } else {
                    // Add row to database
                    include('./Controllers/Functions/PHP/backup_clients.php');
                    include('./Models/register_clients.php');
                    $successmsg = "Vous êtes inscrit! <a href='index.php?page=login' class='alert-link'></br>Cliquez ici pour vous connecter</a>";
                }
        }
        break;

        default:
    endswitch;
    include('./Views/templates/login_form.php');

?>