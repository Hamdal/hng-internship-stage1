<!doctype html>
<?php
  ini_set('display_errors', '1');
  include_once ('dbconnect.php'); // connecting to database

  $query = "SELECT * FROM intern_info";
  $result = mysqli_query($connection, $query)
    or die('Error Connecting to database');
    
  $internInfo = mysqli_fetch_array($result);
?>

<html>
  <head>
    <title>Intern info</title>
  </head>
  <body>
    <a href="index.php">Go back</a>
    <h3 id="firstName"> First name: 
      <?php
        echo $internInfo['first_name'];
      ?>
    </h3>
    <h3 id="lastName"> Last name: 
      <?php
        echo $internInfo['last_name'];
      ?>
    </h3>
  </body>
</html>
