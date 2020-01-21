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
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/tetramap.css">
  <link rel="stylesheet" href="assets/css/media.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
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
              <div class="search">
               


              <form class="work-request" action="tetramap-list.php" method="POST">
                <div class="work-request--information">
                  <div class="information-search">
                    <input id="search" type="text" spellcheck="false" name="keyword" placeholder="Search By Keyword">
                    <!-- <label for="search"></label> -->
                    <input id="search-button" type="submit" value="Search">
                  </div>
                </div>
              </form> 

                <form class="work-request search-by-cate" action="tetramap-list-cate.php" method="POST">
                  <h3 style="padding: 1% 2%; border: 2px solid #0f33ff;">Search By Category</h3>
                  <div class="work-request--options">
                    <div>
                    <?php 
                      $sel="SELECT * from categories";
                      $rs = $conn->query($sel);
                      while($rws = $rs->fetch_assoc()){
                    ?>
                      <input id="opt-<?php echo $rws['category_id'];?>" type="checkbox" value="<?php echo $rws['category_id'];?>" name="categories[]">
                      <label for="opt-<?php echo $rws['category_id'];?>">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                          x="0px" y="0px" viewBox="0 0 150 111" style="enable-background:new 0 0 150 111;" xml:space="preserve">
                          <g transform="translate(0.000000,111.000000) scale(0.100000,-0.100000)">
                            <path d="M950,705L555,310L360,505C253,612,160,700,155,700c-6,0-44-34-85-75l-75-75l278-278L550-5l475,475c261,261,475,480,475,485c0,13-132,145-145,145C1349,1100,1167,922,950,705z" />
                          </g>
                        </svg>
                        <?php
                        print_r($rws['category_name']);
                        print_r(".");?>
                      </label>
                      <?php } ?>
                    </div>
                  </div>
                  <input type="submit" value="select">
                </form>


                 
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
<script src="assets/js/functions-sc-min.js"></script>
</body>

</html>