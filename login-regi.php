<?php
require_once("config.php");
	if(isset($_POST['login'])){
		
		$email = $_POST['l_email'];
		$pass = $_POST['l_pass'];
		
		$query = "SELECT * FROM user WHERE email= '$email' AND password = '$pass'";
		$result = $conn->query($query);
		$num0 = $result->num_rows;
		$rows0 = mysqli_fetch_assoc($result);
		if($num0 > 0){
			session_start();
      $_SESSION['login'] = $rows0['email'];
      $_SESSION['login_id'] = $rows0['id'];
      echo "<script type = \"text/javascript\">
      alert(\"Login success.\");
      window.location = (\"profile.php\")</script>";
		} else{
			echo "<script type = \"text/javascript\">
						alert(\"Login Failed. Try Again.\");
						</script>";
		}
  }
  
if(isset($_POST['signup'])){
  $email=$_POST['email'];
  $name=$_POST['name'];
  $contact=$_POST['contact'];
  $pwd=$_POST['pwd'];
  $confirm_pwd=$_POST['confirm_pwd'];
  $sql="INSERT INTO user (id, email, password, name, role, contact_no ) VALUES(LAST_INSERT_ID(),'$email', '$pwd',
  '$name', 'user', '$contact')";
  $rs = $conn->query($sql);
  $num = $rs->num_rows;
  $msg="User Created successfully";
  if($num = 0 && $pwd !== $confirm_pwd){
    $error="Something went wrong. Please try again";
  } else{
    echo "<script>alert('Registration successfull. Now you can login'); window.location = (\"index.php\");
    </script>";
  }
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
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/login-regi.css">
  <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
</head>

<body>

  <?php include('modules/notification.php');?>

  <div class="perspective effect-rotate-left">
    <div class="container">
      <div class="outer-nav--return"></div>
      <div id="viewport" class="l-viewport">
        <div class="l-wrapper">

          <?php include('modules/header.php');?>

          <script>
            function checkAvailability() {
              jQuery.ajax({
              url: "check_validation.php",
              data:'email='+$("#email").val(),
              type: "POST",
              success:function(data){
              $("#user-availability-status").html(data);
              },
              error:function (){}
              });
            }
          </script>


          <div class="limiter">
            <div class="container-login100 row">
              <!-- Login -->
              <div class="wrap-login100 col-md-4">
                <form class="login100-form validate-form" method="post" name="login">

                  <span class="login100-form-title">
                    SIGN IN
                  </span>

                  <div class="wrap-input100 validate-input" data-validate="Email is required">
                    <input class="input100" type="email" name="l_email" placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                      <i class="fa fa-user"></i>
                    </span>
                  </div>

                  <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="l_pass" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                      <i class="fa fa-lock"></i>
                    </span>
                  </div>

                  <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn" name="login">
                      Sign IN
                    </button>
                  </div>
                </form>
              </div> <!-- //Login -->







              <!-- Sign UP -->
              <div class="wrap-login100 wrap-sign col-md-4">
                <form class="login100-form validate-form" method="post" name="signup">

                  <span class="login100-form-title">
                    SIGN UP
                  </span>

                  <div class="wrap-input100 validate-input" data-validate="Email is required">
                    <input class="input100" type="email" name="email" placeholder="Email" required="required" onBlur="checkAvailability()">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                      <i class="fa fa-user"></i>
                    </span>
                    <span id="user-availability-status" style="font-size:12px;"></span> 
                  </div>

                  <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="pwd" placeholder="Password" required="required">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                      <i class="fa fa-lock"></i>
                    </span>
                  </div>

                  <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="confirm_pwd" placeholder="Confirm Password" required="required">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                      <i class="fa fa-lock"></i>
                    </span>
                  </div>

                  <div class="wrap-input100 validate-input" data-validate="User Name is required">
                    <input class="input100" type="text" name="name" placeholder="User Name">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                      <i class="fa fa-user"></i>
                    </span>
                  </div>

                  <div class="wrap-input100 validate-input" data-validate="Contact is required">
                    <input class="input100" type="text" name="contact" placeholder="Contact No">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                      <i class="fa fa-user"></i>
                    </span>
                  </div>

                  <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn" name="signup">
                      Sign Up
                    </button>
                  </div>
                

                </form>
              </div><!-- //Sign Up -->
              </div>
            </div>

            

          </div> <!-- // limiter -->
        </div>
      </div>
    </div>
    <!-- //container -->
    <?php include('modules/nav.php');?>

  </div>
  <!-- // perspective -->

  <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
  <script src="assets/js/functions-min.js"></script>
</body>

</html>