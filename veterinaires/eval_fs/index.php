<?php
    if(isset($_GET['page']))
    switch($_GET['page']):
        case 'Inscription';
                include './Controllers/register.php';
                break;
            case 'Login';
                include './Controllers/login.php';
                break;
            case 'Home';    
                include './Controllers/home.php';
                break;
            case 'Members_lobby':
                include './Controllers/members_lobby.php';
                break;
            case 'appointments';
                if(isset($_SESSION['type']))
                    switch($_SESSION['type']):
                        case 'vet';
                            include './Views/templates/html_top.php';
                            include './Views/templates/navbar.php';
                            include './Controllers/vets_appointments.php';
                            break;
                        case 'client';
                            include './Views/templates/html_top.php';
                            include './Views/templates/navbar.php';
                            include './Controllers/clients_appointments.php';
                            break;
                        default:
                            include './error/404/404.php';
                            include './Views/templates/html_top.php';
                    endswitch;
                else {
                    include './Views/templates/html_top.php';
                    include './Views/templates/navbar.php';
                    include './Controllers/home.php';
                }
            case 'patients':
            if(isset($_SESSION['type']))
                switch($_SESSION['type']):
                        case 'vet';
                            include './Views/templates/html_top.php';
                            include './Views/templates/navbar.php';
                            include './Controllers/vets_patients.php';
                            break;
                        case 'client';
                            include './Views/templates/html_top.php';
                            include './Views/templates/navbar.php';
                            include './Controllers/clients_patients.php';
                            break;
                        default:
                            include './error/404/404.php';
                    endswitch;

                else {
                    include './Views/templates/html_top.php';
                    include './Views/templates/navbar.php';
                    include './Controllers/home.php';
                }
            case 'vets':
            if(isset($_SESSION['type']))
                switch($_SESSION['type']):
                    case 'vet';
                        include './Views/templates/html_top.php';
                        include './Views/templates/navbar.php';
                        include './Controllers/vets_management.php';
                        break;
                    case 'client';
                        include './Views/templates/html_top.php';
                        include './Views/templates/navbar.php';
                        include './Controllers/vets_show.php';
                        break;
                    default:
                        include './error/404/404.php';
                        include './Views/templates/html_top.php';
                 endswitch;
            else {
                include './Views/templates/html_top.php';
                include './Views/templates/navbar.php';
                include './Controllers/Home.php';
            }
            case 'messages':
                include './Controllers/session_check.php';
                include './Views/templates/html_top.php';
                include './Views/templates/navbar.php';
                include './Controllers/clients_patients.php';
                break;
            default:
                include './error/404/404.php';
                include './Views/templates/html_top.php';
            endswitch;
    else {
        include './Views/templates/html_top.php';
        include './Views/templates/navbar.php';
        include './Controllers/Home.php';
    }
    include "./Views/templates/html_bottom.html";
?>
                
