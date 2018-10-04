<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
session_start();

include '../config/database.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Film Rentals</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src='../main.js'></script> 

    <!-- <link href="../css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="../css/index.css" rel="stylesheet">
  </head>
  <body>

    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="./index.php"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="../index.php">Home</a></li>
        <li><a href="./profile.php">Profile</a></li>
        <li class="active"><a href="#">Movies</a></li>
        <li><a href="./upload.php">Upload Movie</a></li>
      </ul>
      

     
       
      </ul>
    </div>
  </div>
</nav>
<?php


if(isset($_GET['id'])) {
    $delete_id = ($_GET['id']);
    $query = "DELETE FROM movies WHERE id='$delete_id'";
    $stmt = $connection->prepare($query);
    $stmt->execute();


    if($stmt) {
        ?>
              <div class="jumbotron">
                <div class="container text-center">
                  <p> Deleted Successfully</p> <span style="color:#FF905E" style="font-family:courier"><h1>99d Film Rentals</h1> </span>
                  <p> Go <a href="./movies.php">back</a></p>      
                </div>
              </div>
              
              <?php
    } else {
        echo "could not delete";
    }
}
?>