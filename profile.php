<?php
session_start();
error_reporting(0);
include 'config.php';
if(isset($_POST['update_profile'])){
  $email=$_SESSION['login'];
  $password=$_POST['password'];
  $id=intval($_GET['id']);
  $contact=$_POST['contact'];
  $name=$_POST['name'];
  $sql="UPDATE user SET password='$password', name='$name', contact_no = '$contact' where email='$email'";
  // $sql ="SELECT * FROM user WHERE email ='$email'";
  $res= $conn -> query($sql);
  $num = $res->num_rows;
  echo "<script type = \"text/javascript\">
				alert(\"Your profile information succesfully changed.\");</script>";

}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>TetraMap</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/profile.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

  <script type="text/javascript">
	function valid(){
		if(document.chngpwd.password.value!= document.chngpwd.confirmpassword.value){
			alert("New Password and Confirm Password Field do not match  !!");
			document.chngpwd.confirmpassword.focus();
			return false;
		}
		return true;
	}
  </script>
  <style type="text/css">
    /* .pg-content{
      top: 3rem;
    } */
  </style>
</head>

<body>

  <?php include('modules/notification.php');?>

  <div class="perspective effect-rotate-left">
    <div class="container">
      <div class="outer-nav--return"></div>
      <div id="viewport" class="l-viewport">
        <div class="l-wrapper">

          <?php include('modules/header.php');?>
          <div class="content-wrapper">
            <div class="pg-content">
              <div class="work-request--options">
                <div id="profile-top-bar">
                  <div class="profile-bar-each">
                    <input id="profile" type="checkbox" checked onclick="location.href='profile.php'">
                    <label class="profile-label" for="profile" style="border-color:#0f33ff;">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                      PROFILE
                    </label>
                  </div>
                  
                  <div class="profile-bar-each">
                    <input id="mymap" type="checkbox" onclick="location.href='mymap.php'">
                    <label class="profile-label" for="mymap">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                      MY MAP
                    </label>
                  </div>

                  <div class="profile-bar-each">
                    <input id="newmap" type="checkbox" onclick="location.href='newmap.php'">
                    <label class="profile-label" for="newmap">
                      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                      <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                        <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z"/>
                      </g>
                      </svg>
                      CREATE MAP
                    </label>
                  </div>

                </div><!-- // profile-top-bar -->
              </div><!-- // work-requiest--options -->
            
              <div class="form-wrapper">
                <form method="post" name="update_profile" class="form-horizontal" onSubmit="return valid();">
                
                  <?php 
                  $email=$_SESSION['login'];
                  $sql2 ="SELECT * FROM user WHERE email='$email'";
                  $rs = $conn->query($sql2);
                  while($rws = $rs->fetch_assoc()){
                  ?>

                  <div class="form-group">
                    <label class="col-2 control-label">User Email<span style="color:red">*</span></label>
                    <div class="col-6">
                      <input type="text" name="email" class="form-control" value="<?php echo $rws['email'];?>" required>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-2 control-label">Password<span style="color:red">*</span></label>
                    <div class="col-6 form-group-blank">
                      <input type="password" name="password" class="form-control" value="<?php echo $rws['password'];?>" required>
                    </div>
                  </div>

                  
                  <div class="form-group">
                    <label class="col-2 control-label">Confirm Password<span style="color:red">*</span></label>
                    <div class="col-6 form-group-blank">
                      <input type="password" name="confirmpassword" class="form-control" value="<?php echo $rws['password'];?>" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-2 control-label">User Full Name<span style="color:red">*</span></label>
                    <div class="col-6 form-group-blank">
                      <input type="text" name="name" class="form-control" value="<?php echo $rws['name'];?>" required>
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="col-2 control-label">Contact No<span style="color:red">*</span></label>
                    <div class="col-6 form-group-blank">
                      <input type="tel" name="contact" class="form-control" value="<?php echo $rws['contact_no'];?>" required>
                    </div>
                  </div>

                  <?php } ?>

                  <div class="col-12 btn-wrap" >
                    <button class="btn-submit" name="update_profile" type="submit">SAVE CHANGES</button>
                  </div>

                </form>
              </div> <!-- //form-wrapper -->
            </div><!-- //pg-content -->

          </div> <!-- //content-wrapper-->
        </div><!-- //l-wrapper -->
      </div><!-- //viewport -->
    </div><!-- //container -->
    <?php include('modules/nav.php');?>
  </div>
  <!-- // perspective -->
  <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
  <script src="assets/js/functions-sc-min.js"></script>
</body>

</html>