<?php
    include('./db_connect.php');
    $a = explode(' ',$_GET['a']);
    $o = $_GET['o'];
    $query =
    "SELECT patients.history
    FROM patients JOIN appointment
    WHERE patients.ID = :pet_id
    AND appointment.vets_ID = (SELECT ID FROM vets WHERE users_ID = :owner_id)";

    $query_params = array(":pet_id" => $a[2],
                         ":owner_id" => $o);
                         try {
                            $stmt = $db->prepare($query);
                            $result = $stmt->execute($query_params);
                            $res = $stmt ->fetchAll();
                            
                        }catch(PDOException $ex){
                            die("Failed to run query: " . $ex->getMessage());
                        }
                        if(!empty($res)){
                            $lol = $res[0]['history'];
                            echo $res[0]['history'];
                        }
    unset($a,$o,$db);
?>