<?php
session_start();
include('config.php');
error_reporting(0);
if(isset($_POST['create_new'])){
  $title=$_POST['title'];
  $desc=$_POST['description'];
  $author_id=intval($_SESSION['login_id']);
  $e=$_POST['earth'];
  $a=$_POST['air'];
  $w=$_POST['water'];
  $f=$_POST['fire'];
  $cate1=intval($_POST['category1']);
  $cate2=intval($_POST['category2']);
  $cate3=intval($_POST['category3']);
  $examples=$_POST['examples'];
  $thoughts=$_POST['thoughts'];
  $e_q=$_POST['earth_qns'];
  $a_q=$_POST['air_qns'];
  $w_q=$_POST['water_qns'];
  $f_q=$_POST['fire_qns'];


  $sql ="INSERT INTO `mapstm` (`id`, `title`, `description`, `author_id`, `earth`, `air`, `water`, `fire`, `category1`, `category2`, `category3`, `examples`, `thoughts`, `earth_qns`, `air_qns`, `water_qns`, `fire_qns`, `status`) VALUES (LAST_INSERT_ID(), '$title', '$desc', '$author_id', '$e', '$a', '$w', '$f', '$cate1', '$cate2', '$cate3', '$example', '$thoughts', '$e_q', '$a_q', '$w_q', '$f_q', 1)";
  $res= $conn -> query($sql); 
  echo "<script>alert('Your request has been sent successfully. Please wait for approval.');</script>";


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
  
  <style type="text/css">
    .form-control, .selectpicker{
      height: 35px;
      border-radius:3px;
    }
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
                    <input id="newmap" type="checkbox" checked onclick="location.href='newmap.php'">
                    <label class="profile-label" for="newmap" style="border-color:#0f33ff;">
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

                    <form method="post" name="create_new">
                      <div class="col-sm-6 form-each-side">

                        <div class="form-group">
                          <label class="col-sm-4 control-label">Title<span style="color:red">*</span></label>
                          <div class="col-sm-8">
                            <input type="text" name="title" class="form-control" required>
                          </div>
                        </div> 

                        <div class="form-group">
                          <label class="col-sm-4 control-label">Description<span style="color:red">*</span></label>
                          <div class="col-sm-8">
                            <input type="text" name="description" class="form-control" required>
                          </div>
                        </div>

                        <div class="form-group-inline">
                          <div class="form-group form-inline-left">
                            <label class="col-sm-4 control-label">Earth<span style="color:red">*</span></label>
                            <div class="col-sm-8">
                              <input type="text" name="earth" class="form-control" required>
                            </div>
                          </div>

                          <div class="form-group form-inline-right">
                            <label class="col-sm-4 control-label">Air<span style="color:red">*</span></label>
                            <div class="col-sm-8">
                              <input type="text" name="air" class="form-control" required>
                            </div>
                          </div>
                        </div><!-- // form-group-inline-->
                        
                        <div class="form-group-inline">
                          <div class="form-group form-inline-left">
                            <label class="col-sm-4 control-label">Water<span style="color:red">*</span></label>
                            <div class="col-sm-8">
                              <input type="text" name="water" class="form-control" required>
                            </div>
                          </div>

                          <div class="form-group fomr-inline-right">
                            <label class="col-sm-4 control-label">Fire<span style="color:red">*</span></label>
                            <div class="col-sm-8">
                              <input type="text" name="fire" class="form-control" required>
                            </div>
                          </div>
                        </div>

                         <div class="form-group form-txt-a">
                          <label class="col-sm-4 control-label">Examples of Influences <span style="color:red">*</span></label>
                          <textarea class="col-sm-12 form-control white_bg txt-area-1" name="examples" rows="3" required></textarea>
                        </div>

                        <div class="form-group form-txt-a">
                          <label class="col-sm-4 control-label">Explanation of 'Thoughts' <span style="color:red">*</span></label>
                          <textarea class="col-sm-12 form-control white_bg txt-area-1" name="thoughts" rows="3" required></textarea>
                        </div>




                        
                      </div><!--//left side -->





                      <div class="col-sm-6 form-each-side">
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Category 1<span style="color:red">*</span></label>
                          <div class="col-sm-4">
                          <select class="selectpicker form-control" name="category1" required>
                            <option value=""> Select </option>
                            <?php
                            $ret="SELECT category_id, category_name from categories";
                            $rs = $conn->query($ret);
                            while($rws = $rs->fetch_assoc()){
                            ?>
                            <option value="<?php echo $rws['category_id'];?>"><?php echo $rws['category_name'];?></option>
                            <?php } ?>
                          </select>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-sm-4 control-label">Category 2</label>
                          <div class="col-sm-4">
                          <select class="selectpicker form-control" name="category2">
                            <option value="null"> Select </option>
                            <?php
                            $ret="SELECT category_id, category_name from categories";
                            $rs = $conn->query($ret);
                            while($rws = $rs->fetch_assoc()){
                            ?>
                            <option value="<?php echo $rws['category_id'];?>"><?php echo $rws['category_name'];?></option>
                            <?php } ?>
                          </select>
                          </div>
                        </div>

                        <div class="form-group">
                          <label class="col-sm-4 control-label">Category 3</label>
                          <div class="col-sm-4">
                          <select class="selectpicker form-control" name="category3">
                            <option value="null"> Select </option>
                            <?php
                            $ret="SELECT category_id, category_name from categories";
                            $rs = $conn->query($ret);
                            while($rws = $rs->fetch_assoc()){
                            ?>
                            <option value="<?php echo $rws['category_id'];?>"><?php echo $rws['category_name'];?></option>
                            <?php } ?>
                          </select>
                          </div>
                        </div>
                       
                        <p style="padding-top:20px; font-weight: bold; font-size: 1.1rem;">Catalitic Questions</p>

                        <div class="form-group">
                          <label class="col-sm-4 control-label">Earth <span style="color:red">*</span></label>
                          <textarea class="col-sm-8 form-control white_bg txt-area-2" name="earth_qns" rows="2" required></textarea>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Air <span style="color:red">*</span></label>
                          <textarea class="col-sm-8 form-control white_bg txt-area-2" name="air_qns" rows="2" required></textarea>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Water<span style="color:red">*</span></label>
                          <textarea class="col-sm-8 form-control white_bg txt-area-2" name="water_qns" rows="2" required></textarea>
                        </div>
                        <div class="form-group">
                          <label class="col-sm-4 control-label">Fire <span style="color:red">*</span></label>
                          <textarea class="col-sm-8 form-control white_bg txt-area-2" name="fire_qns" rows="2" required></textarea>
                        </div>
                      </div><!--//right side -->
                      

                      <!-- <div class="row" > -->
                        <button class="btn-submit" name="create_new" type="submit" style="position:relative; left: 20px;">Save changes</button>
                      <!-- </div> -->
                    </form>
                        
                  </div>
              




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