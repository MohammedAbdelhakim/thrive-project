<?php

session_start();
if(isset($_SESSION['x'])){
 // header("location:dashboard.php");
} else{
  header("location:login.php");
  exit();
}

   include ('server1.php');
   //include ('delete.php');
   $u = $_SESSION['x'];                          
   $s = mysqli_query($db,"select * FROM register WHERE name='$u' ");        
   $data = mysqli_fetch_array($s); 

   $s1 = mysqli_query($db,"select * FROM client ");        
   $d = mysqli_fetch_array($s1);
   
   
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
    <link rel="stylesheet" href="assets/css/style.css">
  </head>

  <body>
    <div class="container-scroller">
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
        <!-- partial"partials/_navbar.html -->
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
                  <div class="dropdown-divider"></div>
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
          <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Company Project</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th class="text-warning"> Client Name </th>
                            <th class="text-warning"> Order No </th>
                            <th class="text-warning"> Product Cost </th>
                            <th class="text-warning"> Project </th>
                            <th class="text-warning"> Payment Mode </th>
                            <th class="text-warning"> Start Date </th>
                            <th class="text-warning"> Payment Status </th>
                            <th class="text-warning">Operation</th>
                          </tr>
                        </thead>

                        <?php
                             $records = mysqli_query($db,"SELECT * FROM client");
                              while ($d = mysqli_fetch_array($records)) {
                        ?>

                                  <tbody>
                                    <tr>
                                      <td><?php echo $d ['clientname']; ?></td>
                                      <td><?php echo $d ['orderno']; ?>  </td>
                                      <td> <?php echo $d ['productcost']; ?> </td>
                                      <td> <?php echo $d ['project']; ?> </td>
                                      <td> <?php echo $d ['paymentmode']; ?></td>
                                      <td> <?php echo $d ['startdate']; ?> </td>
                                      <td>
                                        <?php
                                          $color = $d ['paymentstatus'];
                                          if($color == 'approved'){
                                        ?>  
                                          <div class="badge badge-outline-success"> <?php echo $d ['paymentstatus']; ?> </div>
                                        <?php
                                         } elseif($color == 'pending'){ 
                                        ?>  
                                          <div class="badge badge-outline-warning"> <?php echo $d ['paymentstatus']; ?> </div>
                                        <?php
                                         } else{
                                        ?>  
                                          <div class="badge badge-outline-danger"> <?php echo $d ['paymentstatus']; ?> </div>
                                        <?php
                                         } 
                                        ?>
                                      </td>
                                      <td>
                                         <a class="btn btn-primary" href="edit.php?id=<?php echo $d['id'];?>">Edit</a>
                                          <button type="submit" name="" class="btn btn-danger"><a style="text-decoration: none; color:white" href="delete.php?id=<?php echo $d['id'];?> ">Delete</a></button>
                                      </td>
                                    </tr>
                                  </tbody>
                        <?php
                          }
                        ?>  
                      </table>
                    </div>
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
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
  </body>
</html>