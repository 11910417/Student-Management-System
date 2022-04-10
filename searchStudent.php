<?php
session_start();
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username2']);
        header("location: login.php");
    }
  

    if(isset($_GET['search']))
    {
        $valueToSearch2 = $_GET['valueToSearch2'];
        // search in all table columns
        // using concat mysql function
        $query = " SELECT * FROM student WHERE CONCAT(Id,username2,course,class,year) LIKE '%$valueToSearch2%'";
        $search_result = filterTable($query);
        
    }
     else {
        $query = "SELECT * FROM student";
        $search_result = filterTable($query);
    }
    
    // function to connect and execute the query
    function filterTable($query)
    {
        $connect = mysqli_connect("localhost", "root", "", "sms");
        $filter_Result = mysqli_query($connect, $query);
        return $filter_Result;
    }
    
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title>Bootstrap 4 Bordered Table</title>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style type="text/css">
.bs-example{
margin: 20px;
}
</style>
<script type="text/javascript">
$(document).ready(function(){
$('[data-toggle="tooltip"]').tooltip();   
});
</script>
<style>
       * {
  box-sizing: border-box;
}

        table,th,td{
                color:white;
                background-color:grey;
                border:1px solid black;
                padding:6px;
                border-radius:2px;
                margin:10px 0;
                justify-content: center;
        }
        .d-flex{
            margin:10px 450px;
        }
      
       
        
        </style>
    </head>
    <body>
    <div class="col-md-12">
<div class="page-header">
  
<h2 style="color:white; background-color:#212529;padding:20px;"><center>Students Course List</center></h2>

  <a class="btn btn-primary" style="margin:0 50px;" data-toggle="tooltip" data-placement="top" style="color:black;" name="insert" href="student.php" title="Add courses"><i class="material-icons" style="font-size:36px">person_add</i>
        </a>
</div>
 
 <form class="d-flex" action="searchStudent.php" method="GET">
            <input class="form-control me-2" type="text" name="valueToSearch2" placeholder="Search" value="<?php if(isset($_GET['valueToSearch2'])){echo $_GET['valueToSearch2'];}?>" aria-label="Search">
        <button class="btn btn-outline-primary" name="search" type="submit">Search</button></form>

            <table class="table justify-content-center" style="background-color:grey;">
            <thead class="thead-dark">
                <tr>
                <th>ID</th>
<th>Student Username</th>
<th>Course</th>
<th>Class</th>
<th>Academic Year</th>
<th>Operation</th>
                </tr>
    </thead>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                    <tbody>
                <tr>
                <td><?php echo $row["Id"]; ?></td>
<td><?php echo $row["username2"]; ?></td>
<td><?php echo $row["course"]; ?></td>
<td><?php echo $row["class"]; ?></td>
<td><?php echo $row["year"]; ?></td>


<td>
      
<a href="updateCourse.php?Update_Std_Id=<?php echo $row['Id'];?>" style="color:black;" data-toggle="tooltip" name="update" data-placement="top" title="Update"><i class="material-icons" >edit</i></a>
<a data-toggle="tooltip" name="delete" data-placement="top" name="delete" href="deleteCourse.php?Delete_Std_Id=<?php echo $row['Id'];?>" style="color:black;" title="Delete"><i class="material-icons" style="color:red;">delete</i></a>  </td>
                </tr>
                </tbody>
                <?php endwhile;?>
            </table>
                </div>
      
    </body>
</html>
<?php include('footer.php');?>