<?php
session_start();
include('connection.php');
if(isset($_POST['login'])){
$user=$_POST['user'];
$pass=$_POST['pass'];

$pass = md5($pass);
$query=" SELECT * FROM signup WHERE username2=$user,password2=$pass";

$result=mysqli_query($conn,$query);
if(mysqli_num_rows($result)==1){

$_SESSION['username2']=$user;
$_SESSION['success']="You are now logged in";
header('location:include.php');
}
else{
    echo '<script>alert("Wrong username/password combination");</script>';
}
}
?>