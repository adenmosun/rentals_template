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
        <li><a href="./contact.php">Contact</a></li>
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





<form class="form-horizontal" id="contact_form" action="php/subscription-data-csv.php" method="post">
<fieldset>

<header>Kindly fill this form to subscribe</header>



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
  <label class="col-md-4 control-label" for="subscribe"></label>
  <div class="col-md-4">
    <button action="" id="subscribe" name="subscribe" type="subscribe" class="btn btn-primary">Subscribe</button>
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
