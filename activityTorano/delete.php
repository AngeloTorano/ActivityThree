<?php include "db.php"?>

<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content = "IE-edge">
        <meta name="viewportt" content="wid=device-width, intial-scale-=1.0">

        <title>DELETE</title>
    </head>
    <body>
      <?php
    if(isset($_GET['id'])) {
        $studentID = $_GET['id'];
        $query = "DELETE FROM IT2205 WHERE studentID='$studentID'";
        $result = mysqli_query($connection, $query);
        header("Location: index.php");
        }
      ?>
    </body> 
</html>