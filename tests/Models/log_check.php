<?php
    $query = 
    "SELECT ID, role FROM users 
    WHERE email = :email 
    AND password = :password";
        $query_params = array(':email' => $email,
                              ':password' => $password);
        try {
            $stmt = $db->prepare($query);
            $result = $stmt->execute($query_params);
        }catch(PDOException $ex){
            die("Failed to run query: " . $ex->getMessage());
        }
        $row = $stmt->fetch();
        if(!empty($row)){
        $query =
        "SELECT last_name, first_name
        FROM  vets
        WHERE users_ID = :ID
        UNION
        SELECT last_name, first_name
        FROM clients
        WHERE users_ID = :ID";

        $query_params = array(":ID" => $row['ID']);
        try {
            $stmt = $db->prepare($query);
            $result = $stmt->execute($query_params);
        }catch(PDOException $ex){
            die("Failed to run query: " . $ex->getMessage());
        }

        $row1 = $stmt ->fetchAll();
            if(isset($row1)){
                $_SESSION['greeting_msg'] = "Bonjour ".$row1[0]['first_name']." ".$row1[0]['last_name']." =)";
            }
        }
?>