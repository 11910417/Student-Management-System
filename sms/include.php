<?php 
  session_start(); 
include('connection.php');
  if (!isset($_SESSION['username2'])) {
  	$_SESSION['msg'] = "You must log in first";
      echo $_SESSION['msg'];
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username2']);
  	header("location: login.php");
  }
?>
<html>
    <head>
      
        <style>
            * {
  margin: 0px;
  padding: 0px;
}
body {
  font-size: 120%;
  background: #F8F8FF;
}

.header {
  width: 80%;
  margin: 50px auto 0px;
  color: white;
  background-color:#202727 ;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius:10px 10px 0 0;
  padding: 20px;
}
form, .content {
  width: 80%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 10px 10px;
}
.input-group {
  margin: 10px 0px 10px 0px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #5F9EA0;
  border: none;
  border-radius: 5px;
}
.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;}

  .flex-container {
  display: flex;
}

.flex-container > div {
  background-color: aqua;
  margin: 10px;
  padding: 20px;
  font-size: 30px;
  border-radius:7px;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 36%;
}
.flex-container > div:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.8);
}
            </style>
</head>
<body style="background: linear-gradient(110deg, #fdcd3b 60%, #ffed4b 60%);">
<?php include('header2.php');?>
  <div class="header">
	<h2>Dashboard</h2>
</div>
	
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      <center>	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3></center>
    </div>  
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username2'])) : ?>
    <center>	<p>Welcome <strong><?php echo $_SESSION['username2']; ?></strong> to my project page.</p></center>
    <?php endif ?>

  <br>
  <br>
  

  <br>
  <br>
  <div class="flex-container">
  <div>
  <?php
   $sql1 ="SELECT * from  signup";
$results1=mysqli_query($conn,$sql1);
$totalS= mysqli_num_rows($results1);
?>
 <center><span class="report-title">Total Students</span></center>
 <hr>
<center><h4><?php echo htmlentities($totalS);?></h4></center>
<hr>
<center><a style="color:red;font-size:20px;" href="search php.php"><span class="report-count"> View Students</span></a></center>
  </div>
  <div>
  <?php
   $sql1 ="SELECT * from  student";
$results1=mysqli_query($conn,$sql1);
$totalC= mysqli_num_rows($results1);
?>
 <center><span class="report-title">Total Courses added</span></center>
 <hr>
<center><h4><?php echo htmlentities($totalC);?></h4></center>
<hr>
<center><a style="color:red;font-size:20px;" href="searchStudent.php"><span class="report-count"> View Courses</span></a></center>
  </div>
  
  <div>
  <?php
   $sql1 ="SELECT * from  contact";
$results1=mysqli_query($conn,$sql1);
$totalCon= mysqli_num_rows($results1);
?>
 <center><span class="report-title">Total Contact added</span></center>
 <hr>
<center><h4><?php echo htmlentities($totalCon);?></h4></center>
<hr>
<center><a style="color:red;font-size:20px;" href="contactInfo.php"><span class="report-count"> View Contacts</span></a></center>
  </div>
  
<div>
  
 <center><span class="report-title">Total Courses Available</span></center>
 <hr>
<center><h4>7</h4></center>
<hr>
<center><a style="color:red;font-size:20px;" href="courses.php"><span class="report-count"> View Courses Info</span></a></center>
  </div>
  
</div>
    
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</body>
</html>
<?php include('footer.php');
?>