<?php session_start();
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username2']);
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
    <script src="https://kit.fontawesome.com/fba543a371.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
      <!--  <meta charset="utf-8">
        <title>Create new student</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
        
        
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js">
      </script>
      <script type="text/javascript">
         $(function() {
            $( "#year" ).datepicker({dateFormat: 'yy'});
         });
      </script>
<style>
    
 /*   .a{
        border:2px solid black;
        width:400px;
        padding:20px;
        background-color:aqua;
        border-radius:4px;
        font-size:20px;
    }*/
    .header{
        width:40%;
    }
    form{
        width:40%;
    }
    .
   
    .flex-container {
  display: flex;
}
.flex-container > div {
  margin: 10px;
  padding: 20px;
  width:600px;
}
#b1{
    margin:15px;
    padding:10px;
}

#b1 a:hover{
 color:yellow;
}
    </style>
    </head>
<body>
<?php include('header2.php'); ?>
    <br>
    <!--
<h1 class="h1"><center>Create New Student</center></h1>
<div class="flex-container">
    <div class="a">
    <form method="post">
        <div class="mb-3">
        <h2><center>Personal Information</center></h2>
        <br>
        <label>Student Name</label><br>
        <input type="text" name="name"  class="form-control"/><br><br>
        <label>Student Email</label><br>
        <input type="email" name="email" class="form-control" id="Email1" aria-describedby="email"/><br><br>
        <label>Mobile no.</label><br>
        <input type="text" name="mobile" class="form-control"/><br><br>
        <label>Date of Birth</label><br>
        <input type="date" name="date" class="form-control"/><br><br>
    
</div>
</div>-->

        <div class="mb-3">
            <div class="header">
            <h2 style="color:white;"><center>Add your courses here</center></h2>
</div>
            <form action="databaseCourse.php" method="post">
      
        <br>
        <label>Student Username</label><br>
        <input type="text" name="username2" value="<?php echo $_SESSION['username2'];?>" class="form-control" ><br><br>
        <label>Choose your Course</label><br>
        <select name="course" class="form-select" aria-label="select">
            <option value="Physics">Physics</option>
            <option value="Chemistry">Chemistry</option>
            <option value="Maths">Maths</option>
            <option value="Computer">Computer</option>
            <option value="English">English</option>
            <option value="Biology">Biology</option>
            <option value="History">History</option>
            <option value="Civics">Civics</option>
            <option value="Geography">Geography</option>
</select>
<br><br>
<label>Select your class</label>
<select name="class" class="form-select" aria-label="select">
            <option value="11">11th</option>
            <option value="12">12th</option>
</select>
<br><br>
<label>Academic Year</label><br>
        <input type="text" id="year" name="year" class="form-control"/>
<br><br>

       <center> <input type="submit" class="btn btn-warning" name="add" value="Add"/></center>
</div>
</form>
</div>
<br>
<br>
<br>
</body>
</html>
<?php include('footer.php'); ?>
