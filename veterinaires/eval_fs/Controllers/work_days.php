<?php
    session_start();
    var_dump($_POST);
    include("./Models/db_connect.php");
    include('./Views/templates/vets_navbar.php');
    include('./Controllers/Functions/PHP/messages.php');

    switch(isset($_POST)):
        case(isset($_POST['add'])):
            include('./Models/show_workdays.php');
            $work_days = $stmt -> fetchAll();
            for($i=0;$i<count($work_days);$i++){
                $working_days[] = implode("",$work_days[$i]);
            }
            $working_days = implode("",$working_days);
            $days = array("Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi","Dimanche");
            for($i=0;$i<count($days);$i++){
                if(!strchr($working_days,$days[$i])){
                    $days_available[] = $days[$i];
                }
            }
            include('./Views/templates/add_new_workday.php');
        break;
        case(isset($_POST['edit'])):
        break;
        case(isset($_POST['delete'])):
        break;
        default:
    endswitch;

    if(!isset($_POST['add_workday'])){   
        include('./Views/templates/html_top.php');
        include('./Models/show_workdays.php');
        $work_rows = $stmt -> fetchAll();
        include('./Views/templates/add_workday_form.php');
    }

?>

$i=0;
while($i<count($tab[$i])){
    $working_days[] = implode("",$table_rows[$i]);
    $i++;
}
$working_days = implode("",$working_days);
echo($tabi);

$days = array("Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi","Dimanche");
for($i=0;$i<count($days);$i++){
    if(strchr($working_days,$days[$i])== false){
        $days_available[] = $days[$i];
    }
}