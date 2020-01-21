<!DOCTYPE html>
<html lang="en">

<head>
  <title>TetraMap</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700,900" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/media.css">

</head>
  <style type="text/css">
    #tetrahedron canvas{
    position: absolute;
    z-index: 9;}
    .floating-txt{
      z-index: 8;
      position:absolute;
      top: 43%;
      font-size: 1rem;
      font-weight: bold;
      display: inline-block;
      color: white;
    }
    .floating-title{
      z-index: 8;
      position:absolute;
      top: 45%;
      font-size: 2.5rem;
      font-weight: bold;
      display: inline-block;
      color: white;
    }
    .txt-right{
      right: 10%;
    }
    .txt-left{
      left: 10%;
    }
  }
  </style>

<body>
  
  <?php include('modules/notification.php');?>

  <div class="perspective effect-rotate-left">
    <div class="container">
      <div class="outer-nav--return"></div>
      <div id="viewport" class="l-viewport">
        <div class="l-wrapper" style="position:relative;">

        <?php include('modules/header.php');?>
        <div id="floating">
          <span class="sub left">Accelerate positive change</span>
          <span class="title left">LOOK THROUGH</span>
          <span class="sub right">The </span>
          <span class="title right">LENS OF NATURE</span>
        </div>
        
        <div id="tetrahedron"></div>
        <div id="constellation-wrap">
          <canvas id="constellation"></canvas>
        </div>
         

        </div>
      </div>
    </div>
    <!-- //container -->
    <!--navigation -->
    <?php include('modules/nav.php');?>
  </div>
  <!-- // perspective -->

  <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
  <script src="assets/js/functions-min.js"></script>
  <script src="assets/js/vendor/three.js"></script>
  <script src="assets/js/vendor/OrbitControls.js"></script>
  <script src="assets/js/vendor//WebGL.js"></script>
  <script src="assets/js/vendor/stats.min.js"></script>
  <script src="assets/js/bg.js"></script>
  <script src="assets/js/3d-logo.js"></script>
</body>

</html>