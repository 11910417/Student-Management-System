<?php  
session_start();
if(isset($_POST['send'])){
$username2=$_POST['username2'];
$email=$_POST['email'];
$message=$_POST['message'];



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
              $stmt=$conn->prepare("insert into contact(username2,email,message)
              values(?,?,?)");
            $stmt->bind_param("sss",$username2 , $email,$message);
            $stmt->execute();
            header('location:contactInfo.php');
            $stmt->close();
            $conn->close();
       }
       
}

?>  
