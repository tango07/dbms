
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
            $troop_id=mysqli_real_escape_string($link, $_POST['troop_id']);
            
    		
    		$sql="DELETE FROM troop WHERE troop_id=$troop_id";
    
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
            $troop_id=mysqli_real_escape_string($link, $_POST['troop_id']);

            header("location:troopout.php?troop_id=$troop_id");

           
        }
    
?>

