<?php   
    include('./db_connect.php');
    $datas= explode("/",$_GET['d']);
    $i = $_GET['i'];
    $query = 
    "UPDATE appointment SET canceled = 'y' 
    WHERE start LIKE :start 
    AND app_day LIKE :app_day 
    AND patients_ID = (SELECT ID FROM patients WHERE pet_name = :name AND owner_id = :owner ORDER BY RAND() LIMIT 1)";

    $query_params = array('start' => $datas[0],
                          ':app_day' => $datas[1],
                          ':name' => $datas[2],
                          'owner' => intval($i));
                          try {
                            $stmt = $db->prepare($query);
                            $result = $stmt->execute($query_params);
                            $msg = "Rendez-vous annulé";
                            echo "<div class='alert alert-danger alert-dismissible fade show'style='background:#decba4;text-align:center;margin-left:260px;max-height:80px;font-size:13px;width:180px;color:#FFFFFF;margin-top:40px;border:0.5px solid #decba4'>
                                {$msg}<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                            </button></div>";
                        }catch(PDOException $ex){
                            die("Failed to run query: " . $ex->getMessage());
                        }
?>