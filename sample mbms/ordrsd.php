<?php include('ordrdel.php'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>orders remove or see</title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">   
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="arms.css">
      <style type="text/css">
      body{
      	background-image: url("images/carousel5.jpg");
        height: 550px;
      }
      	
      </style>
</head>
<body>
	<div class="container">
  <div class="d-flex justify-content-center h-100">
    <div>
      <div class="card-header">
        <h3>Order Received </h3>

      </div>
      <div class="card-body">
        <form method="post" action="">
          <div class="input-group form-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="fas fa-user"></i></span>
            </div>
            <input type="text" class="form-control" placeholder="Order Id" name="o_id" required>
          </div>
          <div class="form-group" style="margin:10px;">
            <input type="submit" value="Info"  name="Info" class="btn float-right login_btn" style="margin:4px;">
            <input type="submit" value="Delete"  name="Delete" class="btn float-right login_btn" style="margin:4px;">
          </div>
        </form>
        
          
      </div>
      <form action="orderrecv.php">
            <div class="form-group">
            <input type="submit" value="Return"  class="btn  login_btn" style="position: relative; top:-18px;">
            </div>
          </form>

    </div>
      
    </div>
  </div>  
</body>
</html>