<?php
    /* Modification historique via AJAX côté clients */

    include('./db_connect.php');
    $a = explode(" ",$_GET['d']);
    $o = $_GET['o'];
    
    $query =
    "SELECT history
    FROM patients
    WHERE ID = :pet_id
    AND owner_ID = :owner_id";

    $query_params = array(":pet_id" => intval($a[1]),
                         ":owner_id" => $o);
                         try {
                            $stmt = $db->prepare($query);
                            $result = $stmt->execute($query_params);
                            $successmsg = $stmt ->fetchAll();
                            $res = $successmsg[0]['history'];
                            echo $res;
                        }catch(PDOException $ex){
                            die("Failed to run query: " . $ex->getMessage());
                        }
    unset($a,$o,$db);
?>