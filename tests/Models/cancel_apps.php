<?php   
    include('./db_connect.php');
    $datas= explode("/",$_GET['d']);
    var_dump($datas);
    $i = $_GET['i'];
    echo 'lolojiohioh'.$i;
    $query = 
    "UPDATE appointment SET canceled = 'y' 
    WHERE start LIKE :start 
    AND app_day LIKE :app_day 
    AND patients_ID = (SELECT ID FROM patients WHERE pet_name = :name AND owner_id = :owner)";

    $query_params = array('start' => $datas[0],
                          ':app_day' => $datas[1],
                          ':name' => $datas[2],
                          'owner' => intval($i));
                          try {
                            $stmt = $db->prepare($query);
                            $result = $stmt->execute($query_params);
                        }catch(PDOException $ex){
                            die("Failed to run query: " . $ex->getMessage());
                        }
?>