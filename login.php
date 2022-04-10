
<?php include('server.php');?>
<!DOCTYPE html>
<html>  
    <head>
   <!-- <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
            <link rel="stylesheet" type="text/css" href="style.css">
       <style>
            
                        
                       </style>
                       </head>
                       <body style="background-color:#ffed4b">
                       <?php include('header.php');?>
                       <div class="header">
  	               <h2>Login</h2>
                     </div>
                           
                       <form action="login.php" method="post">
                       <?php include('errors.php'); ?>
                       <div class="mb-3">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" aria-describedby="username2" name="user2" value="<?php echo $username2;?>">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" aria-describedby="password2" name="pass">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="check">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <input type="submit" class="btn btn-primary" name="login" value="Login">
</form>
<br>
                  
                    <?php include('footer.php');?>
</body>  
</html>  
