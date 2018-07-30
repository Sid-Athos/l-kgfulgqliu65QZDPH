<?php
    $query = 
    "SELECT vets_ID 
    FROM schedule 
    WHERE :h BETWEEN from_time
    AND to_time 
    AND working_day 
    LIKE DAYNAME(:date)
    ORDER BY RAND()
    LIMIT 1";
    $query_params = array(':h' => $start_time,
                        ':date' => $datas[2]);
        
        try {
            $stmt = $db->prepare($query);
            $result = $stmt->execute($query_params);
        }catch(PDOException $ex){
            $errormsg = "Une erreur est survenue, essayez plus tard";
            die("Failed to run query: " . $ex->getMessage());
        }
            $row = $stmt -> fetch();
            $id =  $row['vets_ID'];
            if(!empty($row)){
                $query = 
                    "SELECT 1
                    FROM appointment
                    WHERE start = :start
                    AND app_day = :date 
                    AND vets_ID = :ID
                    AND canceled = 'n'
                    LIMIT 1";
                $query_params = array(':start' => $start_time,  
                                    ':date' => $datas[2],
                                    ':ID' => $id);
                try {
                    $stmt = $db->prepare($query);
                    $result = $stmt->execute($query_params);
                }catch(PDOException $ex){
                    die("Failed to run query: " . $ex->getMessage());
                }
            $check = $stmt->fetch();

            if(empty($check)){
                $query = 
                "INSERT INTO appointment
                (ID,details,type,vet_init,start,app_day,canceled,vets_ID,patients_ID)
                VALUES
                (NULL,:details,:type,(SELECT vet_init FROM vets WHERE ID = :vet_ID),:start,:app_day,'n',:ID,:patients_ID)";

                $query_params = array(':details' => $details,
                                       ':type' => $datas[3],
                                       ':vet_ID' => $id,
                                       ':start' => $start_time,
                                       ':app_day' => $datas[2],
                                       ':ID' => $id,
                                       ':patients_ID' => $datas[0]);
                try {
                    $stmt = $db->prepare($query);
                    $result = $stmt->execute($query_params);
                    $check = true;
                }catch(PDOException $ex){
                    $errormsg = "Une erreur est survenue, essayez plus tard";
                    die("Failed to run query: " . $ex->getMessage());
                }
            } 
                if(!$check){
                    $errormsg = "Il n'y a pas de rendez-vous disponible pour cette combinaison date/heure";
                    include('../tests/Views/choose_hour_fail.php');
                } else {
                    $query = 
                        "SELECT last_name,first_name 
                        FROM vets 
                        WHERE ID = :id";
                    $query_params = array(':id' => $id);
        
        try {
            $stmt = $db->prepare($query);
            $result = $stmt->execute($query_params);
        }catch(PDOException $ex){
            $errormsg = "Une erreur est survenue, essayez plus tard";
            die("Failed to run query: " . $ex->getMessage());
        }
        $name = $stmt -> fetchAll();
                    $successmsg = "Le rendez vous à bien été pris pour le ".$datas[2]." à ".$start_time." pour ".$datas[1]." 
                    avec le docteur ".$name[0]['last_name']." ".$name[0]['first_name'];
                }
            

            }
?>