<?php
var_dump($_POST);
    session_start();
    include('./Views/templates/html_top_msg.php');
    include("./Models/db_connect.php");
    include('./Views/templates/vets_navbar.php');

    $error = false;
    $flag_email_taken = false;
    $flag_name_taken = false;
    switch(isset($_POST['add_vet'])):  
        case 'add_vet':
        $email = htmlspecialchars(trim($_POST['email']), ENT_QUOTES, 'UTF-8');
        $first_name = htmlspecialchars(trim($_POST['first_name']), ENT_QUOTES, 'UTF-8');
        $last_name = htmlspecialchars(trim($_POST['last_name']), ENT_QUOTES, 'UTF-8');
        $vet_init = htmlspecialchars(trim($_POST['vet_init']), ENT_QUOTES, 'UTF-8');
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $days_free = implode(',', $_POST['days_free']);
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
            // check if the email is already taken
            include('./Models/check_mail.vet.php');
            $row = $stmt->fetch();
            if($row){
                $flag_email_taken = true;
                $email_taken = "Cette addresse email est déjà utilisée";
            }
            if(!$flag_email_taken && !$flag_name_taken) {
                // Add row to database
                include('./Models/add_user_vet.php');
                include('./Controllers/Functions/PHP/backup_vets.php');
                
                if($check){
                    include('./Models/add_vets.php');
                    include('./Models/add_schedule.php');
                }
            }
        }
        break;
        default:
    endswitch;
    
    if(isset($_POST['add'])){
        include('./Views/templates/add_vet_form.php');
    }
    
    
    if(!isset($_POST['add'])){   
        include('./Models/show_collaborators.php');
        $colls_rows = $stmt -> fetchAll();
        include('./Views/templates/display_collaborators.php');
    }
?>