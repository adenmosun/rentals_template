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
    <link href="./css/index.css" rel="stylesheet">
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
        <li class="active"><a href="#">Contact</a></li>
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




<!-- subscription form begins -->

<div id="myModal" class="modal fade" role="dialog" action="php/subscription-data-csv.php" method="post">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Kindly fill form to Subscribe</h4>
      </div>
      <div class="modal-body">
        
          <form class="form-horizontal" id="contact_form" action="php/subscription-data-csv.php" method="post">
          <fieldset>

          <div class="form-group">
            <label class="col-md-4 control-label" for="name">Name</label>  
            <div class="col-md-5">
            <input id="name" name="name" type="text" placeholder="Enter your name" class="form-control input-md" required="">
              
            </div>
          </div>


          <div class="form-group">
            <label class="col-md-4 control-label" for="email">Email</label>  
            <div class="col-md-5">
            <input id="email" name="email" type="text" placeholder="Enter your email address" class="form-control input-md" required="">
              
            </div>
          </div>


          <div class="form-group">
            <label class="col-md-4 control-label" for="subscribe"></label>
            <div class="col-md-4">
              <button action="" id="subscribe" name="subscribe" type="subscribe" class="btn btn-primary">Subscribe</button>
            </div>
          </div>

          </fieldset>


          </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!-- subscription form ends -->




<!-- contact form begins -->


<form class="form-horizontal" id="contact_form" action="php/contacts-data-csv.php" method="post">
<fieldset>

<header>Kindly fill the form to Contact Us</header>



<div class="form-group">
  <label class="col-md-4 control-label" for="name">Name</label>  
  <div class="col-md-5">
  <input id="name" name="name" type="text" placeholder="Enter your full name here" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-5">
  <input id="email" name="email" type="text" placeholder="Enter your email address here" class="form-control input-md" required="">
    
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="message">Message</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="message" name="message" cols="6" rows="6" required=""></textarea>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button action="" id="submit" name="submit" type="submit" class="btn btn-primary">Send Message</button>
  </div>
</div>

</fieldset>


</form>

<!-- contact form ends -->




<div class="col-md-12 text-center"> 
    <span id=hidebtn class="btn btn-sm btn-default">Hide</span> |
    <span id=showbtn class="btn btn-sm btn-default">Show</span>
</div>


<div class="element"></div>
<footer class="container-fluid text-center">
  <p>99d Films, Lagos</p>
  <p>made with care</p>
</footer>


  </body>
</html>
