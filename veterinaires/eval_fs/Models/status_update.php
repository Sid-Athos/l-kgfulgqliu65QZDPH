<?php  
    if(!isset($_SESSION['ID'])){
        $query = "
        Update
        users
        SET
        connected = 'y'
        WHERE
        email = :email
        AND
        connected = 'n'";
        $query_params = array(':email' => $email);
        try {
            $stmt = $db->prepare($query);
            $result = $stmt->execute($query_params);
                
        }catch(PDOException $ex){
            die("Failed to run query: " . $ex->getMessage());
        }
    } else {
        $query = "
        Update
        users
        SET
        connected = 'n'
        WHERE
        ID = :ID
        AND
        connected = 'y'";
        $query_params = array(':ID' => $_SESSION['ID']);
        try {
            $stmt = $db->prepare($query);
            $result = $stmt->execute($query_params);
                
        }catch(PDOException $ex){
            die("Failed to run query: " . $ex->getMessage());
        }
    }
?>