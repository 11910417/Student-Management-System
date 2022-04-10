<?php

session_start();
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username2']);
  header("location: login.php");
} 
$Id = $_GET['Update_Id'];
include('connection.php');

if(isset($_POST['update'])){
  

$name = $_POST['name'];
$username2 = $_POST['username2'];
$email = $_POST['email'];
$password2 = $_POST['password2'];
$mobile = $_POST['mobile'];
$date = $_POST['date'];


$query = " UPDATE signup SET Id='$Id', name= '$name' , username2= '$username2', email= '$email' , password2= '$password2',mobile= '$mobile' , date= '$date' WHERE Id = $Id "; 

$res = mysqli_query($conn,$query);
header('location:search php.php');

}



?>

<!DOCTYPE html>
        <head>
            <meta charset="utf-8"/>
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" type="text/css" href="style.css">
                <style>
                        
                        
                        
                        .header{
                          width:60%;
                        }
                        form{
                          width:60%;
                          padding:40px;
                        }
                           
                        </style>
                        </head>
                        <body style="background-color:#ffed4b"> 
                        <?php include('header2.php');?>
              <div class="header">
                            <h2><b>Update Info</b></h1>
                          </div>
                            <!--  <button type="button" id="b1" class="btn btn-dark"><a href="login.php">Go to Login page</a></button>-->
                          
                            <form action="search php.php" method="post" enctype="multipart/form-data">
            
                            <div class="row">
                            <div class="col-md-6">
    <label for="validationDefault01" class="form-label">Student Name</label>
    <input type="text" class="form-control" id="validationDefault01" name="name" value="<?php echo $_SESSION['name']; ?>"placeholder="Enter your name" required>
  </div>
  
  <div class="col-md-6">
    <label for="validationDefaultUsername" class="form-label">Student Username</label>
      <input type="text" class="form-control" id="validationDefaultUsername"  name="username2" value="<?php echo $_SESSION['username2']; ?>" placeholder="Enter your username" aria-describedby="inputGroupPrepend2" required>
  </div>
                      </div>
  <div class="row">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" name="email" value="<?php echo $_SESSION['email']; ?>">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4" name="password2" >
  </div>
                      </div>
  <div class="row">
  <div class="col-md-6">
  <label>Mobile no.</label><br>
        <input type="text" name="mobile" class="form-control"/></div>
        <div class="col-md-6">
  <label>Date of Birth</label><br>
  <input type="date" name="date" class="form-control" /></div>
  
                      </div>
  <div class="col-12">
  <label for="file" class="form-label">Upload your photo</label>
  <input type="file" class="form-control" id="file" name="file">
  </div>
  <br>
  <center>
  <div class="col-5">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="invalidCheck2" name="check2" required>
      <label class="form-check-label" for="invalidCheck2">
        Agree to terms and conditions
      </label>
    </div>
  </div>
  </center>
  <br>
  <div class="col-12">
  <center>  <input class="btn btn-primary" class="form-control" type="submit" name="update" value="Update"/></center>
    </div>
</form>
<br>
<br>
                     
</body>  
</html>  


<?php include('footer.php');?>
