<?php
header('Content-type: text/html; charset=utf-8');
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
session_start();

include "../config/database.php";



if(!isset($_SESSION['name'])){
    header('location: login.php');
    exit();
}


	if  (!isset($_SESSION['id']) || !isset($POST['city'])) {
		if (!isset($_SESSION['id'])) {
			try{

				$query = "SELECT id FROM users WHERE email=:email";
				$stmt = $connection->prepare($query);
				$stmt->bindParam(':email', $_SESSION['email']);
				$stmt->execute();
				$num = $stmt->rowCount();



				if($num > 0){
					$row = $stmt->fetch();
					$_SESSION['id'] = $row['id'];
					header("Location: ./profile.php");
					exit();
				}
			} catch(PDOException $e) {
              echo $e->getMessage();
	         }
		}
	} 

	else {
		try {


			$id = $_SESSION['id'];
			$city = $_POST['city'];
			$created_at = date('Y-m-d H:i:s');

			$query = "SELECT * FROM profiles WHERE user_id=:id";

			$stmt = $connection->prepare($query);
			$stmt->bindParam(':id', $id);
			$stmt->execute();
			$num = $stmt->rowCount();

			if($num == 0){
				$query = "INSERT INTO profiles SET user_id=:id, city=:city, created_at=:created_at";

				$stmt = $connection->prepare($query);


				$stmt->bindParam(':id', $id);
				$stmt->bindParam(':city', $city);
				$stmt->bindParam(':created_at', $created_at);



				if ($stmt->execute()) {
					header("Location: ./profile.php");
					exit();
				} else {
					echo "<div class='alert alert-danger'>Error: </div>";
				}
			} else {
				$query = "UPDATE profiles SET city=:city WHERE user_id=:id";

				$stmt = $connection->prepare($query);

				$stmt->bindParam(':id', $id);
				$stmt->bindParam(':city', $city);


				if($stmt->execute()){
					header("Location: ./profile.php");

					exit();
				} else {
					echo "<div class='alert alert-danger'>Error: </div>";
				}
			}
		} catch(PDOException $e) {
    echo $e->getMessage();
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
        <li class="active"><a href="#">Profile</a></li>
        <li><a href="./movies.php">Movies</a></li>
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



<form class="form-horizontal" id="login_form" action="profile.php" method="post" value="<?php echo $row['dsl'];?>">
<fieldset>

<header>Edit Profile</header>


<div class="form-group">
	<?php

            if(isset($_GET['success'])) {
                $success = $_GET['success']; ?>
                <div class='alert alert-success'><?php echo $success ?></div>
            <?php } ?>

  <label class="col-md-4 control-label" for="name">Name</label>  
  <div class="col-md-5">
  <input id="name" name="name" type="text" value="<?php echo  $_SESSION['name'] ?>" placeholder="Enter your name here" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-5">
  <input id="email" name="email" type="text" readonly value="<?php echo  $_SESSION['email'] ?>" placeholder="Enter your email address here" class="form-control input-md" required="">  
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="city">City</label>  
  <div class="col-md-5">
  <input id="city" name="city" type="text" placeholder="Enter your city here" class="form-control input-md" required="">
    
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
