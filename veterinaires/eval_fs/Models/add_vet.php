<?php
        $query = "
        INSERT INTO vets (
            ID,
            last_name,
            first_name,
            vet_init,
            email,
            users_ID
        ) VALUES (
            :ID,
            :last_name,
            :first_name,
            :vet_init,
            :email,
            (SELECT ID FROM users WHERE email = :email))";
        $query_params = array(
            ':ID' => NULL,
            ':email' => $email,
            ':last_name' => $last_name,
            ':first_name' => $first_name,
            ':vet_init' => $vet_init);
            try {
                $stmt = $db->prepare($query);
                $result = $stmt->execute($query_params);
            }catch(PDOException $ex){
                die("Failed to run query: " . $ex->getMessage());
            }
            
?>