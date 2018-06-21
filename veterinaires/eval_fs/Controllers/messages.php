<?php
session_start();
var_dump($_SESSION);
include('./Controllers/Functions/PHP/messages.php');
include('./Views/templates/html_top_msg.php');
include("./Models/db_connect.php");
if($_SESSION['role'] == 'vet'){
    include('./Views/templates/vets_navbar.php');
}else if($_SESSION['role'] == 'client') {
    include('./Views/templates/clients_navbar.php');
}
include('./Views/templates/messages_menu.php');

if(!empty($_POST['msg']))
switch($_POST['msg']):
    case($_POST['msg'] == 'Convos'):
        include('./Models/convos.php');
        $msg_rows = $stmt->fetchAll();
        include('./Views/templates/show_convos.php');
        unset($msg_rows);
    break;
    case($_POST['msg'] == 'Outbox'):
        include('./Models/sent_by.php');
        $outbox_rows = $stmt->fetchAll();
        include('./Views/templates/show_outbox.php');
        unset($outbox_rows);
    break;
    case($_POST['msg'] == 'Write'):
        include('Models/contacts.php');
        $contacts_rows = $stmt->fetchAll();
        include('./Views/templates/msg_form.php');
    break; 
    default:
endswitch;
if(isset($_POST['target']))
switch(isset($_POST['target'])):
    case(isset($_POST['target'])):
        var_dump($_POST);
        include('./Models/insert_message.php');
        echo 'message envoyé!';
    break; 
    default:
endswitch;
include('./Views/templates/html_bottom.html');
?>