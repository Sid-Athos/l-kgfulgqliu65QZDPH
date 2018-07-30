<?php
    $query = 
    "SELECT pet_name, breed, colour, sex, date_of_birth,microchip_tatoo
    FROM patients
    WHERE
    owner_ID = :ID";

    $query_params = array(':ID' => $_SESSION['ID']);

    $query_params = array(':ID' => $_SESSION['ID']);
    try {
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }catch(PDOException $ex){
        die("Failed to run query: " . $ex->getMessage());
    }
?>