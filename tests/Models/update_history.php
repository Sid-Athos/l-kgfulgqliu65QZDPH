<?php
    include('./db_connect.php');
    var_dump($_GET);
    $a = $_GET['d'];
    $o = $_GET['o'];
    $h = $_GET['h'];
    
    $query =
    "UPDATE patients
    SET history = :history
    WHERE pet_name = :pet_id
    AND owner_id = :owner_id";

    $query_params = array(":history" => $h,
                         ":pet_id" => $a,
                         ":owner_id" => $o);
                         try {
                            $stmt = $db->prepare($query);
                            $result = $stmt->execute($query_params);
                            $successmsg = "Message envoyé";
                        echo "<div class='alert alert-danger alert-dismissible fade show'style='background:#decba4;text-align:center;margin-left:390px;max-height:80px;font-size:13px;width:180px;color:#FFFFFF;border:0.5px solid #decba4'>
                        ".$successmsg."<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                      </button></div>";
                        }catch(PDOException $ex){
                            die("Failed to run query: " . $ex->getMessage());
                        }
?>