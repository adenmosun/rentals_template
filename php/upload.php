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
        <li class="active"><a href="#">Upload Movie</a></li>
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











<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
session_start();

include '../config/database.php';


if(isset($_POST["submit"]))
{
    $target_dir = "/";
    $file = $_FILES['fileToUpload']['name'];
    $target_file = $target_dir . $file;
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES['fileToUpload']['tmp_name']);
        if($check !== false) {
            echo "Hey, upload successful!  File is an video image - " . $check['mime'] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an video image.";
            $uploadOk = 0;
        }
}

if (isset($_POST['title']) && isset($_POST['year']) && isset($_POST['genre']) && isset($_POST['ratings'])) {
  try{
    
    $query = "INSERT INTO movies (title, year, genre, ratings, created_at) VALUES (?,?,?,?,?)";
    $stmt = $connection->prepare($query);
    

    $title = $_POST['title'];
    $year = $_POST['year'];
    $genre = $_POST['genre'];
    $ratings = $_POST['ratings'];
        $created_at = date('Y-m-d H-i-s');



    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':year', $year);
    $stmt->bindParam(':genre', $genre);
    $stmt->bindParam(':genre', $ratings);
    $stmt->bindParam(':created_at', $created_at);

    if($stmt->execute([$title, $year, $genre, $created_at])){
      
      $_SESSION['title'] = $title;
      // header("Location: ./movies.php");
      ?>
              <div class="jumbotron">
                <div class="container text-center">
                  <p> Your upload has been saved</p> <span style="color:#FF905E" style="font-family:courier"><h1>99d Film Rentals</h1> </span>
                  <p> Go <a href="./movies.php">back</a></p>      
                </div>
              </div>
              
              <?php
      exit();


    }else{
      echo '<div class= "alert alert-danger">Unable to save</div>';
    }
  }
  catch(Exception $e) {
    echo $e->getMessage();
  }
}
else{
  session_destroy();
}

?>







<form class="form-horizontal" id="login_form" action="upload.php"  enctype="multipart/form-data" method="post">
<fieldset>

<header>Upload Movies</header>
<div class="form-group">
  <label class="col-md-4 control-label" for="title">Title</label>  
  <div class="col-md-5">
  <input name="title" type="text" placeholder="Enter movie title here" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="year">Year</label>  
  <div class="col-md-5">
  <input id="year" name="year" type="text" placeholder="Enter movie year here" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="genre">Genre</label>  
  <div class="col-md-5">
  <input id="genre" name="genre" type="text" placeholder="Enter movie genre here" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="ratings">Ratings</label>  
  <div class="col-md-5">
  <input id="ratings" name="ratings" type="text" placeholder="1 - 5, 5 - highest, 1 - lowest" class="form-control input-md" required="">
    
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
