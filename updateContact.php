<?php
session_start();
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username2']);
  header("location: login.php");
} 
$id = $_GET['Update_Contact_Id'];
include('connection.php');

if(isset($_POST['update'])){
  

$username2 = $_POST['username2'];
$email = $_POST['email'];
$message = $_POST['message'];



$query = " UPDATE contact SET id='$id', username2= '$username2' , email= '$email',message='$message' WHERE id = $id "; 

$res = mysqli_query($conn,$query);
header('location:contactInfo.php');
}



?>

<!DOCTYPE html>
<html>
    <head>
        
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
<body>
<?php include('header2.php');?>
<div class="header">
<h2 class="text-center">Contact us</h2>
                    </div>

    <form method="post">
        <label>Username</label>
        <input class="form-control" type="text" name="username2" value="<?php echo $_SESSION['username2'];?>">
        <br><br>
        <label>Email</label>
        <input class="form-control" type="email" name="email" value="<?php echo $_SESSION['email'];?>" ><br><br>
        <label>Message</label>
        <textarea class="form-control" name="message" placeholder="Message" rows="6"></textarea><br><br>
        <center><button class="btn btn-primary" type="submit" name="update">Send </button></center>
    </form>

</body>
</html>
<?php include('footer.php');