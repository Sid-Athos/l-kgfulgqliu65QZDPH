<?php>
    $query = "
        SELECT
        sent_by, date, content
        FROM messages
        WHERE
        sent_to = (SELECT email FROM users WHERE ID = :ID)
        ORBER BY date";
        $query_params = array(':ID' => $_SESSION['ID']);
        try {
            $stmt = $db->prepare($query);
            $result = $stmt->execute($query_params);
        }catch(PDOException $ex){
            die("Failed to run query: " . $ex->getMessage());
        }
?>