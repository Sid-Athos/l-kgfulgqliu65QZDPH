<?php
    /* Affiche les patients d'un vétérinaire (ceux ayant déjà assistés à une consultation) */
    $query = 
    "SELECT DISTINCT patients.pet_name,  patients.breed, patients.ID, patients.sex, patients.date_of_birth, consultations.weight, consultations.diagnosis, patients.history 
    FROM 
    patients, consultations
    WHERE consultations.patients_ID = patients.ID AND consultations.vets_ID = (SELECT ID FROM vets WHERE users_ID =:ID)
    ORDER BY consultations.date";

    $query_params = array(':ID' => $_SESSION['ID']);

    try {
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }catch(PDOException $ex){
        die("Failed to run query: " . $ex->getMessage());
    }
?>