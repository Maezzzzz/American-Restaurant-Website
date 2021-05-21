<?php
//debugging
/*
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
*/
?>


<?php

    $randomN=rand();
    setcookie("page","dynamic");
    setcookie("token",$randomN, time()+3600,"/");

    if(isset($_GET['page']))
    {
        
        switch($_GET['page'])
        {
                
            case 'dynamic1':
                include('includes/inc_dynamic1.php');
                break;
            case 'dynamic2':
                include('includes/inc_dynamic2.php');
                break;
            default:
                include('includes/inc_dynamic1.php');
                break;
                
        }
        
    }

?>