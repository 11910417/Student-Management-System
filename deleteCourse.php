<?php

$delete=$_GET['Delete_Std_Id'];

include 'connection.php';
$query=" DELETE FROM signup WHERE Id=$delete";
$run=mysqli_query($conn,$query);
/*if($run)
{
  echo "data deleted";
}
else{
  echo "error";
}*/
header('location:searchStudent.php');
?>