<?php

$delete=$_GET['Delete_Contact_Id'];

include 'connection.php';
$query=" DELETE FROM contact WHERE id=$delete";
$run=mysqli_query($conn,$query);
/*if($run)
{
  echo "data deleted";
}
else{
  echo "error";
}*/
header('location:contactInfo.php');
?>