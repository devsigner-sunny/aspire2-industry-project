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
            <i class="ffa fa-file"></i>
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
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Maps
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="cars.php">Maps</a></li>
      </ol>
    </section>
    
    <a href="add_maps.php"><button class="btn btn-primary m-auto d-block">Add Maps</button></a>
  
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
         
         <div class="box">
            <!-- <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div> -->
            <!-- /.box-header -->
            
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped table-responsive">
                <thead>
					<tr>
					<th>Map no.</th>
						<th>Title</th>
						<th>Category_id</th>
						<th>Description</th>
						<th>Fire</th>
						<th>Water</th>
                        <th>Earth</th>
                        <th>Air</th>
<!--                        <th>Tags</th>-->
                        
                        <th>Thoughts</th>
                        <th>Status</th>
					</tr>
				</thead>
				<tbody>
					<?php 
          include('connection.php');
          $query = "SELECT * FROM mapstm";
                    $con = mysqli_connect('localhost','root','','tetramap')or die('Unable to connect');
          $qry = mysqli_query($con,$query)or die(mysqli_error($con));
          
          $i = 1; while($cars = mysqli_fetch_array($qry)){ ?>
					<tr>
					<td><?php echo $i;?></td>-->
						<td><?php echo $cars['title'];?></td>
						<td><?php echo $cars['category1'];?>,<?php echo $cars['category2'];?>,<?php echo $cars['category3'];?></td>
						<td><?php echo $cars['description'];?></td>
            <td><?php echo $cars['fire'];?></td>
            <td><?php echo $cars['water'];?></td>
						<td><?php echo $cars['earth'];?></td>
            <td><?php echo $cars['air'];?></td>
<!--            <td><?php echo $cars['tags'];?></td>-->
            
            <td><?php echo $cars['thoughts'];?></td>
            <td><?php echo $cars['status'];?></td>
						<td><a href="add_maps.php?id='<?php echo $cars['id'];?>'"><button class="btn btn-primary">Edit</button></a> | <a href="delete_car.php?id='<?php echo $cars['id'];?>'" id="del_adm"><button class="btn btn-danger del_adm">Delete</button></a></td>
					</tr>
					<?php $i++; }?>
				</tbody>
				
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
         
			</table>

              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
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
      $(".del_adm").click(function(){
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