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
  </head>

  <body>
    
    <?php
      $conn = mysqli_connect("localhost", "root", "", "crce") or die(mysqli_error($conn));  
      error_reporting(0);
      session_start();
      $s_id = $_SESSION['s_id'];

      $_SESSION['s_id'] = $s_id;
              
      $sql = "SELECT first_name, last_name FROM student WHERE s_id='$s_id'";
      $selectResult = mysqli_query($conn,$sql);
  
      $studentDetails = mysqli_fetch_assoc($selectResult);  
      $sName = $studentDetails["first_name"];
      $slName = $studentDetails["last_name"];
    
      $query = "SELECT * FROM student_bonafide_map WHERE s_id='$s_id';";
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
                    <!-- DATE START -->
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="calender">
                                    <div class="column_right_grid calender">
                                        <div class="cal1"><div class="clndr">
                                            <div class="clndr-controls">
                                                <div class="clndr-control-button">
                                                    <p class="clndr-previous-button">previous</p>
                                                </div>
                                                <div class="month">January 2023</div>
                                                    <div class="clndr-control-button rightalign">
                                                        <p class="clndr-next-button">next</p>
                                                    </div>
                                                </div>
                                                <table class="clndr-table" border="0" cellspacing="0" cellpadding="0"><thead><tr class="header-days"><td class="header-day">S</td><td class="header-day">M</td><td class="header-day">T</td><td class="header-day">W</td><td class="header-day">T</td><td class="header-day">F</td><td class="header-day">S</td></tr></thead><tbody><tr><td class="day past adjacent-month last-month calendar-day-2015-08-30"><div class="day-contents">30</div></td><td class="day past adjacent-month last-month calendar-day-2015-08-31"><div class="day-contents">31</div></td><td class="day past calendar-day-2015-09-01"><div class="day-contents">1</div></td><td class="day past calendar-day-2015-09-02"><div class="day-contents">2</div></td><td class="day past calendar-day-2015-09-03"><div class="day-contents">3</div></td><td class="day past calendar-day-2015-09-04"><div class="day-contents">4</div></td><td class="day past calendar-day-2015-09-05"><div class="day-contents">5</div></td></tr><tr><td class="day past calendar-day-2015-09-06"><div class="day-contents">6</div></td><td class="day past calendar-day-2015-09-07"><div class="day-contents">7</div></td><td class="day past calendar-day-2015-09-08"><div class="day-contents">8</div></td><td class="day past calendar-day-2015-09-09"><div class="day-contents">9</div></td><td class="day past event calendar-day-2015-09-10"><div class="day-contents">10</div></td><td class="day past event calendar-day-2015-09-11"><div class="day-contents">11</div></td><td class="day past event calendar-day-2015-09-12"><div class="day-contents">12</div></td></tr><tr><td class="day past event calendar-day-2015-09-13"><div class="day-contents">13</div></td><td class="day past event calendar-day-2015-09-14"><div class="day-contents">14</div></td><td class="day past calendar-day-2015-09-15"><div class="day-contents">15</div></td><td class="day past calendar-day-2015-09-16"><div class="day-contents">16</div></td><td class="day past calendar-day-2015-09-17"><div class="day-contents">17</div></td><td class="day past calendar-day-2015-09-18"><div class="day-contents">18</div></td><td class="day past calendar-day-2015-09-19"><div class="day-contents">19</div></td></tr><tr><td class="day past calendar-day-2015-09-20"><div class="day-contents">20</div></td><td class="day past event calendar-day-2015-09-21"><div class="day-contents">21</div></td><td class="day past event calendar-day-2015-09-22"><div class="day-contents">22</div></td><td class="day past event calendar-day-2015-09-23"><div class="day-contents">23</div></td><td class="day past calendar-day-2015-09-24"><div class="day-contents">24</div></td><td class="day past calendar-day-2015-09-25"><div class="day-contents">25</div></td><td class="day today calendar-day-2015-09-26"><div class="day-contents">26</div></td></tr><tr><td class="day calendar-day-2015-09-27"><div class="day-contents">27</div></td><td class="day calendar-day-2015-09-28"><div class="day-contents">28</div></td><td class="day calendar-day-2015-09-29"><div class="day-contents">29</div></td><td class="day calendar-day-2015-09-30"><div class="day-contents">30</div></td><td class="day adjacent-month next-month calendar-day-2015-10-01"><div class="day-contents">1</div></td><td class="day adjacent-month next-month calendar-day-2015-10-02"><div class="day-contents">2</div></td><td class="day adjacent-month next-month calendar-day-2015-10-03"><div class="day-contents">3</div></td></tr></tbody></table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cal-pos a">
                                        <ul>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                    <div class="cal-pos">
                                        <ul>
                                            <li></li>
                                            <li></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- DATE END -->
                
                    <!-- 4 CARDS START -->
                        <?php
                            $code = "SELECT MAX(issue_date) AS date FROM student_bonafide_map WHERE s_id='$s_id';";
                            $count = mysqli_query($conn, $code);
                            $train = mysqli_fetch_assoc($count);
    
                            if($train['date'] == NULL) {
                                $con = 'None';
                            }
                            else {
                                $con= $train['date'];
                            }
                        ?>
                        <div class="col-md-6 grid-margin transparent">
                            <div class="row">
                                <div class="col-md-6 mb-4 stretch-card transparent">
                                    <div class="card card-tale">
                                        <div class="card-body">
                                            <p class="mb-4">Last Bonafide Taken</p>
                                            <p class="fs-30 mb-2"><?php echo $con; ?></p>
                                        </div>
                                    </div>
                                </div>


                                <?php
                                    $code = "SELECT reason 
                                            FROM student_bonafide_map 
                                            WHERE s_id='$s_id' 
                                            AND issue_date='$con' 
                                            ORDER BY bonafide_no 
                                            DESC LIMIT 1;";
                                    $count = mysqli_query($conn, $code);
                                    $bonafide = mysqli_fetch_assoc($count);

                                    if($bonafide['reason'] == NULL) {
                                        $reason = 'None';
                                    }
                                    else {
                                        $reason= $bonafide['reason'];
                                    }
                                ?>
                                <div class="col-md-6 mb-4 stretch-card transparent">
                                    <div class="card card-dark-blue">
                                        <div class="card-body">
                                            <p class="mb-4">Reason for last bonafide</p>
                                            <p class="mb-2" style="font-size: 4vh;"><?php echo $reason; ?></p>
                                        </div>
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
                            <div class="row">
                                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                                    <div class="card card-light-blue">
                                        <div class="card-body">
                                            <p class="mb-4">Total Bonafide Taken</p>
                                            <p class="fs-30 mb-2"><?php echo $bona; ?></p>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-6 stretch-card transparent">
                                    <div class="card">
                                        <a href="bonafide-reason.php">
                                          <button type="button" class="btn btn-success btn-lg" style="height: 20vh; font-size: 3vh;">
                                            <i class="ti-file btn-icon-append"></i>                          
                                            PDF Bonafide
                                          </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- 4 CARDS END -->
                </div>

                <!-- BONAFIDE TABLE START -->
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Bonafide Records</h4>
                                <div class="table-responsive pt-3">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Bonafide No.</th>
                                                <th>Issue Date</th>
                                                <th>Reason</th>
                                            </tr>
                                        </thead>
                                        <?php
                                            while($result = mysqli_fetch_assoc($data))
                                            {
                                                echo"
                                                    <tbody>
                                                        <tr>
                                                            <td>".$result['bonafide_no']."</td>
                                                            <td>".$result['issue_date']."</td>
                                                            <td>".$result['reason']."</td>
                                                        </tr>
                                                    </tbody>";
                                            }
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>        
                <!-- BONAFIDE TABLE END -->
            

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
    
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script src="js/jquery-1.11.1.min.js"></script>
    <link href='//fonts.googleapis.com/css?family=Maven+Pro:700,400' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/clndr.css" type="text/css" />
        <script src="js/underscore-min.js"></script>
        <script src= "js/moment-2.2.1.js"></script>
        <script src="js/clndr.js"></script>
        <script src="js/site.js"></script>

    <!---Google Analytics Designmaz.net-->
    <script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-35751449-15', 'auto');ga('send', 'pageview');</script>
				
  </body>
</html>