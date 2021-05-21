
<?php
    session_start();
?>

<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">

    <title>The American Restaurant</title>
    <meta name="description" content="This is the official website for The American Restaurant">
    <meta name="author" content="The American Restaurant">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="css/styles.css?1.0">

    <script src = "https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js">>

    </script>
    <![endif]-->
</head>

<body onload="greeting()">

        <div class="header">

            <?php 

                include 'includes/header.php';

            ?>
        </div>



	<div class="container">
		<?php
 
        if(isset($_GET['msg']) && $_GET['msg'] == 'thankyou'){
            // echo $_GET['msg'];
            // If GET lastid
            if (isset($_GET['last_id']) && !empty($_GET['last_id'])){
                // echo $_GET['last_id'];
 
                $host = "localhost";
                $username = "root";
                $password = "";
                $dbname = "newsletter";
 
                // Create connection
                $conn = new mysqli($host, $username, $password, $dbname);
                if ($conn->connect_error)
                {
                    die("Connection error: " . $conn->connect_error);
                }
                else
                {
                    $id = $_GET['last_id'];
                    $query = "SELECT *
                             FROM entries
                             WHERE id = '$id'";
 
                    $result = mysqli_query($conn,$query);
 
                    // Get values from the query
                    while($row = mysqli_fetch_assoc($result)){
                        $fName = $row['fName'];
                        $lName = $row['lName'];
                        $email = $row['email'];
                    }
                    echo "<p>Thank you for your subscription, $fName $lName!</p>";
                    echo "<p>You will be receiving emails to: $email</p>";
                    echo "<p><a href='newsletter.php'>Enter another subscription!</a></p>";
                }
            }
        }
        else
        {
    ?>
        <h1>The American Restaurant Newsletter</h1>
        <p id="demo_greeting"></p>
        <p>Welcome to our Newsletter. Please enter your informtion and you will automatically enter to receive the latest news from our restaurant.</p>
        <form name="NewsletterForm" action="process_newsletter.php" method="POST">
            <div class="form-group">
                <label for="Name">First Name</label>
                <input type="text" class="form-control" name="fName" value="" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="Last">Last Name</label>
                <input type="text" class="form-control" name="lName" value="" placeholder="Enter your last name">
            </div>
            <div class="form-group">
                <label for="Email">Email address</label>
                <input pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email" type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <input type = "hidden" name = "session_id" value = '<?php echo $_COOKIE['PHPSESSID'];?>'>
                <button type="reset" value="Clear Form" class="btn btn-primary">Clear Form</button>
                <button type="submit" name="Submit" class="btn btn-primary">Submit</button>
            </p>
        </form>
    <?php
        }
    ?>
	</div>

  <div class="footer">
		<?php include 'includes/footer.php';?>
	</div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    
    </script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    
    </script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    
    </script>
    
    <script src="js/scripts.js?v=1.0">
    
    </script>
    
</body>
</html>
