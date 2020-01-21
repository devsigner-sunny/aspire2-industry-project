<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from minimal-art-admin-templates.multipurposethemes.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Sep 2018 10:25:40 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.ico">

    <title>Tetramap Admin Panel</title>
    
  <!-- Bootstrap 4.0-->
  <!-- <link rel="stylesheet" href="<?php //echo base_url();?>admin_js/assets/vendor_components/bootstrap/dist/css/bootstrap.css"> -->
  
  <link rel="stylesheet" href="admin_js/assets/vendor_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Bootstrap 4.0-->
  <link rel="stylesheet" href="admin_js/assets/vendor_components/bootstrap/dist/css/bootstrap-extend.css">
  
  <!-- font awesome -->
  <link rel="stylesheet" href="admin_js/assets/vendor_components/font-awesome/css/font-awesome.css">
  
  <!-- ionicons -->
  <link rel="stylesheet" href="admin_js/assets/vendor_components/Ionicons/css/ionicons.css">

  <link href="admin_js/assets/vendor_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
  
  <!-- theme style -->
  <link rel="stylesheet" href="admin_js/css/master_style.css">
  
  <!-- Minimal-art Admin skins. choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="admin_js/css/skins/_all-skins.css">
  
  
  
  <!-- Morris charts -->
  <link rel="stylesheet" href="admin_js/assets/vendor_components/morris.js/morris.css">
  

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- google font -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

     
  </head>

<body class="hold-transition skin-orange-light sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="admin_js/images/minimal.png"  alt=""></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">TETRAMAP</span>
    </a>
    <!-- Header Navbar-->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
      <!-- User Account-->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-user"></i>
            </a>
            <ul class="dropdown-menu scale-up">
              
              <li class="user-footer">
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-block btn-danger"><i class="ion ion-power"></i> Log Out</a>
                </div>
              </li>
            </ul>
          </li>
          
          
      
          
        </ul>
      </div>
    </nav>
  </header>
  
  <!-- Left side column. contains the logo and sidebar -->
    <?php session_start();
      if(isset($_SESSION['type']) && $_SESSION['type'] == 'admin'){
    ?>
    <aside class="main-sidebar">
    <!-- sidebar -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- sidebar menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="">
          <a href="index.php">
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span>
          </a>
                
        </li>
        <li class="">
          <a href="maps.php">
            <i class="fa fa-file"></i>
            <span>Maps</span>
          </a>
        </li>
        
       

        
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
<?php }else{
  
    ?>
    <aside class="main-sidebar">
    <!-- sidebar -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- sidebar menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="">
          <a href="index.php">
            <i class="fa fa-dashboard"></i>
            <span>Dashboard</span>
          </a>
                
        </li>
        <li class="">
          <a href="maps.php">
            <i class="fa fa-file"></i>
            <span>Maps</span>
          </a>
        </li>
        
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
<?php }?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     
        <div class="col-xl-3 col-md-6 col-12">
          <div class="info-box">
            <span class="info-box-icon push-bottom bg-orange"><i class="ion ion-ios-people"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Maps</span>
              <?php 
              $query1 = "SELECT count(id) FROM mapstm";
                $con = mysqli_connect('localhost','root','','tetramap')or die('Unable to connect');
              $qry1 = mysqli_query($con,$query1)or die(mysqli_error($con));
              $users = mysqli_fetch_array($qry1);
                foreach($users as $key => $value)
                  
              ?>
              <span class="info-box-number"><?php echo $value;?></span>
              <span class="progress-description text-muted">
                    Total maps
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        
        <!-- /.col -->
        
        <!-- /.col -->
      </div>
     
	</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    
  </footer>

  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  
</div>
<!-- ./wrapper -->
    
   
    
  <!-- jQuery 3 -->
  <script src="admin_js/assets/vendor_components/jquery/dist/jquery.js"></script>
  <!-- popper -->
  <script src="admin_js/assets/vendor_components/popper/dist/popper.min.js"></script>
  
  <!-- Bootstrap 4.0-->
  <script src="admin_js/assets/vendor_components/bootstrap/dist/js/bootstrap.js"></script>  
  
  <!-- ChartJS -->
  <script src="admin_js/assets/vendor_components/chart-js/chart.js"></script>
  
  <!-- Sparkline -->
  <script src="admin_js/assets/vendor_components/jquery-sparkline/dist/jquery.sparkline.js"></script>
  
  <!-- jvectormap -->
  <script src="admin_js/assets/vendor_plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>  
  <script src="admin_js/assets/vendor_plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>  
  
  <!-- Morris.js charts -->
  <script src="admin_js/assets/vendor_components/raphael/raphael.min.js"></script>
  <script src="admin_js/assets/vendor_components/morris.js/morris.min.js"></script>
  
  <!-- Slimscroll -->
  <script src="admin_js/assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js"></script>
  
  <!-- FastClick -->
  <script src="admin_js/assets/vendor_components/fastclick/lib/fastclick.js"></script>
  
  <!-- Minimal-art Admin App -->
  <script src="admin_js/js/template.js"></script>
  
  <!-- Minimal-art Admin dashboard demo (This is only for demo purposes) -->
  <script src="admin_js/js/pages/dashboard.js"></script>
  
  <!-- Minimal-art Admin for demo purposes -->
  <script src="admin_js/js/demo.js"></script>

  <!-- steps  -->
  <script src="admin_js/assets/vendor_components/jquery-steps-master/build/jquery.steps.js"></script>
   
   <!-- validate  -->
  <script src="admin_js/assets/vendor_components/jquery-validation-1.17.0/dist/jquery.validate.min.js"></script>
  
  <!-- Sweet-Alert  -->
  <script src="admin_js/assets/vendor_components/sweetalert/sweetalert.min.js"></script>
    
    <!-- wizard  -->
  <script src="admin_js/js/pages/steps.js"></script>

  <script src="admin_js/assets/vendor_plugins/DataTables-1.10.15/media/js/jquery.dataTables.min.js"></script>
  <script src="admin_js/js/pages/data-table.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $("#del_adm").click(function(){
        var con = confirm('Are you sure ?');
        if(con){
          return true;
        }else{
          return false;
        }
      });
    }); 
  </script>
</body>
</html>