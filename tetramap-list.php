<?php 
session_start();
include('config.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>TetraMap</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/tetramap.css">
  <link rel="stylesheet" href="assets/css/media.css">
</head>

<body>

  <?php include('modules/notification.php');?>


  <div class="perspective effect-rotate-left">
    <div class="container">
      <div class="outer-nav--return"></div>
      <div id="viewport" class="l-viewport">
        <div class="l-wrapper">

        <?php include('modules/header.php');?>

          <ul class="l-main-content main-content">
            <li class="l-section section section--is-active">
                <div class="part-title">
                  <div class="title--banner">
                    
                    <h2><?php echo $_POST['keyword'];?></h2>
                      
                      <div class="col-xs-8 col-xs-offset-2 col-md-4 col-md-offset-0">

                      <?php
                      $keyword = $_POST['keyword'];
                      $sel = "SELECT * FROM mapstm WHERE (CONCAT(`title`,`description`,`earth`,`air`,`water`,`fire`,`examples`,`thoughts`, `earth_qns`, `air_qns`, `water_qns`, `fire_qns`) REGEXP '$keyword') and `status` = 0";
                      $rs = $conn->query($sel);
                      $num = $rs->num_rows;
                      if($num = 0){
                        echo "<script type = \"text/javascript\">
                        alert(\"There is no matched result. Please select another one\");
                        window.location = (\"tetramap.php\")
                        </script>";
                      }
                        while($rws = $rs->fetch_assoc()){
                        ?>
                          <div class="tab">
                          <input id="<?php echo $rws['id'];?>" type="checkbox" name="tabs">
                          <label for="<?php echo $rws['id'];?>">
                          <?php echo $rws['title'];?>
                          </label>
                          <div class="tab-content">
                          <p><a href="tetramap-single.php?id=<?php echo $rws['id'];?>"><?php echo $rws['description'];?></a></p>
                          </div>
                        </div>
                      <?php } ?>

                      </div>
                      

                         
                    </div>
                    
                  



              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- //container -->
    <?php include('modules/nav.php');?>
  </div>
  <!-- // perspective -->

  <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
  <script src="assets/js/functions-min.js"></script>
  <script type="text/javascript">
    $(function () {
      $('.example2').accordion();
    });
  </script>
</body>

</html>