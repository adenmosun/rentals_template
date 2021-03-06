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
   <script src='./main.js'></script> 

    <!-- <link href="../css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="./css/index.css" rel="stylesheet">
  </head>
  <body>

  	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="./index.php"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="./index.php">Home</a></li>
        <li><a href="./main.php">About</a></li>
        <li class="active"><a href="#">Scenes</a></li>
        <li><a href="./contact.php">Contact</a></li>
        <li><a href="./shop.php">Store</a></li>
        <a href="#anime">
        <button type="button" id="animebtn" class="btn btn-warning btn-sm">
          <span class="glyphicon glyphicon-hand-down"></span> Down
        </button></a>
      </ul>
      

      <ul class="nav navbar-nav navbar-right">
        <a href="subscribe.php">  <button type="button" id="btnsub" class="btn btn-info btn-sm" >
         <span class="glyphicon glyphicon-film" ></span> Subscribe
        </button></a>
      </ul>
    </div>
  </div>
</nav>


  	<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>


    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="./image/a.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Black Panther</h3>
        </div>      
      </div>

      <div class="item">
        <img src="https://pmcvariety.files.wordpress.com/2015/12/creed.jpg?w=1000&h=563&crop=1">
        <div class="carousel-caption">
          <h3>Creed</h3>
        </div>      
      </div>

      <div class="item">
        <img src="https://img.rasset.ie/0004e8b0-800.jpg">
        <div class="carousel-caption">
        <div class="carousel-caption">
          <h3>Friends with Benefits</h3>
        </div>      
      </div>
    </div>

    <div class="item">
        <img src="https://i.ytimg.com/vi/gs02s7xjO6U/maxresdefault.jpg">
        <div class="carousel-caption">
        <div class="carousel-caption">
          <h3>Avengers</h3>
        </div>      
      </div>
    </div>

    <div class="item">
        <img src="https://edge.alluremedia.com.au/m/g/2018/03/red-sparrow-2.jpg">
        <div class="carousel-caption">
        <div class="carousel-caption">
          <h3>Red Sparrow</h3>
        </div>      
      </div>
    </div>


    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    
</div>
</div>


<div class="col-md-12 text-center" style="background-color: purple"> 
    <button>Start Animation</button>
    <span id=hidebtn class="btn btn-sm btn-default">Hide</span> |
    <span id=showbtn class="btn btn-sm btn-default">Show</span>
</div>
<div id="anime" class="col-md-6 text-center" style="background:#98bf21;height:5px;width:100%;position:absolute;"></div>

 <footer class="container-fluid text-center">
  <p>99d Films, Lagos</p>
  <p>made with care</p>
</footer>
  </body>
</html>
