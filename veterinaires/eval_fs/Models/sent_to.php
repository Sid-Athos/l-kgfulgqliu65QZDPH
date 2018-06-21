<?php>
    $query = "
        SELECT
        sent_by, dates, content
        FROM messages
        WHERE
        sent_to = (SELECT email FROM users WHERE ID = :ID)
        ORDER BY date";
        $query_params = array(':ID' => $id);
        try {
            $stmt = $db->prepare($query);
            $result = $stmt->execute($query_params);
        }catch(PDOException $ex){
            die("Failed to run query: " . $ex->getMessage());
        }
?>