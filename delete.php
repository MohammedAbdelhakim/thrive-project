<?php

session_start();
if(isset($_SESSION['x'])){
// header("location:dashboard.php");
} else{
  header("location:login.php");
  exit();
}

    include ('server1.php');
    $id = $_GET['id'];                             
    $query = "delete from client where id = '$id'";
    $del = mysqli_query($db,$query);
    if($del){                           
        mysqli_close($db);                        
        header("location:view.php");  
    }

     else{
       echo "Error deleting record";
    }
 ?>