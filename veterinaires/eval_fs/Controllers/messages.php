<?php
session_start();

include_once("./Models/db_connect.php");
include('./Controllers/Functions/PHP/messages.php');


switch(isset($_POST['messages'])):
    case 'sent':
    case 'received':
    case 'write':
    break;
    default:
endswitch;
var_dump($_SESSION);
if(isset($_SESSION['ID'])){
    include('./Views/templates/vets_navbar.php');
} else {
    include('./Views/templates/clients_navbar.php');
}
include('./Views/templates/html_top.php')
?>