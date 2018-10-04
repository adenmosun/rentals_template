
<?php
header('Content-type: text/html; charset=utf-8');
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
session_start();


include '../config/database.php';

if(isset($_SESSION['name'])){
    header('location: ../index.php');
    exit();
}


if(isset($_POST['email']) && isset($_POST['password'])) {
	try{
		$query = "SELECT name FROM users WHERE email=:email AND password=:password";
		$stmt = $connection->prepare($query);

		$email = $_POST['email'];
    $password = hash('sha256', $_POST['password']);


		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':password', $password);
		$stmt->execute();


		$num = $stmt->rowCount();


		if ($num>0){
			$row = $stmt->fetch();
			$_SESSION['name'] = $row['name'];
			header("Location: ./profile.php");
			exit();
		}
	} catch(Exception $e) {
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
        <li><a href="./profile.php">Profile</a></li>
        <li><a href="./movies.php">Movies</a></li>
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


<form class="form-horizontal" id="login_form" action="login.php" method="post">
<fieldset>

<header>Login</header>


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
    <p>Don't have an account <a href="./register.php">Register Here</a></p>
  </div>
</div>




<div class="form-group">
  <label class="col-md-4 control-label" for="login"></label>
  <div class="col-md-4">
    <button action="" id="login" name="login" type="login" class="btn btn-primary">Login</button>
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