<?php
var_dump($_POST);
session_start();
include('./Views/templates/html_top_msg.php');
include("./Models/db_connect.php");
if($_SESSION['role'] == 'vet'){
    include('./Views/templates/vets_navbar.php');
} else {
    include('./Views/templates/clients_navbar.php');
}
include('./Views/templates/messages_menu.php');
$id = $_SESSION['ID'];

if(!empty($_POST['msg']))
switch($_POST['msg']):
    case($_POST['msg'] == 'Convos'):
        require_once('./Models/convos.php');
        $msg_rows = $stmt->fetchAll();
        include('./Views/templates/show_outbox.php');
        unset($msg_rows);
        break;
    case($_POST['msg'] == 'Outbox'):
        include('./Models/sent_by.php');
        $msg_rows = $stmt->fetchAll();
        include('./Views/templates/show_outbox.php');
        unset($msg_rows);
        break;
    case($_POST['msg'] == 'Write'):
        include('Models/contacts.php');
        $contacts_rows = $stmt->fetchAll();
        include('./Views/templates/msg_form.php');
    break;  
        default:
    endswitch;
include('./Views/templates/html_bottom.html');
?>