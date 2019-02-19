
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
            $Id=mysqli_real_escape_string($link, $_POST['Id']);
            
    		
    		$sql="DELETE FROM soldiers WHERE Id=$Id";
    
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
            $Id=mysqli_real_escape_string($link, $_POST['Id']);

            header("location:soldierout.php?Id=$Id");

           
        }
    
?>

