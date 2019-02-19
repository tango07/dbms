<!DOCTYPE html>
<html>
<head>
  <title>Details</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">   
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
      

  <style type="text/css">
    
     body {
    background-image: url("images/out.png");
    background-repeat: no-repeat;
    background-position: right top;
    margin-right: 200px;
    background-color: #222F19;
      }
    table{

      text-align: center;
       margin-top:100px;
      margin-left: 200px;

    }
    th{
      padding: 10px;
    }
    
    thead{
      text-align: center;
      font-weight: bold;
      border: 2px solid #FFC312;
      color: #FFC312;
    }
    tbody{
      color: white;
    }
    

  </style>
</head>
<body>
  
<?php 
  include('troopdel.php');
  if($_GET['troop_id']){
            $i = $_GET['troop_id'];
         }
        
           $sql="SELECT * FROM troop WHERE troop_id=$i";
    
              $result=mysqli_query($link, $sql);
?>
<table>
  
    <thead>
        <tr>
          <th>Troop_id</th>
          <th>Troop Name</th>
          <th>Base station</th>
          <th>Equipment received on</th>
          <th>Branch of Service</th>
        </tr>
    </thead>

  <tbody>
      <?php
           while( $row = mysqli_fetch_array( $result ) ){

            echo
            "<tr >
              <td>{$row['troop_id']}</td>
              <td>{$row['Name']}</td>
              <td>{$row['b_station']}</td>
              <td>{$row['Received']}</td>
              <td>{$row['bos']}</td>
            </tr>";
           }   
           ?>
           </tbody>   
   </table>        
   <form  action="military_base.php">
    <div class="form-group">
   <input type="submit" name="return" class="btn  login_btn" style="background-color:#FFC312;position:relative;left: 820px; margin-top: 40px;" value="Return" >
   </div>
   </form>
</body>
</html>