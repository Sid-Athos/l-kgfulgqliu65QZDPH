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
                case 'Patients':
                        include '../tests/Controllers/patients.php';
                        break;
                case 'Add_collab':
                        include '../tests/Controllers/collaborators.php';
                    break;
                case 'Messages':
                        include '../tests/Controllers/messages.php';
                    break;
                case 'Rest':
                        include '../tests/Controllers/work_days.php';
                    break;
                case 'Appointments':
                        include '../tests/Controllers/appointments.php';
                    break;
                case 'Settings';
                        include '../tests/Controllers/settings.php';
                    break;
                default:
                include '../tests/Controllers/Lobby.php';
                
            endswitch;
        else {
            include '../tests/error/404/404.php';
    }
?>
                
