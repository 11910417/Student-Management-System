<?php include('server.php');?>
<!DOCTYPE html>
        <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <!--<meta charset="utf-8"/>
            
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> cdn of css
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
            <link rel="stylesheet" type="text/css" href="style.css">
              <style>
                        
                       /* div.a{
                            position:center;
                            border:3px solid black;
                            background-color:rgb(223, 217, 217);
                            width:70%;
                            padding:10px;
                            border-radius:8px;
                            margin:20px 80px 40px 200px
                        }*/
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
                        <?php include('header.php');?>
              <div class="header">
                            <h2><b>Sign up</b></h1>
                          </div>
                            <!--  <button type="button" id="b1" class="btn btn-dark"><a href="login.php">Go to Login page</a></button>-->
                          
                            <form action="signup.php" method="post" enctype="multipart/form-data">
                            <?php include('errors.php'); ?>
                            <div class="row">
                            <div class="col-md-6">
    <label for="validationDefault01" class="form-label">Student Name</label>
    <input type="text" class="form-control" id="validationDefault01" name="name" value="<?php echo $name; ?>"placeholder="Enter your name" required>
  </div>
  
  <div class="col-md-6">
    <label for="validationDefaultUsername" class="form-label">Student Username</label>
      <input type="text" class="form-control" id="validationDefaultUsername"  name="username2" value="<?php echo $username2; ?>" placeholder="Enter your username" aria-describedby="inputGroupPrepend2" required>
  </div>
                      </div>
  <div class="row">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4" name="email" value="<?php echo $email; ?>">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4" name="password2" >
  </div>
                      </div>
  <div class="row">
  <div class="col-md-6">
  <label>Mobile no.</label><br>
        <input type="text" name="mobile" class="form-control" value="<?php echo $mobile; ?>" /></div>
        <div class="col-md-6">
  <label>Date of Birth</label><br>
  <input type="date" name="date" class="form-control" value="<?php echo $date; ?>"/></div>
  
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
  <center>  <input class="btn btn-primary" class="form-control" type="submit" name="register"/></center>
    </div>
</form>
<br>
<br>
                     
</body>  
</html>  


<?php include('footer.php');?>
