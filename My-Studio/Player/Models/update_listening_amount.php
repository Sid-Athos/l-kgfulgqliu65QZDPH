<?php
    include('./db_connect.php');

    $query =
    "UPDATE musics set nb_listening = (nb_listening+1) WHERE title='Lolilol'";

    $query_params = null;

    try {
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
        echo "++";
    }catch(PDOException $ex){
        die("Failed to run query: " . $ex->getMessage());
    }
?>