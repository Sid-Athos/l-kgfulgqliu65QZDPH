<?php
    if(isset($_GET['page']))
    switch($_GET['page']):
            case 'Register';
                include '../tests/Controllers/register.php';
                break;
            case 'Login';
                include '../tests/Controllers/login.php';
                break;
            case 'Logout';
                include '../tests/Controllers/logout.php';
                break;
            case 'Lobby';    
                include '../tests/Controllers/lobby.php';
                break;
            /* case 'Tracking';
                if(isset($_SESSION['type']))
                    switch($_SESSION['type']):
                        case 'vet';
                            include '../Views/templates/html_top.php';
                            include '../Views/templates/navbar.php';
                            include '../Controllers/vets_appointments.php';
                            break;
                        case 'client';
                            include '../Views/templates/html_top.php';
                            include '../Views/templates/navbar.php';
                            include '../Controllers/clients_appointments.php';
                            break;
                        default:
                            include '../error/404/404.php';
                            include '../Views/templates/html_top.php';
                    endswitch;
                else {
                    include '../Views/templates/html_top.php';
                    include '../Views/templates/navbar.php';
                    include '../Controllers/home.php';
                }*/
            case 'Patients':
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
                case 'Add_collab':
                            include './Controllers/collaborators.php';
                    break;
                case 'Messages':
                    include './Controllers/messages.php';
                    break;
                case 'Rest':
                    include '../tests/Controllers/work_days.php';
                    break;
                case 'Appointments':
                    include '../tests/Controllers/appointments.php';
                break;
                case 'New_appointment':
                    include './Controllers/new_appointment.php';
                break;
                default:
                include '../tests/Controllers/Lobby.php';
                
            endswitch;
            else {
                include '../tests/error/404/404.php';
        }
?>
                
