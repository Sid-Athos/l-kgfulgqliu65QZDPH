<?php
    session_start();
    var_dump($_POST);
    include('../tests/Controllers/session_check.php');
    include("../tests/Models/db_connect.php");
    include('../tests/Controllers/Functions/PHP/date_to_mysql.php');
    include('../tests/Controllers/Functions/PHP/messages.php');
    include('../tests/Models/actual_date.php');
    $actual_date = get_date($db);

    $error_reg_animal = false;
    $flag_name_taken = false;

    if($_SESSION['role'] == 'vet'){
        include('../tests/Views/templates/html_top_vets.php');
    }else if($_SESSION['role'] == 'client') {
        include('../tests/Views/html_top_clients.php');
    }

    switch(isset($_POST)):
        case(isset($_POST['add_app'])):
        include('../tests/Views/animal_choice.php');
        break;
        
        case(isset($_POST['cancel'])):
            break;
        case(isset($_POST['animal_choice'])):
                include('../tests/Views/day_choice');

            break;
        case(isset($_POST['optradio']) && $_POST['optradio'] === 'no'):
                include('../tests/Models/seek_animal.php');
                $animal_rows = $stmt ->fetchAll();
                include('../tests/Views/choose_animal.php');
            break;
        
        case(isset($_POST['optradio']) && $_POST['optradio'] === 'yes'):
                include('../tests/Views/animal_form.php');
            break;
        
        case(isset($_POST['register_animal'])):

        $pet_name = htmlspecialchars(trim($_POST['pet_name']), ENT_QUOTES, 'UTF-8');
        $breed = htmlspecialchars(trim($_POST['breed']), ENT_QUOTES, 'UTF-8');
        $colour = htmlspecialchars(trim($_POST['colour']), ENT_QUOTES, 'UTF-8');
        $sex = htmlspecialchars(trim($_POST['optradio2']), ENT_QUOTES, 'UTF-8');
        
        if(strlen($pet_name) > 20){
            $error_reg_animal = true;
            $pet_name_error = "Le nom est trop long";
        }
        
        if(!empty($_POST['date_of_birth'])){
            $date_of_birth = date_to_mysql($_POST['date_of_birth']);
        }else{
            $date_of_birth = NULL;
        }
        if(isset($_POST['microship_tatoo'])){
            $microchip_tatoo = htmlspecialchars(trim($_POST['microship_tatoo']), ENT_QUOTES, 'UTF-8');
            if(!preg_match('/^[a-zA-Z0-9]+$/',$microchip_tatoo)){
                $error_reg_animal = true;
                $microchip_tatoo_error = "Le code n'est pas au bon format";
            }
        }else{
            $microchip_tatoo ="";
        }
        if(isset($_POST['comment'])){
            $comment = htmlspecialchars(trim($_POST['comment']), ENT_QUOTES, 'UTF-8');
        }else{
            $comment = "";
        }
        if(!isset($pet_name_error)){
            include('../tests/Models/animal_reg_check.php');
            $reg_row = $stmt -> fetch();
                if(empty($reg_row)){
                    include('../tests/Models/animal_reg.php');
                    $successmsg = 'Animal enregistré';
                    include('../tests/Views/success_failure.php');
                    include('../tests/Views/day_choice.php');
                } else {
                    $errormsg = "Cet animal est déjà enregistré!";
                    include('../tests/Views/success_failure.php');
                }
            } else {
                include('../tests/Views/success_failure.php');
                $errormsg ="Une erreur a été détectée dans le formulaire d'inscription";
            include('../tests/Views/animal_form.php');
        }
        break;
        
        default:
        include('../tests/Views/apps.php');
        break;

    endswitch;
?>
if($_SESSION['role'] == 'client'){
    include('../tests/Models/get_appointments.php');
    $app_rows = $stmt->fetchAll();
    for($i=0;$i<count($app_rows);$i++){
        $app_list[] = implode(" ",$app_rows[$i]);
    }
} else if($_SESSION['role'] == 'vet'){
    include('../tests/Models/get_vets_apps.php');
    $app_rows = $stmt->fetchAll();
    for($i=0;$i<count($app_rows);$i++){
        $app_list[] = implode(" ",$app_rows[$i]);
    }
}