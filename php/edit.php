<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
session_start();

include '../config/database.php';


if (!isset($_SESSION['id'])) {
        $query = "UPDATE movies SET title ='$title', year ='$year', genre ='$genre', 
        created_at ='$created_at'  WHERE id = ':id' ";

        $stmt = $connection->prepare($query);

        $stmt->bindParam(':id', $_SESSION['id']);
        $stmt->bindParam(':title', $_POST['title']);
        $stmt->bindParam(':year', $_POST['year']);
        $stmt->bindParam(':genre', $_POST['genre']);


        if($stmt->execute()){
          header("Location: ./movies.php");

          exit();
        } else {
          echo "<div class='alert alert-danger'>Error: </div>";
        }
}

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
        <li><a href="./movies.php">Movies</a></li>
        <li class="active"><a href="#">Edit Movie</a></li>
      </ul>
      

      <ul class="nav navbar-nav navbar-right">
        <button class="loginbtn">
          <?php if(isset($_SESSION['name'])): ?>
            <div align="right" class="active"><a href="../index.php">Log out</a></div>
            <h1>Welcome, <?php echo $_SESSION ['name']; ?>!</h1>

            <?php else: ?>
            <div align="right" class="active"><a href="#">Login</a></div>
          <?php endif; ?>
          </button>

      </ul>
    </div>
  </div>
</nav>









<form class="form-horizontal" id="login_form" action="edit.php<?php echo '?id='.$id; ?>"   enctype="multipart/form-data" method="post">
<fieldset>

<header>Edit Movies</header>
<div class="form-group">
  <label class="col-md-4 control-label" for="title">Title</label>  
  <div class="col-md-5">
  <input name="title" type="text" placeholder="Enter movie title here" class="form-control input-md" required value=<?php echo $row['title']; ?>>
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="year">Year</label>  
  <div class="col-md-5">
  <input id="year" name="year" type="text" placeholder="Enter movie year here" class="form-control input-md" required value=<?php echo $row['year']; ?>>
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="genre">Genre</label>  
  <div class="col-md-5">
  <input id="genre" name="genre" type="text" placeholder="Enter movie genre here" class="form-control input-md" required value=<?php echo $row['genre']; ?>>
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label"></label>  
  <div class="col-md-5">Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">

    
  </div>
</div>
    


<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button action="" id="submit" name="submit" type="submit" class="btn btn-primary">Submit</button>
  </div>
</div>



</fieldset>
</form>



 <footer class="container-fluid text-center">
  <p>99d Films, Lagos</p>
  <p>made with care</p>
</footer>
  </body>
</html>
