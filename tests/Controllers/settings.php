<?php
    session_start();
    include('../tests/Controllers/session_check.php');
    include("../tests/Models/db_connect.php");
    include('../tests/Controllers/Functions/PHP/messages.php');
    include('../tests/Models/actual_date.php');
    $actual_date = get_date($db);
    if($_SESSION['role'] == 'vet'){
        include('../tests/Views/html_top_vets.php');
    } else if($_SESSION['role'] == 'client') {
        include('../tests/Views/html_top_clients.php');
    }
    
    switch(isset($_POST)):
        case(isset($_POST['password']) && strlen($_POST['password']) > 5):
                $opassword = $_POST['opassword'];
                $password = $_POST['password'];
                $cpassword = $_POST['cpassword'];
                if(strlen($password) >= 6){
                    if($password != $cpassword) {
                        $cpassword_error = "Les mots de passe ne correspondent pas";
                    } else {
                        $go = true;
                    }
                }
                if($go){
                    include('../tests/Models/update_password.php');
                }
                include('../tests/Views/manage_account.php');
                
            break;
        case(isset($_POST['email']) && strlen($_POST['email']) > 5):
            $email = htmlspecialchars(trim($_POST['email']), ENT_QUOTES, 'UTF-8');

            include('../tests/Models/update_mail.php');
            include('../tests/Views/manage_account.php');
        break;
        default:
        include('../tests/Views/manage_account.php');
    endswitch;
    ?>