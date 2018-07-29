<?php
session_start();
var_dump($_POST);
include('../tests/Controllers/session_check.php');
include("../tests/Models/db_connect.php");
include('../tests/Controllers/Functions/PHP/messages.php');
include('../tests/Models/actual_date.php');
$actual_date = get_date($db);
include('../tests/Models/sent_by.php');
$outbox_rows = $stmt->fetchAll();

if($_SESSION['role'] == 'vet'){
    include('../tests/Views/html_top_vets.php');
}else if($_SESSION['role'] == 'client') {
    include('../tests/Views/html_top_clients.php');
}

if(isset($_POST['msg']))
switch($_POST['msg']):
    case($_POST['msg'] == 'convos'):
        include('../tests/Models/convos.php');
        $msg_rows = $stmt->fetchAll();
        include('../tests/Views/show_convos.php');
        unset($msg_rows);
    break;
    case($_POST['msg'] == 'outbox'):
        include('../tests/Views/show_outbox.php');
        unset($outbox_rows);
    break;
    case($_POST['msg'] == 'write'):
        if($_SESSION)
        switch($_SESSION['role']):
            case 'vet':
                include('../tests/Models/contact_all.php');
                $contacts_rows = $stmt->fetchAll();
                include('../tests/Views/msg_form.php');
                unset($contacts_rows);
            break;
            case 'client':
                include('../tests/Models/contacts.php');
                $contacts_rows = $stmt->fetchAll();
                include('../tests/Views/msg_form.php');
                unset($contacts_rows);
            break;
            default:
    endswitch;
    break; 
    default:
endswitch;
else {
    include('../tests/Views/show_outbox.php');
}

if(isset($_POST['target']))
switch(isset($_POST['target'])):
    case(isset($_POST['target'])):
    include('../tests/Models/insert_message.php');
    $successmsg = 'Message envoyé!';
    include('../tests/Controllers/Functions/PHP/messages.php');
    break; 
    default:
endswitch;
?>