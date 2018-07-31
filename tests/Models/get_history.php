<?php
    include('./db_connect.php');
    $a = $_GET['d'];
    $o = $_GET['o'];
    
    $query =
    "SELECT history
    FROM patients
    WHERE pet_name = :pet_id
    AND owner_ID = :owner_id";

    $query_params = array(":pet_id" => $a,
                         ":owner_id" => $o);
                         try {
                            $stmt = $db->prepare($query);
                            $result = $stmt->execute($query_params);
                            $successmsg = $stmt ->fetchAll();
                            echo $successmsg[0]['history'];
                        }catch(PDOException $ex){
                            die("Failed to run query: " . $ex->getMessage());
                        }
    unset($a,$o,$db);
?>