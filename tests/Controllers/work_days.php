<?php
session_start();
include("../tests/Models/db_connect.php");
include('../tests/Controllers/Functions/PHP/messages.php');
include('../tests/Models/actual_date.php');
$actual_date = get_date($db);
include('../tests/Models/show_workdays.php');
$work_rows = $stmt -> fetchAll();
include('../tests/Models/select_workdays.php');
$work_days = $stmt -> fetchAll();
include('../tests/Controllers/Functions/PHP/days_available.php');
$days_available = days_available($work_days);
include('../tests/Views/html_top_vets.php');

switch(isset($_POST)):
    
    case(isset($_POST['add'])):

            include('../tests/Views/add_new_workday.php');

        break;

    case(isset($_POST['edit'])):

            include('../tests/Views/edit_workday.php');

        break;

    case(isset($_POST['delete'])):

            include('../tests/Views/suppress_workday_form.php');
            
        break;

    case(isset($_POST['add_day'])):

            $days_free = $_POST['days_add'];
            $from_time = $_POST['from_hour'].':'.$_POST['from_min'].':00';
            $to_time = $_POST['to_hour'].':'.$_POST['to_min'].':00';
            
            if((int)$_POST['from_hour'] >= (int)$_POST['to_hour']){
                $errormsg = "L'heure de début doit être supérieure à celle de fin";
            } else {
                include('../tests/Models/add_working_day.php');
                $successmsg = "Journée ajoutée";
            }
            include('../tests/Models/show_workdays.php');
            $work_rows = $stmt -> fetchAll();
            include('../tests/Views/rest.php');

        break;

    case(isset($_POST['optradio'])):

            include('../tests/Models/delete_day.php');
            $successmsg ="Suppression confirmée";
            include('../tests/Models/show_workdays.php');
            $work_rows = $stmt -> fetchAll();
            include('../tests/Views/rest.php');

        break;

    case(isset($_POST['days_edit'])):

            $days_free = $_POST['days_edit'];
            $from_time = $_POST['from_hour'].':'.$_POST['from_min'].':00';
            $to_time = $_POST['to_hour'].':'.$_POST['to_min'].':00';
            
            if((int)$_POST['from_hour'] >= (int)$_POST['to_hour']){
                $errormsg = "L'heure de début doit être supérieure à celle de fin";
            } else {
                include('../tests/Models/update_working_days.php');
                $successmsg = "Mise à jour effectuée";
            }

            include('../tests/Models/show_workdays.php');
            $work_rows = $stmt -> fetchAll();
            include('../tests/Views/rest.php');

        break;
        
    default:

        include('../tests/Views/rest.php');

endswitch;
?>