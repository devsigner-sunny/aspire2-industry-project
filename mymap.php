<?php
session_start();
error_reporting(0);
include 'config.php';
if(strlen($_SESSION['login'])==0){	
  echo "<script type = \"text/javascript\">
						alert(\"Please login first \");
						window.location = (\"login-regi.php\")
						</script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>TetraMap</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/profile.css">
  <link rel="stylesheet" href="assets/css/table.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

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
                    <input id="profile" type="checkbox" onclick="location.href='profile.php'">
                    <label class="profile-label" for="profile">
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
                    <input id="mymap" type="checkbox" checked onclick="location.href='mymap.php'">
                    <label class="profile-label" for="mymap" style="border-color:#0f33ff;">
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
              


              <!-- Maps user saved already -->
              <table class="table table-hover table-dark">
                <span class="table-subject">Maps you saved</span>
                <thead>
                  <tr class="table-head-section">
                    <th scope="col" class="th-title">Title</th>
                    <th scope="col">Description</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                      $user_id=$_SESSION['login_id'];
                      $sel = "SELECT DISTINCT u.*, m.* FROM usermap AS u INNER JOIN mapstm as m ON u.user_id=$user_id and u.map_id = m.id and m.author_id != $user_id";
                    
                      
                      $rs = $conn -> query($sel);
                      while($rws = $rs->fetch_assoc()){
                      ?>
                        <th scope="row" class="map-title"><a href="tetramap-single.php?id=<?php echo $rws['id'];?>"> <?php echo $rws['title']?></a></th>
                        <td><a class="ellipsis" href="tetramap-single.php?id=<?php echo $rws['id'];?>"><?php echo $rws['description']?></a></td>
                    </tr>
                    <?php } ?>
                </tbody>
              </table>

              <!-- Maps user made by self -->
              <table class="table table-hover table-dark">
                <span class="table-subject">Maps you created</span>
                <thead>
                  <tr class="table-head-section">
                    <th scope="col" class="th-title">Title</th>
                    <th scope="col">Description</th>
                    <!-- <th scope="col">Categories</th> -->
                    <th scope="col" style="width: 18%">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <?php
                      $user_id=$_SESSION['login_id'];
                      $sql = "SELECT * FROM mapstm AS m WHERE m.author_id='$user_id'";
                      
                      $rs = $conn -> query($sql);
                      $num = $rs->num_rows;
                      while($rws = $rs->fetch_assoc()){
                      ?>
                        <th scope="row" class="map-title">
                        <a  href="tetramap-single.php?id=<?php echo $rws['id'];?>"><?php echo $rws['title']?></a>
                        </th>
                        <td>
                          <a class="ellipsis"  href="tetramap-single.php?id=<?php echo $rws['id'];?>"><?php echo $rws['description']?></a>
                        </td>
                        
                        <td>
                        <?php if($rws['status'] = 0){ ?>
                            <a  class="status" href="tetramap-single.php?id=<?php echo $rws['id'];?>">REGISTERD <i class="fas fa-check" style="color: #0f33ff;"></i></a>
                          <?php }else{?> <a  class="status">PENDING <i class="fas fa-times" style="color: #0f33ff;"></i></a> <?php }?>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
              </table>


            </div><!-- //pg-content -->

          </div> <!-- //content-wrapper-->
        </div><!-- //l-wrapper -->
      </div><!-- //viewport -->
    </div><!-- //container -->
    <?php include('modules/nav.php');?>
  </div>
  <!-- // perspective -->

  <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
  <script src="assets/js/vendor/jquery.dotdotdot.js"></script>
  <script type="text/javascript">
  $(document).ready(function() {
	$(".ellipsis").dotdotdot({
		height: 50,
		fallbackToLetter: true,
		watch: true,
	});
});
</script>
  <script src="assets/js/functions-min.js"></script>

</body>

</html>