<?php

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "newsletter";
 
    // Create connection
    $conn = new mysqli($host, $username, $password, $dbname);
 
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
 
        $fName = $_POST['fName'];
        $lName = $_POST['lName'];
        $email = $_POST['email'];
 
        if (isset($_POST['Submit'])) {
       
            $query  = "INSERT INTO entries (fName,lName,email)
                       VALUES ('$fName','$lName','$email')";  
 
            mysqli_query($conn, $query);
 
        }
 
        $last_id = mysqli_insert_id($conn);
 
        mysqli_close($conn);
 
        header('Location: newsletter.php?msg=thankyou&last_id=' . $last_id);
 
    }
 
    // echo "$last_id";
 
?>