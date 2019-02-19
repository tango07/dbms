<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!doctype html>
<html lang="en">
  <head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Live life less ordinary</title>

    <style type="text/css">
      body{
        background-color: #889A8E;
      }
      .footer{
          margin: 0px;
          left: 0px;
          bottom: 0px;
          font-size: 20px;
          background-color: #222F19;
          color:grey;
          text-align: center;
          width: 100%;
          height: 100%;
        }
       
       .dropdown {
    float: left;
    overflow: hidden;
  }

    </style>
  </head>
  

  <body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #222F19;">
  <img src="images/logo.jpg" style="width: 70px;height: 50px;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"  style="color: #F8E9BB;font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/sample%20mbms/military_base.php"  style="color: #F8E9BB;">&nbsp;&nbsp;&nbsp;&nbsp;Military Base</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="http://localhost/sample%20mbms/gallery.php" style="color: #F8E9BB;">&nbsp;&nbsp;&nbsp;&nbsp;Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="http://localhost/sample%20mbms/news.php" style="color: #F8E9BB;">&nbsp;&nbsp;&nbsp;&nbsp;News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#contacts" style="color: #F8E9BB;">&nbsp;&nbsp;&nbsp;&nbsp;Contacts</a>
      </li>
    </ul>
    <form action="http://localhost/sample%20mbms/login.php"> 
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Log out</button>
    </form>
  </div>
</nav>
   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
  </ol>
  <div class="carousel-inner" style=" height: 650px;">
    <div class="carousel-item active" >
      <img class="d-block w-100" src="images/car4.jpg" style="height: 600px;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/car1.jpg">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/car3.jpg">
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" src="images/h1.jpg">
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" src="images/h2.jpg">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/h3.jpg">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/carousel5.jpg">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
&nbsp;


    <div class="card-deck" >
  <div class="card">
    <img class="card-img-top" src="images/card1.jpg" alt="Card image cap">
    <div class="card-body" style="background-color: #7F731D;">
      <h5 class="card-title">Joint program</h5>
      <p class="card-text" >Indian army plans for joint exercise with different nations.</p>
    </div>
    <div class="card-footer" style="background-color:#9AC9E0 ;">
       <small class="text-muted" >Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="images/card2.jpg" alt="Card image cap">
    <div class="card-body" style="background-color: #7F731D;">
      <h5 class="card-title">joint exercise with China</h5>
      <p class="card-text">BEIJING: The militaries of China and India would hold a joint 14-day drill from December 10 in southwest China's Chengdu city to improve their capabilities in fighting terrorism and promote mutual understanding, the Defence Ministry said here Thursday 
</p>
    </div>
    <div class="card-footer" style="background-color:#9AC9E0 ;">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="images/card3.jpg" alt="Card image cap">
    <div class="card-body" style="background-color: #7F731D;">
      <h5 class="card-title">India and China to increase military cooperation after defence talks</h5>
      <p class="card-text">India and China have agreed to expand their military ties and enhance interaction to ensure peace on their common border, India said after a meeting between the old rivals’ defence ministers.</p>
    </div>
    <div class="card-footer" style="background-color:#9AC9E0; ">
      <small class="text-muted" >Last updated 3 mins ago</small>
    </div>
  </div>
</div>
<div style="color: black;font-weight: bold; padding: 10px;">
  A military base is a facility directly owned and operated by or for the military or one of its branches that shelters military equipment and personnel, and facilitates training and operations. A military base provides accommodations for one or more units, but it may also be used as a command center, training ground or proving ground. In most cases, military bases rely on outside help to operate. However, certain complex bases are able to endure on their own for long periods because they are able to provide food, water and other life support necessities for their inhabitants while under siege. Military bases for military aviation are called military air bases. Military bases for military ships are called naval bases.
</div>
<strong style="color: green;font-weight: bold; font-size: 30px; text-decoration: underline;">Overseas military base</strong>
<div style="color: black;font-weight: bold; padding: 10px;">
Civilian services offered to soldiers outside a military base
Further information: List of countries with overseas military bases
An overseas military base is a military base that is geographically located outside of the territory of the country whose armed forces are the principal occupants of the base.

The overseas military base has, throughout its history of usage (and particularly in peacetime and the host country's period of civil unrest), been a contentious issue of debate, and is often a source of opposition for antimilitarists and nationalists in the host country. Such bases may be established by treaties between the governing power in the host country and another country which needs to establish the military base in the host country for various reasons, usually strategic and logistic.

Furthermore, overseas military bases often serve as the source of the military brat subculture due to the children of the bases' occupant military being born or raised in the host country but raised with a remote parental knowledge of the occupant military's home country.
</div>

<div class="footer" id="contacts">
  <p>© 2018.designed by Akshay</p>
  <p><h3>Contact us:<br></h3>
      Phone:7996626523<br>
      Address:Acharya hostels HKG<br>
      Email:akshay.becs.16@acharya.ac.in<br>
      </p>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>