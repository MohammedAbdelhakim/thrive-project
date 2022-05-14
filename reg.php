<?php include ('server1.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets1/img/54.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets1/css/reg.css">
    <title>Thrive</title>
</head>
<body>
   
    <section class="form">

        <div class="reg">
            <form method="post" action="reg.php">
 
                <div class="container">
                    <h1>Register</h1>
                    <div class="row"> 
                        
                    <?php
                        if (isset($_SESSION['q'])) { 
                        ?>
                        <center>
                          <div class="badge badge-outline-warning " style="width: 600px; height:40px; font-size:20px; background:red; margin-bottom:10px;">
                            <?php                      
                              echo $_SESSION['q'];
                              unset($_SESSION['q']);
                            ?>
                          </div>
                        </center>    
                      <?php
                        }
                      ?>


                    <?php
                        if (isset($_SESSION['m'])) { 
                        ?>
                        <center>
                          <div class="badge badge-success " style="width: 600px; height:40px; font-size:20px; background:green; margin-bottom:10px;">
                            <?php                      
                              echo $_SESSION['m'];
                              unset($_SESSION['m']);
                            ?>
                          </div>
                        </center>    
                      <?php
                        }
                      ?>            

                        <div class="col-md-6 col-sm-12" class="form-control first">
                            <p>Username</p>
                            <input name="username" type="text"  autocomplete="off">
                            <?php 
                                if (count($error)>0):                                
                                ?>
                                <div class="error" style="color: red; font-size:18px; ">
                                    <?php
                                    foreach($error as $error8){
                                        echo $error8;
                                        echo"<br>";
                                    }
                                    ?>
                                </div>
                             <?php endif ?>
                        </div>

                        <div class="col-md-6 col-sm-12" class="form-control first">
                            <p>Email</p>
                            <input name="email" type="email"   autocomplete="off">
                            <?php 
                                if (count($error1)>0):                                //low l2h el error 2kbr mn zero
                                ?>
                                <div class="error" style="color: red; font-size:18px; ">
                                    <?php
                                    foreach($error1 as $error9){
                                        echo $error9;
                                        echo"<br>";
                                    }
                                    ?>
                                </div>
                             <?php endif ?>
                        </div>

                        <div class="col-md-6 col-sm-12" class="form-control first">
                            <p>Password</p>
                            <input name="password" type="password"   autocomplete="off">
                            <?php 
                                if (count($error2)>0):                                //low l2h el error 2kbr mn zero
                                ?>
                                <div class="error" style="color: red; font-size:18px; ">
                                    <?php
                                    foreach($error2 as $error4){
                                        echo $error4;
                                        echo"<br>";
                                    }
                                    ?>
                                </div>
                             <?php endif ?>
                        </div>

                        <div class="col-md-6 col-sm-12" class="form-control first">
                            <p>Confirm Password</p>
                            <input name="con" type="password"   autocomplete="off">
                            
                            <?php 
                                if (count($error3)>0):                                //low l2h el error 2kbr mn zero
                                ?>
                                <div class="error" style="color: red; font-size:18px; ">
                                    <?php
                                    foreach($error3 as $error13){
                                        echo $error13;
                                        echo"<br>";
                                    }
                                    ?>
                                </div>
                             <?php endif ?>
                             
                        </div>

                        <div class="col-md-6 col-sm-12" class="form-control first">
                            <p>Company Name</p>
                            <input name="company" type="text"   autocomplete="off">
                            <?php 
                                if (count($error5)>0):                                //low l2h el error 2kbr mn zero
                                ?>
                                <div class="error" style="color: red; font-size:18px; ">
                                    <?php
                                    foreach($error5 as $error13){
                                        echo $error13;
                                        echo"<br>";
                                    }
                                    ?>
                                </div>
                             <?php endif ?>
                        </div>

                        <div class="col-md-6 col-sm-12" class="form-control first">
                            <p>Company Adress</p>
                            <input name="address" type="text"   autocomplete="off">
                            <?php 
                                if (count($error6)>0):                                //low l2h el error 2kbr mn zero
                                ?>
                                <div class="error" style="color: red; font-size:18px; ">
                                    <?php
                                    foreach($error6 as $error14){
                                        echo $error14;
                                        echo"<br>";
                                    }
                                    ?>
                                </div>
                             <?php endif ?>
                        </div>

                        <div class="col-md-6 col-sm-12" class="form-control first">
                            <p>Logo</p>
                            <input name="logo" type="file" class="input1"   autocomplete="off">
                            <?php 
                                if (count($error7)>0):                                //low l2h el error 2kbr mn zero
                                ?>
                                <div class="error" style="color: red; font-size:18px; ">
                                    <?php
                                    foreach($error7 as $error15){
                                        echo $error15;
                                        echo"<br>";
                                    }
                                    ?>
                                </div>
                             <?php endif ?>
                        </div>

                        <div class="col-md-6 col-sm-12" class="form-control">
                            <button name="submit" type="submit" class="btn btn-danger  button">Sgin Up</button>
                            <p class="p1">Already have an account? <a href="login.php">Sgin In</a></p>
                        </div>
                    </div>
                </div>
        </form>
        </div>
    </div>
      </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>