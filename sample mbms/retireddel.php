
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
            $id=mysqli_real_escape_string($link, $_POST['id']);
            
    		
    		$sql="DELETE FROM formersoldiers WHERE id=$id";
    
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
            $id=mysqli_real_escape_string($link, $_POST['id']);

            header("location:retired.php?id=$id");

           
        }
    
?>

