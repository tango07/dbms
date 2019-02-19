

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
    <title>Military Base</title>

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
          height: 60px;
        }
    
    </style>
  </head>
  

  <body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #222F19;">
  <a class="navbar-brand" href="#"><img src="images/logo.jpg" style="width: 70px;height: 50px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto"  >
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/sample%20mbms/index1.php#"  style="color: #F8E9BB;font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/sample%20mbms/arms.php"  style="color: #F8E9BB;">&nbsp;&nbsp;&nbsp;&nbsp;Arms and Ammunition</a>
      </li>
<div class="btn-group">
  <button class="btn  btn-sm dropdown-toggle " style="background-color: #222F19; color: #F8E9BB;font-size: 18px;" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Orders
  </button>
  
  <div class="dropdown-menu" style="background-color:#222F19; ">
    <a class="dropdown-item dr" href="http://localhost/sample%20mbms/orderrecv.php"  style="color:#F8E9BB;background-color: #222F19;" >Orders Received</a>
    <a class="dropdown-item" href="http://localhost/sample%20mbms/orderpend.php" style="background-color: #222F19; color: #F8E9BB;" >Orders Pending</a>
  </div>
</div>
      <li class="nav-item">
        <a class="nav-link " href="http://localhost/sample%20mbms/troop.php" style="color: #F8E9BB;">&nbsp;&nbsp;&nbsp;&nbsp;Troops</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="http://localhost/sample%20mbms/soldiers.php" style="color: #F8E9BB;">&nbsp;&nbsp;&nbsp;&nbsp;Soldiers info</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="http://localhost/sample%20mbms/retiredsd.php" style="color: #F8E9BB;">&nbsp;&nbsp;&nbsp;&nbsp;Retired Soldiers</a>
      </li>
    </ul>
    <form action="http://localhost/sample%20mbms/login.php"> 
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Log Out</button>
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
    <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
  </ol>
  <div class="carousel-inner" style=" height: 650px;">
    <div class="carousel-item active" >
      <img class="d-block w-100" src="images/mb1.jpg">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/carousel22.jpg">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/mb2.jpg">
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" src="images/mb3.jpg">
    </div>
     <div class="carousel-item">
      <img class="d-block w-100" src="images/mb4.jpg">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/mb5.jpg">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/mb6.jpg">
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
      <h5 class="card-title">Card title</h5>
      <p class="card-text" >This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer" style="background-color:#9AC9E0 ;">
       <small class="text-muted" >Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="images/card2.jpg" alt="Card image cap">
    <div class="card-body" style="background-color: #7F731D;">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer" style="background-color:#9AC9E0 ;">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="images/card3.jpg" alt="Card image cap">
    <div class="card-body" style="background-color: #7F731D;">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer" style="background-color:#9AC9E0; ">
      <small class="text-muted" >Last updated 3 mins ago</small>
    </div>
  </div>
</div>
<div style="color: black;font-weight: bold; padding: 10px;">
  A military base is a facility directly owned and operated by or for the military or one of its branches that shelters military equipment and personnel, and facilitates training and operations. A military base provides accommodations for one or more units, but it may also be used as a command center, training ground or proving ground. In most cases, military bases rely on outside help to operate. However, certain complex bases are able to endure on their own for long periods because they are able to provide food, water and other life support necessities for their inhabitants while under siege. Military bases for military aviation are called military air bases. Military bases for military ships are called naval bases.
</div>
<strong style="color: green;font-weight: bold; font-size: 30px; text-decoration: underline;">Types of establishment</strong>
<div style="color: black;font-weight: bold; padding: 10px;">


Different kinds of Military installations of Iran – 2002
Depending on the context, the term 'military base' may refer to any establishment (usually permanent) that houses a nation's armed forces, or even organized paramilitary forces such as the Police, Constabulary, Militia, or Guards. Alternatively, the term may refer solely to an establishment which is used only by an army (or possibly other land fighting related forces, such as marines) to the exclusion of a base used by either an air force or a navy. This is consistent with the different meanings of the word 'military'.

Some examples of permanent military bases used by the navies and air forces of the world are the HMNB Portsmouth in Portsmouth, UK, the Naval Air Station Whidbey Island, Washington State, USA, or Ramstein Air Base, Germany (the last two are each designated as a Main Operating Base). Other examples of non- or semi-permanent military bases include a Forward Operating Base (FOB), a Logistics Base (Log base) and a Fire Base (FB).

A military base may also contain large concentrations of military supplies in order to support military logistics. Most military bases are restricted to the public and usually only authorized personnel may enter them (be it military personnel or their relatives and authorized civilian personnel).

In addition to the main military facilities on a certain installation, military bases usually (but not always) have various different facilities for military personnel. These facilities vary from country to country. Military bases can provide housing for military personnel, a post office and dining facilities (Restaurants). They may also provide support facilities such as fast food restaurants, gas stations, chapels, schools, banks, thrift stores, a hospital or clinic (dental or health clinics, as well as veterinarian clinics), lodging, movie theaters, and retail stores (usually a Supermarket such as Commissary and a Department Store, such as AAFES). Family, Morale, Welfare and Recreation (FMWR) provides facilities such as fitness centers, libraries, golf courses, Travel centers, Community service centers, Campgrounds, child development centers, youth centers, automotive workshops, hobby/arts and crafts centers, bowling centers, and community centers.
</div>

<div class="footer">
  <p>© 2018.designed by Akshay</p>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>