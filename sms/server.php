<?php
session_start();

// initializing variables
$username2 = "";
$email    = "";
$name="";
$mobile="";
$date="";
$message="";
$errors = array(); 


// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'sms');

// REGISTER USER
if (isset($_POST['register'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $username2 = mysqli_real_escape_string($db, $_POST['username2']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password2 = mysqli_real_escape_string($db, $_POST['password2']);
  $mobile = mysqli_real_escape_string($db, $_POST['mobile']);
  $date = mysqli_real_escape_string($db, $_POST['date']);
  
// form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username2)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password2)) { array_push($errors, "Password is required"); }
  
  

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM signup WHERE username2='$username2' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username2'] === $username2) {
        array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
        array_push($errors, "email already exists");
    }
  }
  if (count($errors) == 0) {
  //	$password2 = md5($password2);//encrypt the password before saving in the database

  	$query = "INSERT INTO signup (name,username2,email,password2,mobile,date) 
  			  VALUES('$name','$username2', '$email', '$password2','$mobile','$date')";
  	mysqli_query($db, $query);
  	$_SESSION['username2'] = $username2;
    $_SESSION['email'] = $email;
    $_SESSION['name'] = $name;
    
  	$_SESSION['success'] = "You are now logged in";
  	header('location: search php.php');
  }
}

// LOGIN USER
if (isset($_POST['login'])) {
  $username2 = mysqli_real_escape_string($db, $_POST['user2']);
  $password2 = mysqli_real_escape_string($db, $_POST['pass']);

  if (empty($username2)) {
    array_push($errors, "Username is required");
}
if (empty($password2)) {
    array_push($errors, "Password is required");
}
if (count($errors) == 0) {
  //	$password2 = md5($password2);
  	$query = "SELECT * FROM signup WHERE username2='$username2' AND password2='$password2'";
  	$results = mysqli_query($db, $query);
    $num=mysqli_num_rows($results);
  	if ($num==1) {
  	  $_SESSION['username2'] = $username2;
  	  $_SESSION['success'] = "You are now logged in";
        echo '<script>alert("You are Logged in.");</script>';
  	  header('location: include.php');
  	}
      else {
        array_push($errors, "Wrong username/password combination");
  	}
  }
}


?>