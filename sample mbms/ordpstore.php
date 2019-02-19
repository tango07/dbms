
	<?php

   $servername="localhost";
   $username="root";
   $password="";
   $db="military_base";
    $link = mysqli_connect($servername, $username, $password, $db);
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    	if(isset($_POST['add_ordp']))
        {
            $o_id=mysqli_real_escape_string($link, $_POST['o_id']);
    		$details=mysqli_real_escape_string($link, $_POST['details']);
    		$receiver=mysqli_real_escape_string($link, $_POST['receiver']);
    		$del_on=mysqli_real_escape_string($link, $_POST['del_on']);
            $comments=mysqli_real_escape_string($link, $_POST['comments']);
    		


    		$sql="INSERT INTO orderpend(o_id,details,receiver,delivered_on,comments) VALUES ('$o_id', '$details', '$receiver', '$del_on','$comments')";
    
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

