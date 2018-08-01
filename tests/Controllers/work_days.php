<?php
session_start();
include('./Controllers/session_check.php');
include("./Models/db_connect.php");
include('./Controllers/Functions/PHP/messages.php');
include('./Models/actual_date.php');
$actual_date = get_date($db);
include('./Models/show_workdays.php');
$work_rows = $stmt -> fetchAll();
include('./Models/select_workdays.php');
$work_days = $stmt -> fetchAll();
include('./Controllers/Functions/PHP/days_available.php');
$days_available = days_available($work_days);
include('./Views/html_top_vets.php');

switch(isset($_POST)):
    
    case(isset($_POST['add'])):

            include('./Views/add_new_workday.php');

        break;

    case(isset($_POST['edit'])):

            include('./Views/edit_workday.php');

        break;

    case(isset($_POST['delete'])):

            include('./Views/suppress_workday_form.php');

        break;

    case(isset($_POST['add_day'])):

            $days_free = $_POST['days_add'];
            $from_time = $_POST['from_hour'].':'.$_POST['from_min'].':00';
            $to_time = $_POST['to_hour'].':'.$_POST['to_min'].':00';
            
            if((int)$_POST['from_hour'] >= (int)$_POST['to_hour']){
                $errormsg = "L'heure de début doit être supérieure à celle de fin";
            } else {
                include('./Models/add_working_day.php');
                $successmsg = "Journée ajoutée";
            }
            include('./Models/show_workdays.php');
            $work_rows = $stmt -> fetchAll();
            include('./Views/rest.php');

        break;

    case(isset($_POST['optradio'])):

            include('./Models/delete_day.php');
            $successmsg ="Suppression confirmée";
            include('./Models/show_workdays.php');
            $work_rows = $stmt -> fetchAll();
            include('./Views/rest.php');

        break;

    case(isset($_POST['days_edit'])):

            $days_free = $_POST['days_edit'];
            $from_time = $_POST['from_hour'].':'.$_POST['from_min'].':00';
            $to_time = $_POST['to_hour'].':'.$_POST['to_min'].':00';
            
            if((int)$_POST['from_hour'] >= (int)$_POST['to_hour']){
                $errormsg = "L'heure de début doit être supérieure à celle de fin";
            } else {
                include('./Models/update_working_days.php');
                $successmsg = "Mise à jour effectuée";
            }

            include('./Models/show_workdays.php');
            $work_rows = $stmt -> fetchAll();
            include('./Views/rest.php');

        break;
        
    default:

        include('./Views/rest.php');

endswitch;
?>