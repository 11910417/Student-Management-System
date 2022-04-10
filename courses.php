<?php session_start();
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username2']);
  header("location: login.php");
}?> 
<!DOCTYPE html>
<html>
    <head>
    <title>Create new student</title>
   <!-- <meta charset="utf-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
        <script src="https://kit.fontawesome.com/fba543a371.js" crossorigin="anonymous"></script>
        
        
<style>
    body{
        background-color:#ffed4b;
       
      
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
    .card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.8);
}

    .flex-container {
  display: flex;
  flex-wrap: wrap;
}
.flex-container > div {
  margin: 40px;
  padding: 15px;
  width:300px;
  grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
  font-style: italic;
  font-family: Arial, Helvetica, sans-serif;

}

.a{
    padding:8px;
    margin:10px 497px;
}



    </style>
    </head>
<body>
  <?php include('header2.php');?>
    <div class="page-header">
<h1 class="h1"  style="color:white;"><center>Courses Available</center></h1>
</div>
<br>
<br>
<div class="flex-container">
    <div class="a">
    <div class="card" style="width: 18rem; ">
  <img src="images/physics.jpg" class="card-img-top" alt="...">
  <div class="card-body">
  <h2  style="color:white;">Physics</h2>
    <p class="card-text">Physics is the natural science that studies matter, its fundamental constituents, its motion and behavior through space and time, and the related entities of energy and force.<br>
      <a href="physics.php">Click here to know more</a></p>
  </div>
</div>
</div>
<div class="b">
    <div class="card" style="width: 18rem; ">
  <img src="images/maths.jpg" class="card-img-top" alt="..." height="252px">
  <div class="card-body">
  <h2 style="color:white;">Maths</h2>
    <p class="card-text">Mathematics (from Ancient Greek μάθημα (máthēma) 'knowledge, study, learning ) is an area of knowledge, which includes the study of such topics as arithmetic and number theory, algebra, geometry, and calculus and analysis.<br>
      <a href="maths.php">Click here to know more</a></p>
  </div>
</div>
</div>
<div class="c">
    <div class="card" style="width: 18rem; ">
  <img src="images/chemistry.jpg" class="card-img-top" alt="..." height="252px">
  <div class="card-body">
  <h2 style="color:white;">Chemistry</h2>
    <p class="card-text">Chemistry is the branch of science concerned with the substances of which matter is composed, the investigation of their properties and reactions, and the use of such reactions to form new substances.<br>
    <a href="chemistry.php">Click here to know more</a></p>
  </p>
  </div>
</div>
</div>
<br>
<div class="d">
    <div class="card" style="width: 18rem; ">
  <img src="images/biology.jpg" class="card-img-top" alt="..." height="252px">
  <div class="card-body">
  <h2 style="color:white;">Biology</h2>
    <p class="card-text">Biology is the study of living organisms, divided into many specialized fields that cover their morphology, physiology, anatomy, behaviour, origin, and distribution.<br>
    <a href="biology.php">Click here to know more</a></p>
  </div>
</div>
</div>
<div class="e">
    <div class="card" style="width: 18rem; ">
  <img src="images/geography.jpg" class="card-img-top" alt="..." height="252px">
  <div class="card-body">
  <h2 style="color:white;">Geography</h2>
    <p class="card-text">Geography is the study of the physical features of the earth and its atmosphere, and of human activity as it affects and is affected by these, including the distribution of populations and resources and political and economic activities.<br>
    <a href="geography.php">Click here to know more</a></p>
  </div>
</div>
</div>
<div class="f">
    <div class="card" style="width: 18rem; ">
  <img src="images/computer.jpg" class="card-img-top" alt="..." height="252px">
  <div class="card-body">
  <h2  style="color:white;">Computer</h2>
    <p class="card-text">A computer is a digital electronic machine that can be programmed to carry out sequences of arithmetic or logical operations (computation) automatically.<br>
      <a href="computer.php">Click here to know more</a></p>
  </div>
</div>
</div>
<br>
<div class="g">
    <div class="card" style="width: 18rem; ">
  <img src="images/history.jpg" class="card-img-top" alt="..." height="252px">
  <div class="card-body">
  <h2 style="color:white;">History and Civics</h2>
    <p class="card-text">Similarities of History and Civics are like two sides of the same coin: both study humankind and its actions taken in the past or present.<br>
      <a href="HistoryandCivics.php">Click here to know more</a></p>
  </div>
</div>
</div>

</div>

</body>
</html>
<?php include('footer.php');?>