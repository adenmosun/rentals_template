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
        <li><a href="./index.php">Home</a></li>
        <li><a href="./main.php">About</a></li>
        <li><a href="./scenes.php">Scenes</a></li>
        <li ><a href="./contact.php">Contact</a></li>
        <li><a href="./shop.php">Store</a></li>
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


<?php

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);



if(isset($_POST['submit'])){

    //collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    //check name is set
    if($name ==''){
        $error[] = 'Name is required';
    }

    //check for a valid email address
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
         $error[] = 'Please enter a valid email address';
    }

    //if no errors carry on
    if(!isset($error)){

        # Title of the CSV
        $header = "Name, Email, Message\n";

        //set the data of the CSV
        $data = "$name, $email, $message\n";

        # set the file name and create CSV file
        $fileName = dirname(__DIR__) . "/contactsdata" . ".csv";
        if (file_exists($fileName)) {
            //we only need header once
            file_put_contents( $fileName, $data, FILE_APPEND );
        } else {
            //add csv header
            file_put_contents( $fileName, $header . $data );
        }

        $to = "tayo.adenmosun@gmail.com"; // this is your Email address
        $from = $_POST['email']; // this is the sender's Email address
        $name = $_POST['name'];
        $subject = "Form submission";
        $subject2 = "Copy of your form submission";
        $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
        $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

        $headers = "From:" . $from;
        $headers2 = "From:" . $to;
        mail($to,$subject,$message,$headers);
        mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
        echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";

        ?>
        <div class="jumbotron">
          <div class="container text-center">
            <p> Thank you for contacting</p> <span style="color:#FF905E" style="font-family:courier"><h1>99d Film Rentals</h1> </span>
            <p> Go <a href="../index.php">back</a></p>      
          </div>
        </div>
        
        <?php
        exit();
    }
}

//if their are errors display them
if(isset($error)){
    foreach($error as $error){
        echo "<p style='color:#ff0000'>$error</p>";
    }
}


?> 


</body>
</html>