
	<?php

   $servername="localhost";
   $username="root";
   $password="";
   $db="military_base";
    $link = mysqli_connect($servername, $username, $password, $db);
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    	if(isset($_POST['add_ord']))
        {
            $o_id=mysqli_real_escape_string($link, $_POST['o_id']);
    		$details=mysqli_real_escape_string($link, $_POST['details']);
    		$seller=mysqli_real_escape_string($link, $_POST['seller']);
    		$rec_on=mysqli_real_escape_string($link, $_POST['rec_on']);
    		$comments=mysqli_real_escape_string($link, $_POST['comments']);
            


    		$sql="INSERT INTO orderrecv(o_id,details,seller,rec_on,comments) VALUES ('$o_id', '$details', '$seller', '$rec_on', '$comments')";
    
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

