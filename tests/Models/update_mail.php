<?php
    /* Settings compte (mail) */
    $query =
    "UPDATE users
    SET email = :mail
    WHERE ID = :ID";

    $query_params = array(":mail" => $email,
                        ":ID" => $_SESSION['ID']);
    try {
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
        $successmsg = "Adresse modifiée, la nouvelle est $email";
    }catch(PDOException $ex){
        $errormsg = "Cette adresse posséde déjà un compte chez nous";
    }
    if($_SESSION['role'] == 'vet'){
        $query =
        "UPDATE vets
        SET email = :mail
        WHERE users_ID = :ID";

        $query_params = array(":mail" => $email,
                            ":ID" => $_SESSION['ID']);
            try {
                $stmt = $db->prepare($query);
                $result = $stmt->execute($query_params);
                $successmsg = "Adresse modifiée, la nouvelle est $email";
            }catch(PDOException $ex){
                $errormsg = "Cette adresse posséde déjà un compte chez nous";
            }
    } else if($_SESSION['role'] == 'client') {
        $query =
        "UPDATE clients
        SET email = :mail
        WHERE users_ID = :ID";

        $query_params = array(":mail" => $email,
                            ":ID" => $_SESSION['ID']);
            try {
                $stmt = $db->prepare($query);
                $result = $stmt->execute($query_params);
                $successmsg = "Adresse modifiée, la nouvelle est $email";
            }catch(PDOException $ex){
                $errormsg = "Cette adresse posséde déjà un compte chez nous";
            }
    }
?>