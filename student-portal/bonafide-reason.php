<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bonafide Certificate</title>
    <link rel="stylesheet" href="vendors/feather/feather.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
    <link rel="stylesheet" href="css/vertical-layout-light/style.css">
    <link rel="shortcut icon" href="images/favicon.png" />

    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Maven+Pro:700,400' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/clndr.css" type="text/css" />

    <link rel="stylesheet" href="vendors/select2/select2.min.css">
    <link rel="stylesheet" href="vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  </head>

  <body>
    
    <?php
      $conn = mysqli_connect("localhost", "root", "", "crce") or die(mysqli_error($conn));  
      error_reporting(0);
      session_start();
      $s_id = $_SESSION['s_id'];
              
      $sql = "SELECT first_name, last_name FROM student WHERE s_id='$s_id'";
      $selectResult = mysqli_query($conn,$sql);
  
      $studentDetails = mysqli_fetch_assoc($selectResult);  
      $sName = $studentDetails["first_name"];
      $slName = $studentDetails["last_name"];
    ?>

    <div class="container-scroller">
      <!-- NAVBAR START -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
          <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo mr-5" href="student-dashboard.php"><img src="images/student-logo.png" class="mr-2" alt="logo"/></a>
            <a class="navbar-brand brand-logo-mini" href="student-dashboard.php"><img src="images/student.png" alt="logo"/></a>
          </div>

          <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="icon-menu"></span>
            </button>
            <ul class="navbar-nav mr-lg-2">
              <li class="nav-item nav-search d-none d-lg-block">
                <div class="input-group">
                  <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                    <span class="input-group-text" id="search">
                      <i class="icon-search"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
                </div>
              </li>
            </ul>
            
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                  <img src="images/faces/face28.jpg" alt="profile"/>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                  <a class="dropdown-item">
                    <i class="ti-settings text-primary"></i>
                    Settings
                  </a>
                  <a class="dropdown-item" href="student-login.php">
                    <i class="ti-power-off text-primary"></i>
                    Logout
                  </a>
                </div>
              </li>

              
              <li class="nav-item nav-settings d-none d-lg-flex">
                <a class="nav-link" href="#">
                  <i class="icon-ellipsis"></i>
                </a>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="icon-menu"></span>
            </button>
          </div>
        </nav>
      <!-- NAVBAR END -->


      <div class="container-fluid page-body-wrapper">
        <!-- UPCOMING EVENTS START -->
          <div id="right-sidebar" class="settings-panel">
            <i class="settings-close ti-close"></i>
            <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">UPCOMING EVENTS</a>
              </li>
            </ul>
            <div class="tab-content" id="setting-content">
              <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
                <div class="events pt-4 px-3">
                  <div class="wrapper d-flex mb-2">
                    <i class="ti-control-record text-primary mr-2"></i>
                    <span>Feb 11 2023</span>
                  </div>
                  <p class="mb-0 font-weight-thin text-gray">Workshop on Startup at Seminar Hall</p>
                  <p class="text-gray mb-0"></p>
                </div>

                <div class="events pt-4 px-3">
                  <div class="wrapper d-flex mb-2">
                    <i class="ti-control-record text-primary mr-2"></i>
                    <span>March 7 2023</span>
                  </div>
                  <p class="mb-0 font-weight-thin text-gray">Cresendo Event on </p>
                  <p class="text-gray mb-0 "> 8 - 11 March 2023</p>
                </div>

                <div class="events pt-4 px-3">
                  <div class="wrapper d-flex mb-2">
                    <i class="ti-control-record text-primary mr-2"></i>
                    <span>Feb 27 2023</span>
                  </div>
                  <p class="mb-0 font-weight-thin text-gray">Euphoria dance submission</p>
                  <p class="text-gray mb-0 "> final date</p>
                </div>

                <div class="events pt-4 px-3">
                  <div class="wrapper d-flex mb-2">
                    <i class="ti-control-record text-primary mr-2"></i>
                    <span>Feb 7 2023</span>
                  </div>
                  <p class="mb-0 font-weight-thin text-gray">National Project Competition at</p>
                  <p class="text-gray mb-0 "> FR.CRCE ground.</p>
                </div>
              </div>
            </div>
          </div>
        <!-- UPCOMING EVENTS END -->

        <!-- SIDEBAR START -->
          <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="student-dashboard.php">
                  <i class="icon-grid menu-icon"></i>
                  <span class="menu-title">Dashboard</span>
                </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="student-train.php">
                  <i class="icon-flag menu-icon"></i>
                  <span class="menu-title">Railway Concession</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="student-bonafide.php">
                  <i class="icon-paper menu-icon"></i>
                  <span class="menu-title">Bonafide</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="student-dues.php">
                  <i class="icon-star menu-icon"></i>
                  <span class="menu-title">Check Dues</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="student-library-books.php">
                  <i class="icon-book menu-icon"></i>
                  <span class="menu-title">Library Books</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                  <i class="icon-archive menu-icon"></i>
                  <span class="menu-title">New ID Card</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                  <i class="icon-tag menu-icon"></i>
                  <span class="menu-title">Courier Service</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                  <i class="icon-head menu-icon"></i>
                  <span class="menu-title">Profile</span>
                </a>
              </li>

          
            </ul>
          </nav>
        <!-- SIDEBAR END -->

        <div class="main-panel">
           <!-- DASHBOARD START -->
            <div class="content-wrapper">
              <!-- WELCOME START -->
                <div class="row">
                  <div class="col-md-12 grid-margin">
                    <div class="row">
                      <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                        <h3 class="font-weight-bold">Welcome Back <?php echo " {$sName} {$slName}"; ?></h3>
                      </div>
                    </div>
                  </div>
                </div>
              <!-- WELCOME END -->
              
                <div class="col-md-8 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Reason for bonafide</h4>
                            <p class="card-description">Select Reason for Bonafide Certificate.</p>
                            <form action="" method = "POST">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radio" value="Bus concession">
                                                    Bus Concession
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radio" value="Income Certificate">
                                                    Income Certificate
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radio" value="Industrial visit">
                                                    Industrial visit
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radio" value="Educational loan">
                                                    Educational loan
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="radio" value="Visa Application">
                                                    Visa Application
                                                </label>
                                            </div>
                                            
                                            <br>

                                            <div>
                                                <input 
                                                    id="submit" 
                                                    type="submit" 
                                                    name="submit" 
                                                    class="btn btn-primary btn-icon-text"
                                                    value="SUBMIT" 
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                <!-- FOOTER START -->
                    <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
                    </div>
                    </footer>
                <!-- FOOTER END -->
            </div>
           <!-- DASHBOARD END -->
        </div>
      </div>
    </div>

    <?php		
        if($_POST['submit'])
        {
            if($_REQUEST["radio"] == "Bus concession") 
            {
                $reason = "Bus Concession";
            } 

            else if($_REQUEST["radio"] == "Income Certificate") 
            {
                $reason = "Income Certificate";
            }

            else if($_REQUEST["radio"] == "Industrial visit") 
            {
                $reason = "Industrial visit";
            }

            else if($_REQUEST["radio"] == "Educational loan") 
            {
                $reason = "Educational loan";
            }

            else if($_REQUEST["radio"] == "Visa Application") 
            {
                $reason = "Visa Application";
            }
			
            $query = "INSERT INTO student_bonafide_map(s_id, issue_date, reason) VALUES ($s_id, CURRENT_DATE, '$reason')";
            $data = mysqli_query($conn, $query);
            
     
            if($data)
            {
                $_SESSION['reason'] = $reason;		
                echo "<script type='text/javascript'>alert('Your Bonafide Certificate PDF is ready'); window.open('bonafide-certificate.php'); </script>";

            }
            else 
            {
              echo "<script type='text/javascript'>alert('Your choosed reason in not saved in server. Contact to Office.');  location.replace('bonafide-reason.php') </script>";
            }    
        }
    ?>

    <script src="vendors/js/vendor.bundle.base.js"></script>
    <script src="vendors/chart.js/Chart.min.js"></script>
    <script src="vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="js/dataTables.select.min.js"></script>
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <script src="js/dashboard.js"></script>
    <script src="js/Chart.roundedBarCharts.js"></script>
    
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script src="js/jquery-1.11.1.min.js"></script>
    <link href='//fonts.googleapis.com/css?family=Maven+Pro:700,400' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/clndr.css" type="text/css" />
        <script src="js/underscore-min.js"></script>
        <script src= "js/moment-2.2.1.js"></script>
        <script src="js/clndr.js"></script>
        <script src="js/site.js"></script>
        <script src="../../js/select2.js"></script>

    <!---Google Analytics Designmaz.net-->
    <script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-35751449-15', 'auto');ga('send', 'pageview');</script>
				
  </body>
</html>