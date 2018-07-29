<?php
session_start();
include("../tests/Models/db_connect.php");
include('../tests/Controllers/Functions/PHP/messages.php');
include('../tests/Models/actual_date.php');
$actual_date = get_date($db);

$error = false;
$flag_email_taken = false;
$flag_name_taken = false;

switch(isset($_POST['register'])):  
    case "S'inscrireRegister":
    $email = htmlspecialchars(trim($_POST['email']), ENT_QUOTES, 'UTF-8');
    $first_name = htmlspecialchars(trim($_POST['first_name']), ENT_QUOTES, 'UTF-8');
    $last_name = htmlspecialchars(trim($_POST['last_name']), ENT_QUOTES, 'UTF-8');
    $address = htmlspecialchars(trim($_POST['address']), ENT_QUOTES, 'UTF-8');
    $postal_code = htmlspecialchars(trim($_POST['postal_code']), ENT_QUOTES, 'UTF-8');
    $city = htmlspecialchars(trim($_POST['city']), ENT_QUOTES, 'UTF-8');
    $phone_number = htmlspecialchars(trim($_POST['phone_number']), ENT_QUOTES, 'UTF-8');
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $email_error = "Entrez une addresse email valide";
    }
    if(strlen($password) < 6) {
        $error = true;
        $password_error = "6 caractères ou plus";
    }
    if($password != $cpassword) {
        $error = true;
        $cpassword_error = "Les mots de passe ne correspondent pas";
    }
    if (!$error) {
        // check if the combination fname/lname/email is already used
        include('../tests/Models/reg_check_clients.php');
        $row = $stmt->fetch();
        if($row){
            $flag_name_taken = true;
            $flag_email_taken = true;
            $email_taken = "Cette addresse email est déjà utilisée";
            $name_taken = "Vous possédez déjà un compte <br>" . $first_name . " " . $last_name."!";
        } else {
            // Add row to database
            include('../tests/Controllers/Functions/PHP/backup_clients.php');
            include('../tests/Models/register_clients.php');
            $_SESSION['ID'] = $db ->lastInsertId();
            $_SESSION['role'] = "client";
            $successmsg = "Vous êtes bien inscrit et connecté, redirection en cours!";
            header('refresh:10;url=index.php?page=Lobby');
            $connect = true;
        }
    }
    break;
    default:
endswitch;
include('../tests/Views/html_top_login.php');
include('../tests/Views/register.php');
?>
