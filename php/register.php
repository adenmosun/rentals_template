<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
session_start();

include '../config/database.php';


if(isset($_SESSION['name'])){
    header('location: ../index.php');
    exit();
}



if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
	try{
		// $query = "INSERT INTO users SET name=:name, email=:email password=:password, created_at=:created_at";
    $query = "INSERT INTO users (name, email, password, created_at) VALUES (?,?,?,?)";
		$stmt = $connection->prepare($query);
    

		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = hash('sha256', $_POST['password']);
    $created_at = date('Y-m-d H-i-s');



		$stmt->bindParam(':name', $name);
		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':password', $password);
		$stmt->bindParam(':created_at', $created_at);

		if($stmt->execute([$name, $email, $password, $created_at])){
			
			$_SESSION['name'] = $name;
			header("Location: ./profile.php");
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
  <script src='./main.js'></script> 

    <!-- <link href="../css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="../css/index.css" rel="stylesheet">
  </head>
  <body>


  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="./index.php"> </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="../index.php">Home</a></li>
        <li><a href="../main.php">About</a></li>
        <li><a href="../scenes.php">Scenes</a></li>
        <li ><a href="../contact.php">Contact</a></li>
        <li><a href="../shop.php">Store</a></li>
      </ul>


      
      <ul class="nav navbar-nav navbar-right">
        <a href="subscribe.php">
        <button type="button" id="btnsub" class="btn btn-info btn-sm" >
          <span class="glyphicon glyphicon-film" ></span> Subscribe
        </button></a>
      </ul>
    </div>
  </div>
</nav>


<form class="form-horizontal" id="contact_form" action="register.php" method="post">
<fieldset>

<header>Register</header>

<div class="form-group">
  <label class="col-md-4 control-label" for="name">Name</label>  
  <div class="col-md-5">
  <input id="name" name="name" type="text" placeholder="Enter your name here" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-5">
  <input id="email" name="email" type="text" placeholder="Enter your email address here" class="form-control input-md" required="">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="password">Password</label>  
  <div class="col-md-5">
  <input id="password" name="password" type="password" placeholder="Enter your Password here" class="form-control input-md" required="">
    
  </div>
</div>



<div class="form-group">
  <label class="col-md-4 control-label" for="register"></label>
  <div class="col-md-4">
    <button action="" id="register" name="register" type="register" class="btn btn-primary">Register</button>
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