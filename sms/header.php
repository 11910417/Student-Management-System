<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>header</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script><!--jquery cdn-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> 
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script><!--jquery cdn-->
<style>
navbar-toggler-icon:hover{
  max-height:999px;
}
ul li:hover ul{
 max-height:999px;
}
.d-flex
{
  width:400px;
  background-color:black;
}

    </style>
    </head> 
    <body >
      <div style="color:white; background-color:#212529;">
      
      
    
    
    <nav class="navbar fixed navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <h1 style="color:white;">Student Management System</h1>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" >
       
        <pre>             </pre>
      <!--  <li><form class="d-flex"><input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"><button class="btn btn-outline-warning" type="submit">Search</button></form>
-->  </li>   
</ul>
        <ul><a href="login.php"  class="btn btn-light" data-toggle="tooltip" data-placement="top" title="Login">Login</a>
            <a href="signup.php"  class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Sign up">Sign-up</a>

</ul>
    </div>
  </div>
</nav> 
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
   $(document).ready(function(){
  $('.navbar-toggler-icon').click(function(){
$('.collapse navbar-collapse').toggle('1000');
});
   }
   );
  </script>   
</body>
</html> 