<?php 
include('database.php');
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username2']);
  header("location: login.php");
}?> 
<html>
    <head>
        
    <link rel="stylesheet" type="text/css" href="style.css">
        <style>
             body{
            background: url('images/contact.jpg');
          }

  .header{
                          width:40%;
                        }
                        form{
                          width:40%;
                          padding:40px;
                        }

</style>
</head>
<body style="background: url('images/contact.jpg');">
<?php include('header2.php');?>
<div class="header">
<h2 class="text-center">Contact us</h2>
                    </div>

    <form action="contact.php" method="post">
        <label>Username</label>
        <input class="form-control" type="text" name="username2" value="<?php echo $_SESSION['username2'];?>">
        <br><br>
        <label>Email</label>
        <input class="form-control" type="email" name="email" value="<?php echo $_SESSION['email'];?>" ><br><br>
        <label>Message</label>
        <textarea class="form-control" name="message" placeholder="Message" rows="6"></textarea><br><br>
        <center><button class="btn btn-primary" type="submit" name="send">Send </button></center>
    </form>
<br>

</body>
</html>
<?php include('footer.php');?>