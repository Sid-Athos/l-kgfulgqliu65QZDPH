<?php
    session_start();
    include('../tests/Controllers/session_check.php');
    include '../tests/Models/db_connect.php';
    include('../tests/Models/actual_date.php');
    $actual_date = get_date($db);
    include('../tests/Controllers/Functions/PHP/messages.php');
    
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
       $row = $stmt->fetch();
        include('../tests/Models/add_user_vet.php');
        include('../tests/Controllers/Functions/PHP/backup_vets.php');
                
            if($check == true){
                include('../tests/Models/add_vet.php');
            }
            include('../tests/Views/html_top_vets.php');
            include('../tests/Views/add_vet_form.php');
        
        break;
        default:
        include('../tests/Views/html_top_vets.php');
            include('../tests/Models/show_collaborators.php');
            $colls_rows = $stmt -> fetchAll();
    endswitch;
    
    if(isset($_POST['add'])){
        include('../tests/Views/add_vet_form.php');
    } else {
        include('../tests/Views/display_collaborators.php');

    }
?>