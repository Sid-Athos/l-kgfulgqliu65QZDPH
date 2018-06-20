<?php

    session_start();
    include('./Controllers/Functions/session_check.php');

    if(isset($_GET['page']))
        switch($_GET['page']):
            case 'register';
                include './Views/templates/html_top.html';
                include './Views/templates/log_reg_bar.php';
                include './Controllers/register.php';
                include './Views/templates/html_bottom.php';
            case 'login';
                include './Views/templates/html_top.html';
                include './Views/templates/log_reg_bar.php';
                include './Controllers/login.php';
                include './Views/templates/html_bottom.php';
                break;
            case 'home';
                include './Controllers/Functions/session_check.php';
                include './Views/templates/html_top.html';
                include './Views/templates/log_reg_bar.php';
                include './Controllers/home.php';
                include './Views/templates/html_bottom.php';
                break;
            case 'appointments';
                if(isset($_SESSION['type']))
                    switch($_SESSION['type']):
                        case 'vet';
                            include './Controllers/Functions/session_check.php';
                            include './Views/templates/html_top.html';
                            include './Views/templates/navbar.php';
                            include './Controllers/vets_appointments.php';
                            include './Views/templates/html_bottom.php';
                            break;
                        case 'client';
                            include './Controllers/Functions/session_check.php';
                            include './Views/templates/html_top.html';
                            include './Views/templates/navbar.php';
                            include './Controllers/clients_appointments.php';
                            include './Views/templates/html_bottom.php';
                            break;
                        default:
                            include './error/404/404.php';
                    endswitch;
                else {
                    include './Controllers/Functions/session_check.php';
                    include './Views/templates/html_top.html';
                    include './Views/templates/navbar.php';
                    include './Controllers/home.php';
                    include './Views/templates/html_bottom.html';
                }
            case 'patients':
            if(isset($_SESSION['type']))
                switch($_SESSION['type']):
                        case 'vet';
                            include './Controllers/Functions/session_check.php';
                            include './Views/templates/html_top.html';
                            include './Views/templates/navbar.php';
                            include './Controllers/vets_patients.php';
                            include './Views/templates/html_bottom.php';
                            break;
                        case 'client';
                            include './Controllers/Functions/session_check.php';
                            include './Views/templates/html_top.html';
                            include './Views/templates/navbar.php';
                            include './Controllers/clients_patients.php';
                            include './Views/templates/html_bottom.php';
                            break;
                        default:
                            include './error/404/404.php';
                    endswitch;

                else {
                    include './Controllers/Functions/session_check.php';
                    include './Views/templates/html_top.html';
                    include './Views/templates/navbar.php';
                    include './Controllers/home.php';
                    include './Views/templates/html_bottom.html';
                }
            case 'vets':
            if(isset($_SESSION['type']))
                switch($_SESSION['type']):
                    case 'vet';
                        include './Controllers/Functions/session_check.php';
                        include './Views/templates/html_top.html';
                        include './Views/templates/navbar.php';
                        include './Controllers/vets_management.php';
                        include './Views/templates/html_bottom.php';
                        break;
                    case 'client';
                        include './Controllers/Functions/session_check.php';
                        include './Views/templates/html_top.html';
                        include './Views/templates/navbar.php';
                        include './Controllers/vets_show.php';
                        include './Views/templates/html_bottom.php';
                        break;
                    default:
                        include './error/404/404.php';
                 endswitch;
            else {
                include './Controllers/Functions/session_check.php';
                include './Views/templates/html_top.html';
                include './Views/templates/navbar.php';
                include './Controllers/home.php';
                include './Views/templates/html_bottom.html';
            }
            case 'messages':
                include './Controllers/Functions/session_check.php';
                include './Views/templates/html_top.html';
                include './Views/templates/navbar.php';
                include './Controllers/clients_patients.php';
                include './Views/templates/html_bottom.php';
                break;
            default:
                include './error/404/404.php';
            endswitch;
    else {
        include './Views/html_top.html';
        include './Views/navbar.php';
        include './Controllers/home.php';
    }
    include "./Views/html_bottom.php";
?>
                
