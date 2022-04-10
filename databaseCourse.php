<?php
$username2=$_POST['username2'];
$course=$_POST['course'];
$class=$_POST['class'];
$year=$_POST['year'];


//database connection
       $servername = "localhost";  
       $username = "root";  
       $password = "";  
       $db="sms";
       $conn = new mysqli($servername , $username , $password, $db);
       //check connection
       if($conn->connect_error)
       {
           echo "Connection is failed.";
       }
       else{
              $stmt=$conn->prepare("insert into student(username2,course,class,year)
              values(?,?,?,?)");
            $stmt->bind_param("ssss", $username2, $course , $class , $year);
            $stmt->execute();
            header('location:searchStudent.php');
            $stmt->close();
            $conn->close();
       }

?>  
