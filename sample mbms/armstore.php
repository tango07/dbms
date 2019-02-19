
	<?php
    error_reporting(E_ALL & ~E_NOTICE);
   $servername="localhost";
   $username="root";
   $password="";
   $db="military_base";
    $link = mysqli_connect($servername, $username, $password, $db);
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    	if(isset($_POST['add_arms']))
        {
            $e_id=mysqli_real_escape_string($link, $_POST['e_id']);
    		$e_name=mysqli_real_escape_string($link, $_POST['e_name']);
    		$weight=mysqli_real_escape_string($link, $_POST['weight']);
    		$type=mysqli_real_escape_string($link, $_POST['type']);
    		$quantity=mysqli_real_escape_string($link, $_POST['quantity']);
            $img=mysqli_real_escape_string($link, $_POST['img']);
            $target_dir='images/';
            $filename=basename($_FILES["img"]["name"]);
            $filepath=$target_dir.$filename;

    		$sql="INSERT INTO equipment(e_id,e_name,weight,type,quantity,img) VALUES ('$e_id', '$e_name', '$weight', '$type', '$quantity', '$filepath')";
    
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

