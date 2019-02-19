<?php include('soldiersstore.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>add Soldiers</title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">   
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="arms.css">
      <style type="text/css">
      body{
      	background-image: url("images/register.jpg");
      }
      	
      </style>
</head>
<body>
	<div class="container">
  <div class="d-flex justify-content-center h-100">
    <div>
      <div class="card-header">
        <h3>About Soldiers</h3>

      </div>
      <div class="card-body">
        <form method="post" action="" enctype="multipart/form-data">

          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-id-badge"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Id" name="Id" required>
          </div>

          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Name" name="Name" required>
          </div>

          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-star"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Rank" name="Rank" required>
          </div>

          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-fighter-jet"></i></span>
            </div>
            <select class="form-control" placeholder="Branch of Service" name="bos">
              <option>Army</option>
              <option>Airforce</option>
              <option>Navy</option>
            </select>  
          </div>

          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-id-badge"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Stationed At" name="Stationed_at" required>  
          </div>

          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-hand-lizard"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Weapon" name="Weapon" required>
          </div>

          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-cubes"></i></span>
            </div>
            <input type="file" class="form-control" placeholder="Choose file"  name="img" required>
          </div>
          
          <div class="form-group">
            <input type="submit" value="Add"  name="add_user" class="btn float-right login_btn">
          </div>
          </form>
          <form action="military_base.php">
            <div class="form-group">
            <input type="submit" value="return"  class="btn  login_btn">
            </div>
          </form>
          <a style="color: #FFC312;" href="http://localhost/sample%20mbms/soldiersd.php">Click To See or Remove records</a>
        
      </div>
      
    </div>
  </div>
</div>

</body>
</html>