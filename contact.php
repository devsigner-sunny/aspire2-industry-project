<!DOCTYPE html>
<html lang="en">

<head>
  <title>TetraMap</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="assets/css/main.css">
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
              <div class="contact">
                <div class="contact--lockup">
                  <div class="modal">
                    <div class="modal--information">
                      <p>TetraMap International<br>
                          Head Office<br>
                          Auckland, New Zealand
                          </p>
                    </div>
                    <ul class="modal--options">
                      <li><a href="https://www.youtube.com/user/tetramap">Youtube</a></li>
                      <li><a href="https://www.facebook.com/tetramap">FaceBook</a></li>
                      <li><a href="mailto:tetramap@email.com">Contact Us</a></li>
                    </ul>
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
  <script src="assets/js/functions-sc-min.js"></script>
</body>

</html>