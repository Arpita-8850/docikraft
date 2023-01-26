<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="vendors/feather/feather.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
    <link rel="stylesheet" href="css/vertical-layout-light/style.css">
    <link rel="shortcut icon" href="images/favicon.png" />
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
    
      $query = "SELECT * FROM student_exam_map WHERE s_id='$s_id';";
      $data = mysqli_query($conn, $query);
      $total = mysqli_num_rows($data);
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
              

              <div class="row">
                <!-- TEMPERATURE START -->
                  <div class="col-md-6 grid-margin stretch-card">
                    <div class="card tale-bg">
                      <div class="card-people mt-auto">
                        <img src="images/dashboard/people.svg" alt="people">
                        <div class="weather-info">
                          <div class="d-flex">
                            <div>
                              <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>25<sup>C</sup></h2>
                            </div>
                            <div class="ml-2">
                              <h4 class="location font-weight-normal">Mumbai</h4>
                              <h6 class="font-weight-normal">India</h6>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <!-- TEMPERATURE END -->
                
                <!-- 4 CARDS START -->
                  <?php
                    $code = "SELECT l.dues +  w.dues + ecs.dues AS dues 
                              FROM student AS s, student_library_map AS l, student_workshop_map AS w, student_ecs_map AS ecs  
                              WHERE s.s_id = l.s_id AND s.s_id = w.s_id AND s.s_id = ecs.s_id AND s.s_id = '$s_id';";
                    $count = mysqli_query($conn, $code);
                    $t_dues = mysqli_fetch_assoc($count);

                    if($t_dues['dues'] == NULL) {
                      $dues = 'None';
                    }
                    else {
                      $dues= $t_dues['dues'];
                    }
                  ?>
                  <div class="col-md-6 grid-margin transparent">
                    <div class="row">
                      <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-tale">
                          <div class="card-body">
                            <p class="mb-4">Total Dues Pending</p>
                            <p class="fs-30 mb-2">Rs. <?php echo $dues; ?></p>
                            <p>Complete if any dues pending</p>
                          </div>
                        </div>
                      </div>


                      <?php
                        $code = "SELECT COUNT(bonafide_no) AS t_bonafide FROM student_bonafide_map WHERE s_id='$s_id';";
                        $count = mysqli_query($conn, $code);
                        $bonafide = mysqli_fetch_assoc($count);

                        if($bonafide['t_bonafide'] == NULL) {
                          $bona = 'None';
                        }
                        else {
                          $bona= $bonafide['t_bonafide'];
                        }
                      ?>
                      <div class="col-md-6 mb-4 stretch-card transparent">
                        <div class="card card-dark-blue">
                          <div class="card-body">
                            <p class="mb-4">Total Bonafide Taken</p>
                            <p class="fs-30 mb-2"><?php echo $bona; ?></p>
                            <p>In <?php echo date('F'); ?> month</p>
                          </div>
                        </div>
                      </div>
                    </div>


                    <?php
                      $code = "SELECT MAX(issue_date) AS date FROM student_train_map WHERE s_id='$s_id';";
                      $count = mysqli_query($conn, $code);
                      $train = mysqli_fetch_assoc($count);

                      if($train['date'] == NULL) {
                        $con = 'None';
                      }
                      else {
                        $con= $train['date'];
                      }
                    ?>
                    <div class="row">
                      <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                        <div class="card card-light-blue">
                          <div class="card-body">
                            <p class="mb-4">Last Concession Issued</p>
                            <p class="fs-30 mb-2"><?php echo $con; ?></p>
                          </div>
                        </div>
                      </div>



                      <?php
                        $code = "SELECT COUNT(book_id) as t_book FROM student_library_map WHERE s_id='$s_id';";
                        $count = mysqli_query($conn, $code);
                        $books = mysqli_fetch_assoc($count);

                        if($books['t_book'] == NULL) {
                          $book = 'None';
                        }
                        else {
                          $book= $books['t_book'];
                        }
                      ?>
                      <div class="col-md-6 stretch-card transparent">
                        <div class="card card-light-danger">
                          <div class="card-body">
                            <p class="mb-4">Total Books Borrowed</p>
                            <p class="fs-30 mb-2"><?php echo $book; ?></p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <!-- 4 CARDS END -->
              </div>

              <!-- ATTENDANCE START -->  
                <div class="row">
                  <div class="col-md-12 grid-margin stretch-card">
                    <div class="card position-relative">
                      <div class="card-body">
                        <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2" data-ride="carousel">
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <div class="row">
                                <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                                  <div class="ml-xl-4 mt-3">
                                  <p class="card-title">Attendance Reports</p>
                                    <h1 class="text-primary">Good</h1>
                                    <h3 class="font-weight-500 mb-xl-4 text-primary"></h3>
                                    <p class="mb-2 mb-xl-0">The total number of Attendance depends upon both lecture and practicals.</p>
                                  </div>  
                                  </div>
                                <div class="col-md-12 col-xl-9">
                                  <div class="row">
                                    <div class="col-md-11 border-right border-left">
                                      <div class="table-responsive mb-3 mb-md-0 mt-3">

                                        <?php
                                          $sql = "SELECT robotics, mmvr, nlp, pm FROM student_ecs_map WHERE s_id='$s_id'";
                                          $selectResult = mysqli_query($conn,$sql);

                                          $studentDetails = mysqli_fetch_assoc($selectResult);  
                                          $robotics = $studentDetails["robotics"];
                                          $mmvr = $studentDetails["mmvr"];
                                          $nlp = $studentDetails["nlp"];
                                          $pm = $studentDetails["pm"];
                                        ?>
                                        <table class="table table-borderless report-table">
                                          <tr>
                                            <td class="text-muted">Robotics</td>
                                            <td class="w-100 px-0">
                                              <div class="progress progress-md mx-4">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo " {$robotics}"; ?>%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                              </div>
                                            </td>
                                            <td><h5 class="font-weight-bold mb-0"><?php echo " {$robotics}"; ?>%</h5></td>
                                          </tr>
                                          <tr>
                                            <td class="text-muted">Multi Media</td>
                                            <td class="w-100 px-0">
                                              <div class="progress progress-md mx-4">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo " {$mmvr}"; ?>%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                              </div>
                                            </td>
                                            <td><h5 class="font-weight-bold mb-0"><?php echo " {$mmvr}"; ?>%</h5></td>
                                          </tr>
                                          <tr>
                                            <td class="text-muted">NLP</td>
                                            <td class="w-100 px-0">
                                              <div class="progress progress-md mx-4">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: <?php echo " {$nlp}"; ?>%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                              </div>
                                            </td>
                                            <td><h5 class="font-weight-bold mb-0"><?php echo " {$nlp}"; ?>%</h5></td>
                                          </tr>
                                          <tr>
                                            <td class="text-muted">PM</td>
                                            <td class="w-100 px-0">
                                              <div class="progress progress-md mx-4">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: <?php echo " {$pm}"; ?>%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                              </div>
                                            </td>
                                            <td><h5 class="font-weight-bold mb-0"><?php echo " {$pm}"; ?>%</h5></td>
                                          </tr>
                                        </table>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <!-- ATTENDANCE END -->

              <!-- ACADEMIC TABLE START -->
                <div class="row">
                  <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <p class="card-title">Academic Details</p>
                        <div class="row">
                          <div class="col-12">
                            <div class="table-responsive">
                              <table id='example' class='display expandable-table table-bordered' style='width:100%'>
                                <thead>
                                  <tr>
                                    <th>Semester</th>
                                    <th>Seat No.</th>
                                    <th>Marks</th>
                                    <th>Outoff</th>
                                    <th>CGPA</th>
                                    <th>Month</th>
                                  </tr>
                                </thead>

                                <?php
                                  while($result = mysqli_fetch_assoc($data))
                                  {
                                    echo"
                                          <tbody>
                                            <tr>
                                              <td>I</td>
                                              <td>".$result['sem1_seat']."</td>
                                              <td>".$result['sem1_marks']."</td>
                                              <td>400</td>
                                              <td>".$result['sem1_cgpa']."</td>
                                              <td>".$result['sem1_month']."</td>
                                            </tr>

                                            <tr>
                                              <td>II</td>
                                              <td>".$result['sem2_seat']."</td>
                                              <td>".$result['sem2_marks']."</td>
                                              <td>500</td>
                                              <td>".$result['sem2_cgpa']."</td>
                                              <td>".$result['sem2_month']."</td>
                                            </tr>

                                            <tr>
                                              <td>III</td>
                                              <td>".$result['sem3_seat']."</td>
                                              <td>".$result['sem3_marks']."</td>
                                              <td>350</td>
                                              <td>".$result['sem3_cgpa']."</td>
                                              <td>".$result['sem3_month']."</td>
                                            </tr>

                                            <tr>
                                              <td>IV</td>
                                              <td>".$result['sem4_seat']."</td>
                                              <td>".$result['sem4_marks']."</td>
                                              <td>".$result['sem4_outoff']."</td>
                                              <td>".$result['sem4_cgpa']."</td>
                                              <td>".$result['sem4_month']."</td>
                                            </tr>

                                            <tr>
                                              <td>V</td>
                                              <td>".$result['sem5_seat']."</td>
                                              <td>".$result['sem5_marks']."</td>
                                              <td>".$result['sem5_outoff']."</td>
                                              <td>".$result['sem5_cgpa']."</td>
                                              <td>".$result['sem5_month']."</td>
                                            </tr>

                                            <tr>
                                              <td>VI</td>
                                              <td>".$result['sem6_seat']."</td>
                                              <td>".$result['sem6_marks']."</td>
                                              <td>".$result['sem6_outoff']."</td>
                                              <td>".$result['sem6_cgpa']."</td>
                                              <td>".$result['sem6_month']."</td>
                                            </tr>

                                            <tr>
                                              <td>VII</td>
                                              <td>".$result['sem7_seat']."</td>
                                              <td>".$result['sem7_marks']."</td>
                                              <td>".$result['sem7_outoff']."</td>
                                              <td>".$result['sem7_cgpa']."</td>
                                              <td>".$result['sem7_month']."</td>
                                            </tr>

                                            <tr>
                                              <td>VIII</td>
                                              <td>".$result['sem8_seat']."</td>
                                              <td>".$result['sem8_marks']."</td>
                                              <td>".$result['sem8_outoff']."</td>
                                              <td>".$result['sem8_cgpa']."</td>
                                              <td>".$result['sem8_month']."</td>
                                            </tr>
                                          </tbody>";
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
              <!-- ACADEMIC TABLE END -->
           

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
  </body>
</html>