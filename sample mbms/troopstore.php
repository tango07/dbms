
	<?php

   $servername="localhost";
   $username="root";
   $password="";
   $db="military_base";
    $link = mysqli_connect($servername, $username, $password, $db);
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    	if(isset($_POST['add_troop']))
        {
            $troop_id=mysqli_real_escape_string($link, $_POST['troop_id']);
            $Name=mysqli_real_escape_string($link, $_POST['Name']);
    		$b_station=mysqli_real_escape_string($link, $_POST['b_station']);
    		$Received=mysqli_real_escape_string($link, $_POST['Received']);
    		$bos=mysqli_real_escape_string($link, $_POST['bos']);

    		$sql="INSERT INTO troop(troop_id,Name,b_station,Received,bos) VALUES ('$troop_id', '$Name', '$b_station', '$Received', '$bos')";
    
             if(mysqli_query($link, $sql))
            {
                 echo "Records added successfully.";
            }       
            else
            {
                 echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            }
        }
    mysqli_close($link);
?>

