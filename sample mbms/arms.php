<?php include('armstore.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Arms and Ammunition</title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">   
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="arms.css">
      <style type="text/css">
      body{
      	background-image: url("images/register1.jpg");
        height: 50%;
      }
      	
      </style>
</head>
<body>
	<div class="container">
  <div class="d-flex justify-content-center h-100">
    <div>
      <div class="card-header">
        <h3>Equipment</h3>

      </div>
      <div class="card-body">
        <form method="post" action="" enctype="multipart/form-data">

            <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Equipment Id" name="e_id" required>
          </div>

          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Equipment name" name="e_name" required>
          </div>

          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-balance-scale"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Weight" name="weight" required>
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-hand-lizard"></i></span>
            </div>
            <select class="form-control" placeholder="Type" name="type">
            	<option>Assault rifles</option>
            	<option>Sniper rifles</option>
            	<option>Light Machine guns</option>
            	<option>Heavy Machine guns</option>
            	<option>Pistols</option>
            	<option>Grenade</option>
              <option>Ammunition</option>
            </select>
            
          </div>
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-cubes"></i></span>
            </div>
            <input type="number" class="form-control" placeholder="Quantity" min=0 name="quantity" required>
          </div>

          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-cubes"></i></span>
            </div>
            <input type="file" class="form-control" placeholder="Choose file"  name="img" required>
          </div>
          
          <div class="form-group">
            <input type="submit" value="Add"  name="add_arms" class="btn float-right login_btn">
          </div>
        </form>
        <form action="military_base.php">
            <div class="form-group">
            <input type="submit" value="return"  class="btn  login_btn">
            </div>
          </form>
          <a style="color: #FFC312;" href="http://localhost/sample%20mbms/armsd.php">Click To See or Remove records</a>
      </div>
      
    </div>
  </div>
</div>

</body>
</html>