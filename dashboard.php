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
                         
   $s1 = mysqli_query($db,"select * FROM client ");        
   $d = mysqli_fetch_array($s1); 
?>
<!DOCTYPE html>
<html lang="en">
  
  <head>
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

      <!-- partial:partials/_sidebar.html -->
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
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="../../index.html"></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown d-none d-lg-block">
                <a class="nav-link btn btn-success create-new-button" href="form.php">+ Create New Project</a>
              </li>
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
                    <p class="preview-subject mb-1">Logout</p>
                    
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
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h4 class="mb-0">Health Projects</h4>
                          <p class="text-warning ml-2 mb-0 font-weight-medium">(8%)</p>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-danger ">
                          <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
</svg></span>
                        </div>
                      </div>
                    </div>
                    <br>
                    <h6 class="text-muted font-weight-normal">of total projects</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h4 class="mb-0">Social Projects</h4>
                          <p class="text-warning ml-2 mb-0 font-weight-medium">(11%)</p>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-primary">
                          <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
  <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
</svg></span>
                        </div>
                      </div>
                    </div>
                    <br>
                    <h6 class="text-muted font-weight-normal">of total projects</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h4 class="mb-0">Governemnt Projects</h4>
                          <p class="text-warning ml-2 mb-0 font-weight-medium">(5%)</p>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-info">
                          <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-building" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694 1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
  <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
</svg> </span>
                        </div>
                      </div>
                    </div>
                    <br>
                    <h6 class="text-muted font-weight-normal">of total projects</h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h4 class="mb-0">Gaming Projects</h4>
                          <p class="text-warning ml-2 mb-0 font-weight-medium">(3%)</p>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="icon icon-box-success ">
                          <span> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-controller" viewBox="0 0 16 16">
  <path d="M11.5 6.027a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm2.5-.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-1.5 1.5a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1zm-6.5-3h1v1h1v1h-1v1h-1v-1h-1v-1h1v-1z"/>
  <path d="M3.051 3.26a.5.5 0 0 1 .354-.613l1.932-.518a.5.5 0 0 1 .62.39c.655-.079 1.35-.117 2.043-.117.72 0 1.443.041 2.12.126a.5.5 0 0 1 .622-.399l1.932.518a.5.5 0 0 1 .306.729c.14.09.266.19.373.297.408.408.78 1.05 1.095 1.772.32.733.599 1.591.805 2.466.206.875.34 1.78.364 2.606.024.816-.059 1.602-.328 2.21a1.42 1.42 0 0 1-1.445.83c-.636-.067-1.115-.394-1.513-.773-.245-.232-.496-.526-.739-.808-.126-.148-.25-.292-.368-.423-.728-.804-1.597-1.527-3.224-1.527-1.627 0-2.496.723-3.224 1.527-.119.131-.242.275-.368.423-.243.282-.494.575-.739.808-.398.38-.877.706-1.513.773a1.42 1.42 0 0 1-1.445-.83c-.27-.608-.352-1.395-.329-2.21.024-.826.16-1.73.365-2.606.206-.875.486-1.733.805-2.466.315-.722.687-1.364 1.094-1.772a2.34 2.34 0 0 1 .433-.335.504.504 0 0 1-.028-.079zm2.036.412c-.877.185-1.469.443-1.733.708-.276.276-.587.783-.885 1.465a13.748 13.748 0 0 0-.748 2.295 12.351 12.351 0 0 0-.339 2.406c-.022.755.062 1.368.243 1.776a.42.42 0 0 0 .426.24c.327-.034.61-.199.929-.502.212-.202.4-.423.615-.674.133-.156.276-.323.44-.504C4.861 9.969 5.978 9.027 8 9.027s3.139.942 3.965 1.855c.164.181.307.348.44.504.214.251.403.472.615.674.318.303.601.468.929.503a.42.42 0 0 0 .426-.241c.18-.408.265-1.02.243-1.776a12.354 12.354 0 0 0-.339-2.406 13.753 13.753 0 0 0-.748-2.295c-.298-.682-.61-1.19-.885-1.465-.264-.265-.856-.523-1.733-.708-.85-.179-1.877-.27-2.913-.27-1.036 0-2.063.091-2.913.27z"/>
</svg></span>
                        </div>
                      </div>
                    </div>
                    <br>
                    <h6 class="text-muted font-weight-normal">of total projects</h6>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="row">
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h4 class="mb-0">Real-estatet projects</h4>
                          <p class="text-warning ml-2 mb-0 font-weight-medium">(23%)</p>
                        </div>
                        <br>
                        <h6 class="text-muted font-weight-normal">of total projects</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-codepen text-primary ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h4 class="mb-0">Business Projects</h4>
                          <p class="text-warning ml-2 mb-0 font-weight-medium">(34%)</p>
                        </div>
                        <br>
                        <h6 class="text-muted font-weight-normal">of total projects</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-wallet-travel text-danger ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h4 class="mb-0">Remaining Projects</h4>
                          <p class="text-warning ml-2 mb-0 font-weight-medium">(18%)</p>
                        </div>
                        <br>
                        <h6 class="text-muted font-weight-normal">of total projects</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class="icon-lg mdi mdi-monitor text-success ml-auto"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Company Project</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> Client Name </th>
                            <th> Order No </th>
                            <th> Product Cost </th>
                            <th> Project </th>
                            <th> Payment Mode </th>
                            <th> Start Date </th>
                            <th> Payment Status </th>
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

            <div class="row">  
              <div class="col-12 grid-margin m-0">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">To Do list in the project</h4>
                    <div class="add-items d-flex">
                      <input type="text" class="form-control todo-list-input" placeholder="Enter Project name & date">
                      <button class="add btn btn-primary todo-list-add-btn">Add</button>
                    </div>
                    <div class="list-wrapper">
                      <ul class="d-flex flex-column-reverse text-white todo-list todo-list-custom">
                        <li>
                          <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox"> Online-Store Projects    &ensp; &ensp;&ensp;  14/5/2020</label>
                          </div>
                          <i class="remove mdi mdi-close-box"></i>
                        </li>
                        <li>
                          <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox">Emviromental&ensp; &ensp;&ensp;&ensp; &ensp;&ensp; 11/1/2021   </label>
                          </div>
                          <i class="remove mdi mdi-close-box"></i>
                        </li>
                        <li class="completed">
                          <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox" checked> Regulations & legal Projects &ensp; &ensp;&ensp;  30/7/2021</label>
                          </div>
                          <i class="remove mdi mdi-close-box"></i>
                        </li>
                        <li>
                          <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox"> Canvas Projects &ensp; &ensp;&ensp;   8/12/2021 </label>
                          </div>
                          <i class="remove mdi mdi-close-box"></i>
                        </li>
                        <li>
                          <div class="form-check form-check-primary">
                            <label class="form-check-label">
                              <input class="checkbox" type="checkbox"> Sports Projects   &ensp; &ensp;&ensp;   6/1/2022 </label>
                          </div>
                          <i class="remove mdi mdi-close-box"></i>
                        </li>
                      </ul>
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


    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/todolist.js"></script>
    <script src="assets/js/dashboard.js"></script>
    

  </body>
</html>
