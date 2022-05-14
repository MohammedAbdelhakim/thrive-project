<?php include ('server1.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets1/img/54.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets1/css/login.css">
    <title>Thrive</title>
</head>
<body>

   <section class="form">

    <div class="login">

                    <?php
                        if (isset($_SESSION['y'])) { 
                        ?>
                        <center>
                          <div class="badge badge-outline-warning " style="width: 360px; height:40px; font-size:20px; background:red; margin-bottom:10px;">
                            <?php                      
                              echo $_SESSION['y'];
                              unset($_SESSION['y']);
                            ?>
                          </div>
                        </center>    
                      <?php
                        }
                      ?>  

        <h3>LOGIN</h3>
        <form method="post" action="login.php">
            <input name="username" type="text" class="form-control" placeholder="Username" autocomplete="off">
            <?php 
                if (count($error)>0):
                ?>
                <div class="error" style="color: red; font-size: 18px">
                    <?php
                    foreach($error as $error20){
                        echo $error20;
                        echo"<br>";
                    }
                    ?>
                </div>
        <?php endif ?>


            <input name="password" type="password" class="form-control" placeholder="Password" autocomplete="off">
            <?php 
                if (count($error1)>0):
                ?>
                <div class="error" style="color: red; font-size: 18px">
                    <?php
                    foreach($error1 as $error21){
                        echo $error21;
                        echo"<br>";
                    }
                    ?>
                </div>
        <?php endif ?> 


            <button name="login" type="submit" class="btn btn-outline-primary">LogIn</button>
            <p>Not a member? <a href="reg.php">Register Now</a> </p>
        </form>
    </div>

    </div>
  </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>