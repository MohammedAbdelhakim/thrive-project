<?php

if(!isset($_SESSION)){              
    session_start();
    if(isset($_SESSION['x'])) {
        header("location:dashboard.php");
    }                    
}
                                      
$error  = array();                   
$error1 = array(); 
$error2 = array(); 
$error3 = array(); 
$error4 = array(); 
$error5 = array();
$error6 = array();
$error7 = array(); 
$error8 = array();
$error9 = array();
$error10= array();
$error11= array();
$error12 = array();
$error13 =  array();
$error16 = array();

$db =mysqli_connect('localhost','root','','thrive');           




if(isset($_POST['submit'])){               
    $user = mysqli_real_escape_string($db , $_POST['username']);       
    $email = mysqli_real_escape_string($db , $_POST['email']);         
    $password = mysqli_real_escape_string($db , $_POST['password']);
    $con = mysqli_real_escape_string($db , $_POST['con']);
    $company = mysqli_real_escape_string($db , $_POST['company']);
    $address = mysqli_real_escape_string($db , $_POST['address']);
    $logo = mysqli_real_escape_string($db , $_POST['logo']);

if(empty($user)){             
    array_push($error , 'Enter username');            
}
if(empty($email)){
    array_push($error1 , 'Enter email');
}
if(empty($password)){
    array_push($error2 , 'Enter password');
}
if(empty($con)){
    array_push($error3 , 'Enter Confirm password');
}

if($password!=$con){
    array_push($error4 , 'Password not match');
}
if(empty($company)){
    array_push($error5 , 'Enter The Company Name');
}
if(empty($address)){
    array_push($error6 , 'Enter The Company Address');
}
if(empty($logo)){
    array_push($error7 , 'Select The Company Logo');
}

if(count($error) == 0){
    $sql = "INSERT INTO register (name,email,password,companyname,logo,companyaddress)  Values ('$user' , '$email' , '$password','$company','$logo','$address')";    
    $result  = mysqli_query($db , $sql);
    if($result){
    $_SESSION['m'] = 'You Are Registed You Will Redirect to Login Page' ; 
    header("refresh:5;login.php"); 
    }else{
        $_SESSION['q'] = 'Username already exist';
    }
}

}  






if(isset($_POST['login'])){
    $user = mysqli_real_escape_string($db , $_POST['username']);       
    $password = mysqli_real_escape_string($db , $_POST['password']);
if(empty($user)){                                                   
    array_push($error , 'Enter username');            
}
if(empty($password)){
    array_push($error1 , 'Enter password');
}
if(count($error) ==0){
    $sql = "SELECT * FROM register WHERE name='$user' AND password='$password' ";
    $result = mysqli_query($db , $sql); 
    if(mysqli_num_rows($result)==1){      
        $_SESSION['x']=$user;            
        // $_SESSION['success']=" Welcome you are logged in";  
        header('location:dashboard.php');    
    }else{
        $_SESSION['y'] = "There something Wrong";
    }
}
}

if(isset($_POST['ok'])){
    $name = mysqli_real_escape_string($db , $_POST['name']);       
    $order = mysqli_real_escape_string($db , $_POST['order']);         
    $cost = mysqli_real_escape_string($db , $_POST['cost']);
    $project = mysqli_real_escape_string($db , $_POST['project']);
    $mode = mysqli_real_escape_string($db , $_POST['mode']);
    $date = mysqli_real_escape_string($db , $_POST['date']);
    $status = mysqli_real_escape_string($db , $_POST['status']);
    

    if(empty($name)){             
        array_push($error11 , 'Enter Client Name');            
    }
    if(empty($order)){
        array_push($error12 , 'Enter Order Number');
    }
    if(empty($cost)){
        array_push($error13 , 'Enter Product Cost');
    }

    if(empty($date)){
        array_push($error16 , 'Enter Date');
    }
    if(count($error) ==0){
        $sql = "INSERT INTO client (clientname,orderno,productcost,project,paymentmode,startdate,paymentstatus)  Values ('$name' , '$order' , '$cost','$project','$mode','$date' , '$status')";    
        mysqli_query($db , $sql); 
        $_SESSION['success']="Data Inserted Successfully";                              
        }
}

if(isset($_GET['logout'])){                          
    session_destroy();                                  
    unset($_SESSION['x']);        
    header("location:login.php");
   
}


?>