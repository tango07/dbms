
	<?php

   $servername="localhost";
   $username="root";
   $password="";
   $db="military_base";
    $link = mysqli_connect($servername, $username, $password, $db);
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    	if(isset($_POST['Delete']))
        {
            $o_id=mysqli_real_escape_string($link, $_POST['o_id']);
            
    		
    		$sql="DELETE FROM orderpend WHERE o_id=$o_id";
    
             if(mysqli_query($link, $sql))
            {
                 echo "Records deleted successfully.";
            }       
            else
            {
                 echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
            }
        }

        if(isset($_POST['Info']))
        {
            $o_id=mysqli_real_escape_string($link, $_POST['o_id']);

            header("location:ordpout.php?o_id=$o_id");
        }
    
?>

