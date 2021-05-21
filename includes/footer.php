<?php 

    //Name of the function and parameter
    
    function get_current_year()
    {
        echo date("Y");
    }

?>

<footer class="navbar-dark bg-dark">
    
    <p>Created by: Manuel Gutierrez</p>
    
    <p>CS485 | Copyright &copy; <?php get_current_year();?></p>
    
</footer>
