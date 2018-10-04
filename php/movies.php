<?php
header('Content-type: text/html; charset=utf-8');
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
session_start();

include '../config/database.php';


$query = 'SELECT * FROM movies ORDER BY id DESC';
$stmt = $connection->prepare($query);
$stmt->execute();


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
      

     
       <ul class="nav navbar-nav navbar-right">
        <button class="loginbtn">
          <?php if(isset($_SESSION['name'])): ?>
            <div align="right" class="active"><a href="../index.php">Log out</a></div>
            <h1>Welcome, <?php echo $_SESSION ['name']; ?>!</h1>

            <?php else: ?>
            <div align="right" class="active"><a href="./login.php">Login</a></div>
          <?php endif; ?>
          </button>

      </ul>
    </div>
  </div>
</nav>


<div class="table-responsive">
<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Year</th>
      <th scope="col">Genre</th>
      <th scope="col">Ratings</th>
      <th scope="col">Created_at</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>


    <?php
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)):
      ?>

    <tr>
      <td></td>
      <td>
        <?php echo htmlspecialchars($row['title'],
        ENT_HTML5, 'UTF-8') ?>
      </td>
      <td>
        <?php echo htmlspecialchars($row['year'],
        ENT_HTML5, 'UTF-8') ?>
      </td>
      <td>
        <?php echo htmlspecialchars($row['genre'],
        ENT_HTML5, 'UTF-8') ?>
      </td>
      <td>
        <?php echo htmlspecialchars($row['ratings'],
        ENT_HTML5, 'UTF-8') ?>
      </td>
      <td>
        <?php echo htmlspecialchars($row['created_at']) ?>
      </td>
      <td><a href='edit.php?id=".$row['id']."'>Edit</a></td>
      <td><a href='delete.php?id=".$row['id']."'>Delete</a></td>
    </tr>
  <?php endwhile ?>
  </tbody>
</table>

</div>




 <footer class="container-fluid text-center">
  <p>99d Films, Lagos</p>
  <p>made with care</p>
</footer>
  </body>
</html>


<script type="text/javascript">
$(document).ready(function(){

 fetch_data();

 function fetch_data()
 {
  $.ajax({
   url:"fetch.php",
   success:function(data)
   {
    $('tbody').html(data);
   }
  })
 }
</script>
