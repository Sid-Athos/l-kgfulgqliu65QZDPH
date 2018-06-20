<?php
    $query = "
        SELECT
        ID
        FROM users
        WHERE
        email = :email
        AND 
        password = :password
        AND
        connected != 'y'";
        $query_params = array(':email' => $email,
                                ':password' => $password);
        try {
            $stmt = $db->prepare($query);
            $result = $stmt->execute($query_params);
                
        }catch(PDOException $ex){
            die("Failed to run query: " . $ex->getMessage());
        }
    ?>