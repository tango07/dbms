
	<?php
    error_reporting(E_ALL & ~E_NOTICE);
   $serverId="localhost";
   $userId="root";
   $password="";
   $db="military_base";
    $link = mysqli_connect($serverId, $userId, $password, $db);
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    	if(isset($_POST['add_user']))
        {
            $Id=mysqli_real_escape_string($link, $_POST['Id']);
    		$Name=mysqli_real_escape_string($link, $_POST['Name']);
    		$Rank=mysqli_real_escape_string($link, $_POST['Rank']);
    		$bos=mysqli_real_escape_string($link, $_POST['bos']);
            $Stationed_at=mysqli_real_escape_string($link, $_POST['Stationed_at']);
            $Weapon=mysqli_real_escape_string($link, $_POST['Weapon']);
            $img=mysqli_real_escape_string($link, $_POST['img']);
            $target_dir='images/';
            $filename=basename($_FILES["img"]["name"]);
            $filepath=$target_dir.$filename;
    		$sql="INSERT INTO soldiers(Id,Name,Rank,bos,Stationed_at,Weapon,img) VALUES ('$Id', '$Name', '$Rank', '$bos', '$Stationed_at', '$Weapon', '$filepath')";
    
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

