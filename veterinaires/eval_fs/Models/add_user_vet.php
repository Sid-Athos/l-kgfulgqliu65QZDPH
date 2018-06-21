<?php
$query = "
INSERT INTO users (
    ID,
    password,
    email
) VALUES (
    :ID,
    :password,
    :email)";
// Security measures
$query_params = array(
':ID' => NULL,
':password' => $password,
':salt' => $salt,
':email' => $email);
try {
$stmt = $db->prepare($query);
$result = $stmt->execute($query_params);
$check = true;
}catch(PDOException $ex){
$check =false;
}
?>