<?php
   ini_set('display_errors', 1);
   ini_set('display_startup_errors', 1);
   error_reporting(E_ALL);
 
   //DB Variables
   $host = "localhost"; // You may just use localhost or 127.0.0.1
   $username = "root";
   $password = "";
   $dbname = "americanrest";
       // Create connection
       $conn = new mysqli($host, $username, $password, $dbname);
 
?>

<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">

    <title>The American Restaurant - Form</title>
    <meta name="description" content="The American Restaurant Official Website">
    <meta name="author" content="Paola Garcia">
    <!-- Responsive viewport meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css?1.0">



    <!--[if lt IE 9]>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
 <![endif]-->
</head>

<body onload="greeting()">
    <!-- https://getbootstrap.com/docs/4.0/components/forms/ -->

    <div class="header">
        <?php include 'includes/header.php';?>
    </div>

    <div class="container">

        <h1>The American Restaurant Menu</h1>
        <p><span id="demo_greeting"></span> Welcome to our restaurant's menu. Please choose from any of the following categories to begin:</p>

        <div class="row">
            <div class="col" style="margin: auto; max-width:30%;">
                <form name="MenuForm" action="./menu.php" method="GET">
                    <button type="submit" name="menu_category" class="btn btn-primary btn-block" value="SoupsSalads">Soups and Salads</button>
                    <button type="submit" name="menu_category" class="btn btn-primary btn-block" value="Starters">Starters</button>
                    <button type="submit" name="menu_category" class="btn btn-primary btn-block" value="Entrees">Entrees</button>
                    <button type="submit" name="menu_category" class="btn btn-primary btn-block" value="Beverages">Beverages</button>
                </form>
            </div>
        </div>
        <br />

        <?php
   if ($conn->connect_error){
       die("Connection error: " . $conn->connect_error);
   } else {
       if (isset($_GET['menu_category'])) {
           switch ($_GET['menu_category']) {
               case 'SoupsSalads':
                   $category = "Soups and Salads";
                   echo "<h2>". $category . "</h2>";
                   break;
               case 'Starters':
                   $category = "Starters";
                   echo "<h2>". $category . "</h2>";
                   break;
               case 'Entrees':
                   $category = "Entrees";
                   echo "<h2>". $category . "</h2>";
                   break;
               case 'Beverages':
                   $category = "Beverages";
                   echo "<h2>". $category . "</h2>";
                   break;
               default:
                   $category = "";   
                   echo "Please try again!";
                   break;
           }
       } else {
           $category = "";
       }
        $query = "SELECT *
                  FROM menu_items
                  WHERE category = '$category'
                  ORDER BY name ASC";
      
        $result = mysqli_query($conn,$query);
 
       // Get values from the query
       while($row = mysqli_fetch_assoc($result)){
           $name = $row['name'];
           $subcategory = $row['subcategory'];
           $description = $row['description'];
           $image_url = $row['image_url'];
           $price = $row['price'];
 
           echo "<div class='row'>";
           echo "<div class='col-sm'>";
               echo "<img src=./assets/images/menu/" . $image_url . " width='300' height='auto' />";
           echo "</div>";
           echo "<div class='col-sm'>";
           echo "<div class='menu_item'>";
               echo "<h3> " . $name . "</h3>";
               echo "<p class='description'> " . $description . "</p>";
               echo "<p class='subcategory'> " . $subcategory . "</p>";
               echo "<p class='price'> " . $price . "</p>";
 
           echo "</div></div></div>";
       }
   }
   mysqli_close($conn);
   ?>

    </div><!-- ./container -->


    <div class="footer">
        <?php include 'includes/footer.php';?>
    </div>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="js/scripts.js?v=1.0"></script>
    <script src="js/dynamic-menu.js"></script>
</body>

</html>
