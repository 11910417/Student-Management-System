<?php  

$first=$_POST['first'];
$last=$_POST['last'];
$username2=$_POST['username2'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zip'];
$email=$_POST['email'];
$password2=$_POST['password2'];
$address1=$_POST['address1'];
$address2=$_POST['address2'];
//database connection
include('connection.php');

$query=" INSERT INTO 'signup'('first', 'last', 'username2', 'city', 'state', 'zip', 'email', 'password2', 'address1', 'address2') 
         VALUES ('$first', '$last' , '$username2' , '$city' , '$state', '$zip', '$email', '$password2', '$address1', '$address2')";
$run=mysqli_query($conn,$query);
       if($run){
           echo '<script>alert("Data inserted")</script>';

       }
       else{
           echo '<script>alert("Error")</script>';
       }
    
?>