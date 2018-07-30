<?php
    session_start();
    include("../tests/Models/db_connect.php");
    include('../tests/Views/templates/vets_navbar.php');
    include('../tests/Controllers/Functions/PHP/messages.php');
    
    $error = false;
    $flag_email_taken = false;
    $flag_name_taken = false;
    
    switch(isset($_POST['add_vet'])):  
        case 'add_vet':
        include('../tests/Views/templates/html_top.php');
        $email = htmlspecialchars(trim($_POST['email']), ENT_QUOTES, 'UTF-8');
        $first_name = htmlspecialchars(trim($_POST['first_name']), ENT_QUOTES, 'UTF-8');
        $last_name = htmlspecialchars(trim($_POST['last_name']), ENT_QUOTES, 'UTF-8');
        $vet_init = htmlspecialchars(trim($_POST['vet_init']), ENT_QUOTES, 'UTF-8');
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $days_free = $_POST['days_free'];
        $phone = $_POST['phone_number'];
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $error = true;
            $email_error = "Entrez une addresse email valide";
        }
        if($password != $cpassword) {
            $error = true;
            $cpassword_error = "Les mots de passe ne correspondent pas";
        }
        if ($error == false) {
            // check if the email is already taken
            include('../tests/Models/check_mail_vet.php');
            $row = $stmt->fetch();
            if(isset($row['email'])){
                $flag_email_taken = true;
                $errormsg = "Cette addresse email est déjà utilisée";
            }else {
                // Add row to database
                include('../tests/Models/add_user_vet.php');
                include('../tests/Controllers/Functions/PHP/backup_vets.php');
                
                if($check){
                    include('../tests/Models/add_vet.php');
                    include('../tests/Models/add_schedule.php');
                }
            }
        }
        break;
        default:
    endswitch;
    
    if(isset($_POST['add'])){
        include('../tests/Views/templates/add_vet_form.php');
    }else {
        include('../tests/Views/templates/html_top_vets.php');
        include('../tests/Models/show_collaborators.php');
        $colls_rows = $stmt -> fetchAll();
        include('../tests/Views/templates/display_colls.php');
    }
?>