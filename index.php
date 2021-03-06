<?php

//start session
session_start();
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
        <li class="active"><a href="#">Home</a></li>
        <li><a href="./main.php">About</a></li>
        <li><a href="./scenes.php">Scenes</a></li>
        <li><a href="./contact.php">Contact</a></li>
        <li><a href="./shop.php">Store</a></li>
        <li><a href="./api/endpoints.php"><span style="color:#BE33FF">Api Endpoints</span></a></li></span>
      </ul>


      
      <ul class="nav navbar-nav navbar-right">
        <a href="subscribe.php">  <button type="button" id="btnsub" class="btn btn-info btn-sm" >
         <span class="glyphicon glyphicon-film" ></span> Subscribe
        </button></a>

          <button class="loginbtn"><a href="./php/login.php">Login</a>
          </button>
        
      </ul>
    </div>
  </div>
</nav>




<div class="jumbotron">
  <div class="container text-center">
    <span style="color:#FF905E" style="font-family:courier"><h1>99d Film Rentals</h1> </span>     
    <p>99d Rentals </a> has a stock of your <span style="color:green">favourite movies</span>. Our ever evolving video department consists of cutting edge camera systems, customised support rigs, sound, grip, lighting and generators. We are constantly adapting to the latest technology and our clients’ demands. provides digital capture packages that are custom designed for each shoot, using only the latest cutting edge technology.</p>
  </div>
</div>
  
<div class="container-fluid bg-3 text-center">    
  <h3>Gallery</h3><br><br><br><br>
  <div class="row">
    <div class="col-sm-3">
      <p>Ant man and Wasp</p>
      <img src="http://assets1.ignimgs.com/2018/06/11/ant-man-andthe-wasp-dolby-poster-1528754054559.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Thor Ragnaok</p>
      <img src="https://i.pinimg.com/originals/9b/ba/ec/9bbaec818837e4ed8abe8c467795cba4.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Incredibles 2</p>
      <img src="https://www.cineworld.co.uk/xmedia-cw/repo/feats/posters/HO00005098-md.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Justice League</p>
      <img src="https://image.tmdb.org/t/p/original/4lo1fTexk2eNIeQx3Tp74kN7ASE.jpg" style="width:100%" alt="Image">
    </div>
  </div>
</div><br><br><br><br><br><br><br><br><br>

<div class="container-fluid bg-3 text-center">    
  <div class="row">
    <div class="col-sm-3">
      <p>The little Mermaid</p>
      <img src="https://img.buzzfeed.com/buzzfeed-static/static/2013-10/enhanced/webdr03/2/3/enhanced-buzz-orig-22426-1380697388-20.jpg?downsize=715:*&output-format=auto&output-quality=auto" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Doctor Strange</p>
      <img src="https://www.sideshowtoy.com/assets/products/903595-doctor-strange/lg/marvel-avengers-infinifty-war-doctor-strange-sixth-scale-figure-hot-toys-903595-09.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Oz The Great and Powerful</p>
      <img src="https://lumiere-a.akamaihd.net/v1/images/movie_poster_ozthegreatandpowerful_a292a87b.jpeg?region=0,0,300,450" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Zootopia</p>
      <img src="http://drraa3ej68s2c.cloudfront.net/wp-content/uploads/2017/01/10125617/6523d73b04407f9f9a490cf03db41e5b25908690117a1759a4e5dba24708acfd.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div><br><br><br><br><br><br><br><br>


<div class="container-fluid bg-3 text-center">    
  <div class="row">
    <div class="col-sm-3">
      <p>Crazy Rich Asians</p>
      <img src="https://images-eu.ssl-images-amazon.com/images/I/51u8I%2BmRd3L.jpg" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Jumanji</p>
      <img src="https://www.movieinsider.com/images/p/600/485447_m1506152295.jpg" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3"> 
      <p>Beauty and the Beast</p>
      <img src="https://vignette.wikia.nocookie.net/disney/images/3/37/BATB_2017_Theatrical_Poster.jpg/revision/latest?cb=20170109030853" class="img-responsive" style="width:100%" alt="Image">
    </div>
    <div class="col-sm-3">
      <p>Pirates and the Caribean</p>
      <img src="https://lumiere-a.akamaihd.net/v1/images/open-uri20150422-12561-1btl1jz_48997d5d.jpeg?region=0,0,300,450" class="img-responsive" style="width:100%" alt="Image">
    </div>
  </div>
</div><br><br><br><br><br><br><br><br>

<footer class="container-fluid text-center">
  <p>99d Films, Lagos</p>
  <p>made with care</p>
</footer>
  </body>
</html>
