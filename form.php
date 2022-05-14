<?php

session_start();
if(isset($_SESSION['x'])){
 // header("location:dashboard.php");
} else{
  header("location:login.php");
  exit();
}

   include ('server1.php');
   $u = $_SESSION['x'];                          
   $s = mysqli_query($db,"select * FROM register WHERE name='$u' ");        
   $data = mysqli_fetch_array($s); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Thrive</title>
    <link rel="icon" type="image/x-icon" href="assets1/img/54.jpg">
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/x-icon" href="assets/img/54.jpg">
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand " href="dashboard.php"><h3 style="color: red;">Thrive</h3></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="<?php echo $data['logo']?>" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal"><?php echo $data['companyname']?></h5>
                  <span>Logged In</span>
                </div>
              </div>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="dashboard.php">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Home</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="form.php">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Create Project</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="view.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">View Projects</span>
            </a>
          </li>
          
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="../../index.html"></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item nav-settings d-none d-lg-block">
                <a class="nav-link" href="#">
                  <i class="mdi mdi-view-grid"></i>
                </a>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator" href="#">
                  <i class="mdi mdi-email"></i>
                  <span class="count bg-success"></span>
                </a>
              </li>
              <li class="nav-item dropdown border-left">
                <a class="nav-link count-indicator" href="#" >
                  <i class="mdi mdi-bell"></i>
                  <span class="count bg-danger"></span>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="<?php echo $data['logo']?>" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name"><?php echo $data['companyname']?></p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <a class="dropdown-item preview-item" href="logout.php">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1">Log out</p>
                    </div>
                  </a>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Create New Project</h4>
                    <p class="card-description"> Insert Client Info. </p>
                    
                      <?php
                        if (isset($_SESSION['success'])) { 
                        ?>
                        <center>
                          <div class="badge badge-outline-success " style="width: 600px; height:40px; font-size:20px">
                            <?php                      
                              echo $_SESSION['success'];
                              unset($_SESSION['success']);
                            ?>
                          </div>
                        </center>    
                      <?php
                        }
                      ?>  
                    
                    <form class="forms-sample" method="POST">
                      <div class="form-group">
                        <label for="exampleInputName1">Client Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputName1">
                        <?php 
                                if (count($error11)>0):                                //low l2h el error 2kbr mn zero
                                ?>
                                <div class="error" style="color: red; font-size:18px; ">
                                    <?php
                                    foreach($error11 as $error21){
                                        echo $error21;
                                        echo"<br>";
                                    }
                                    ?>
                                </div>
                             <?php endif ?>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Order No</label>
                        <input type="text" name="order" class="form-control" id="exampleInputEmail3">
                        <?php 
                                if (count($error12)>0):                                //low l2h el error 2kbr mn zero
                                ?>
                                <div class="error" style="color: red; font-size:18px; ">
                                    <?php
                                    foreach($error12 as $error22){
                                        echo $error22;
                                        echo"<br>";
                                    }
                                    ?>
                                </div>
                             <?php endif ?>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Product Cost</label>
                        <input type="text" name="cost" class="form-control" id="exampleInputPassword4" >
                        <?php 
                                if (count($error13)>0):                                //low l2h el error 2kbr mn zero
                                ?>
                                <div class="error" style="color: red; font-size:18px; ">
                                    <?php
                                    foreach($error13 as $error23){
                                        echo $error23;
                                        echo"<br>";
                                    }
                                    ?>
                                </div>
                             <?php endif ?>
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Project</label>
                        <select require name="project" class="form-control" id="exampleSelectGender">
                          <option value="website">Website</option>
                          <option value="mobile aplication">Mobile Aplication</option>
                          <option value="app desgin">App Desgin</option>
                          <option value="dashbaord">Dashboard</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Payment Mode</label>
                        <select name="mode" class="form-control" id="exampleSelectGender">
                          <option value="cash">Cash</option>
                          <option value="credit">Credit Card</option>
                          <option value="online">Online Payment</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Start Date</label>
                        <input type="date" name="date" class="form-control" placeholder="">
                        <?php 
                                if (count($error16)>0):                                //low l2h el error 2kbr mn zero
                                ?>
                                <div class="error" style="color: red; font-size:18px; ">
                                    <?php
                                    foreach($error16 as $error26){
                                        echo $error26;
                                        echo"<br>";
                                    }
                                    ?>
                                </div>
                             <?php endif ?>
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Payment Status</label>
                        <select name="status" class="form-control" id="exampleSelectGender">
                          <option value="approved">Approved</option>
                          <option value="pending">Pending</option>
                          <option value="rejected">Rejected</option>
                        </select>                    
                      </div>
                      <button type="submit" name="ok" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-dark">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/select2/select2.min.js"></script>
    <script src="assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/file-upload.js"></script>
    <script src="assets/js/typeahead.js"></script>
    <script src="assets/js/select2.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>