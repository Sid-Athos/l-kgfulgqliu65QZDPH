<?php
    $query = "
        SELECT
        1
        FROM clients
        WHERE
        first_name = :first_name
        AND last_name = :last_name
        AND email = :email";
        $query_params = array(':first_name' => $first_name,
        ':last_name' => $last_name,
        ':email' => $email);
        try {
            $stmt = $db->prepare($query);
            $result = $stmt->execute($query_params);
        }catch(PDOException $ex){
            die("Failed to run query: " . $ex->getMessage());
        }
?>