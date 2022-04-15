<?php

session_start();
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username2']);
  header("location: login.php");
} 
$Id = $_GET['Update_Std_Id'];

include('connection.php');
if(isset($_POST['update'])){
  

$username2 = $_POST['username2'];
$course = $_POST['course'];
$class = $_POST['class'];
$year = $_POST['year'];


$query = " UPDATE student SET Id='$Id', username2= '$username2' , course= '$course',class='$class', year= '$year' WHERE Id = $Id "; 

$res = mysqli_query($conn,$query);
if($res){
header('location:searchStudent.php');
}
else
{
    ?>
    <script>
        alert('Not updated');
        </script>
        <?php
}

}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Update Course</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
      <script type="text/javascript">
         $(function() {
            $( "#year" ).datepicker({dateFormat: 'yy'});
         });
      </script>
<style>
    body{
        background-color:#ffed4b;
        
      
    }
 /*   .a{
        border:2px solid black;
        width:400px;
        padding:20px;
        background-color:aqua;
        border-radius:4px;
        font-size:20px;
    }*/
    .b{
        border:2px solid black;
        margin:20px 300px;
        padding:20px;
        background-color:aqua;
        border-radius:4px;
        font-size:20px;
    }
    .c{
        margin: 10px;
        border:2px solid black;
        padding:20px;
        background-color:aqua;
    }
    h1{
        background-color:black;
        color:white;
        padding:4px;
        font-style:normal;
    }
    h2{
        background-color:black;
        color:white;
        padding:4px;
    }
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
<div class="b">
        <div class="mb-3">
        <h2><center>Update your course here</center></h2>
        <br>
        <form action="searchStudent.php" method="post">
        <label>Student Username</label><br>
        <input type="text" name="username2" value="<?php echo $_SESSION['username2'];?>" class="form-control" /><br><br>
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

       <center> <input type="submit" class="btn btn-warning" name="update" value="Update"/></center>
</div>
</form>
</div>
</div>
</body>
</html>
<?php include('footer.php'); ?>
