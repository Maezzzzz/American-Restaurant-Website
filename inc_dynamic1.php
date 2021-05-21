<?php

setcookie("page", "dynamic1")

?>


<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">

    <title>The American Restaurant</title>
    <meta name="description" content="The American Restaurant Official Website">
    <meta name="author" content="Paola Garcia">
    <!-- Responsive viewport meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css?1.0">



    <script link <!--[if lt IE 9]>
   
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js">
    
    </script>
    
 <![endif]-->
    
</head>

<body>

    <div class="header">

        <?php 

                include 'includes/header.php';

            ?>

    </div>

    <div class="container">

        <h1>Page dynamic 1</h1>
        <p>This is dynamic page #1</p>

    </div><!-- ./containter -->


    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="js/dynamic-menu.js"></script>
</body>

</html>
