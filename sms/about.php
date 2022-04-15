<?php 
session_start();
if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username2']);
  	header("location: login.php");
  }?>
<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">
        <style>
          body{
            background: url('images/about.jpeg');
            background-repeat: no-repeat;
            background-size: 2000px 570px;

          }
          .header{
            width:60%;
          }
          form{
            width:60%;
          }
.container1 {
  border: 2px solid #ccc;
  background-color:#fdcd3b;
  border-radius: 8px;
  padding: 20px;
  margin: 16px 10px;
}

.container1::after {
  content: "";
  clear: both;
  display:table;
}

.container1 img {
  float: left;
  margin-right: 20px;
  border-radius: 50%;
}

.container1 span {
  font-size: 20px;
  margin-right: 15px;
}

@media (max-width: 500px) {
  .container1 {
      text-align: center;
  }
  .container1 img {
      margin: auto;
      float: none;
      display: block;
  }
}
        </style>
    </head>
    <body style="background-color: grey;">
      <?php include('header2.php');?>
      <br>
      <div class=header>
        <h2 align="center"><b>About us</b></h2>
</div>
       
       <form>
        <div class="container1">
            <img src="images/11910417.jpg" alt="Avatar" style="width:90px;border:4px;">
            <p><span>Resham Chandak</span> Student at Lovely Professional University</p>
            <p>Pursuing 3rd year of B.Tech. Computer Science and Engineering</p>
          </div>
</form>
          <br>
          <br>
          
          <?php include('footer.php');?>
    </body>
</html>