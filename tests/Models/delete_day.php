<?php
    include('./db_connect.php');
    
    $q = $_GET['q'];
    $query = "DELETE FROM schedule
            WHERE working_day = :working_day";
    $query_params = array(':working_day' => $q);
    try{
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
        $successmsg = "Requête executée";
        echo "<div class='alert alert-danger alert-dismissible fade show'style='background:#decba4;text-align:center;margin-left:260px;max-height:80px;font-size:13px;width:180px;color:#FFFFFF;border:0.5px solid #decba4'>
        ".$successmsg."<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
        <span aria-hidden='true'>&times;</span>
      </button></div>";
    } catch (PDOException $ex) {
        die("Failed to run query: " . $ex->getMessage());
    }
?>  