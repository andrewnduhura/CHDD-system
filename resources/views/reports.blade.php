<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>




  <style>
        .content {
            position: absolute; /* Set the position to absolute */
            top: 220px; /* Set the top offset to 100 pixels from the top */
            left: 400px; /* Set the left offset to 200 pixels from the left */
            /* Additional styling for the content */
            color:blue;
            /*position: relative;  Use relative positioning */
            width: 50%; /* Set the width of the specific section */
            height: 400px;
            
            
        }
        .content td {
            flex:1;
            padding: 10px;
            }

         .content h1 {
          padding-bottom: 30px;
        
          
        }  
        .content label{
            width:90px;
            display: inline-block;
        }     
    </style>







  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed" style = "background-color:grey">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-grey">
    <!-- Left navbar links -->
    <ul class="navbar-nav" style = "margin-left:800px align:center width:100%">
      
      
      <li class="nav-item d-none d-sm-inline-block" style = "padding-left:800px">
      <input class="form-control form-control-navbar " type="search" placeholder="Search" aria-label="Search ">
    </li>
      
    </ul>

    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="top:30%" >
    
    <!-- Sidebar -->
    <div class="sidebar" >
      

      <!-- SidebarSearch Form -->
      <div class="form-inline">
       
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false"style="padding:50px">
          
          <li class="nav-item" style = "padding-bottom:30px">
            <a href="{{ url('/admin') }}" class="nav-link">
              <!--<i class="nav-icon fas fa-chart-pie"></i>-->
              
                Diagnose
              
            </a>
            </li>

            <li class="nav-item" style = "padding-bottom:30px" >
            <a href="{{ url('/rep') }}" class="nav-link">
                Reports
            </a>
            </li>
            <li class="nav-item">
            <a href="{{ url('/prof') }}" class="nav-link">
                Profile              
            </a>
            </li>
              

      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
 
    
    <h1 style="text-align:center;color:yellow">CORONARY HEART DISEASE DIAGNOSIS SYSTEM</h1>

    <table  style= "margin-left:100px"><tr><td><div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block" style = "color:yellow">Dr.ANDREW</a>
          
        </div>
      </div></td>
      <td style ="padding-left:780px"><button class="logout-button" >Log Out</button></td></tr></table>


    

    <div class="content" style = "background-color:white">
      
    
      <h style = "font-size:42px">CORONARY HEART DISEASE ANALYSIS</h><br>
     
     <label for="date">From</label>
     <input type="date"min="2020-01-01"name="datemax">
     
     <label for="date" style="text:bold">To</label>
     <input type="date"min="2020-01-01"name="datemax">
    
      

    </div>














        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
