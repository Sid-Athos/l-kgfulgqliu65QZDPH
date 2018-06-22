<?php
        $query = "INSERT INTO patients
                    (ID,
                    pet_name,
                    breed,
                    colour,
                    sex,
                    date_of_birth,
                    microchip_tatoo,
                    comment,
                    owner_ID)
                VALUES
                    (NULL,
                    :pet_name,
                    :breed,
                    :colour,
                    :sex,
                    :date_of_birth,
                    :microchip_tatoo,
                    :comment,
                    :owner_ID)";
        $query_params = array(':pet_name' => $pet_name,
                              ':breed' => $breed,
                             ':colour' => $colour,
                             ':sex' => $sex,
                             ':date_of_birth' => $date_of_birth,
                             ':microchip_tatoo' => $microship_tatoo,
                             ':comment' => $comment,
                             ':owner_ID' => $_SESSION['user_id']);
        try {
            $stmt = $db->prepare($query);
            $result = $stmt->execute($query_params);
            $check = true;
        }catch(PDOException $ex){
            $check = false;
            die("Failed to run query: " . $ex->getMessage());
        }
    }
    if($check){
        $query = "
                INSERT INTO clients_has_patients
                    (ID,
                    clients_has_patients.clients_ID,
                    clients_has_patients.patients_ID)
                VALUES
                    (NULL,
                    :clients_ID,
                    (SELECT ID FROM patients WHERE owner_ID = :clients_ID AND pet_name = :pet_name))";
        $query_params = array(':clients_ID' => $_SESSION['user_id'],
                             ':pet_name' => $pet_name);
        try {
            $stmt = $db->prepare($query);
            $result = $stmt->execute($query_params);
            $successmsg = "Votre animal est enregistré !";
            $_SESSION['animal'] = $pet_name;
        }catch(PDOException $ex){
            $errormsg = "Une erreur est survenue, essayez plus tard";
            die("Failed to run query: " . $ex->getMessage());
        }
    }
?>