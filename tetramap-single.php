<?php 
session_start();
include('config.php');
error_reporting(0);

if(isset($_POST['submit']))
	{
    if(strlen($_SESSION['login'])==0){
      echo "<script>alert('To save this map, you need to login first.');
      window.location = (\"login-regi.php\");</script>";
    }else{

    }
	$id=$_GET['id'];
  $user_id = $_SESSION['login_id'];
  $sql="INSERT INTO `usermap` (`user_id`, `map_id`) VALUES ('$user_id', '$id')";
  $rs = $conn->query($sql);
  $num = $rs->num_rows;
  echo "<script>alert('This map is saved successfully.');</script>";

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>TetraMap</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta property="og:url"           content="https://www.your-domain.com/your-page.html" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="Your Website Title" />
  <meta property="og:description"   content="Your description" />
  <meta property="og:image"         content="https://www.your-domain.com/path/image.jpg" />
  <script src="//platform-api.sharethis.com/js/sharethis.js#property=5c49319d80b4ba001b1ee7fd&product=inline-share-buttons"></script>
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/triangle.css">
  <link rel="stylesheet" href="assets/css/tetramap.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/media.css">
  
</head>

<body>

  <?php include('modules/notification.php');?>

  <div class="perspective effect-rotate-left original--vh">
    <div class="container ">
      <div class="outer-nav--return"></div>
      <div id="viewport" class="l-viewport">
        <div class="l-wrapper">
          <?php include('modules/header.php');?>
          <nav class="l-side-nav">
            <ul class="side-nav">
              <li class="is-active"><span></span></li>
              <li><span></span></li>
              <li><span></span></li>
            </ul>
          </nav>
          <div class="scroll-downs">
            <div class="mousey">
              <div class="scroller"></div>
            </div>
          </div>
          <ul class="l-main-content main-content">




              <?php 
              $id=intval($_GET['id']);
              $sel="SELECT * from mapstm where id='$id'";
              $rs = $conn->query($sel);
              while($rws = $rs->fetch_assoc()){
                ?>
            <li class="l-section section section--is-active">
              <div class="action-btn-wrap">
                <form method="post" name="submit">
                  <input name="submit" type="submit" value="save">
                </form>
                 <!-- <div class="sharethis-inline-share-buttons"></div> -->
                <!-- AddToAny BEGIN -->
                <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                
                </div>
                <script async src="https://static.addtoany.com/menu/page.js"></script>`


              </div>

             
            <!-- AddToAny END -->
              <div class="about">
                <div class="about--banner">
                  <h2 class="title">Tetramap of <?php echo $rws['title']?></h2>
                  <p><?php echo $rws['description'];?></p>
                </div>
               
                <div class="about--options" style="margin-top:40px;">
                  <div class="tri-container">
                    <div class="up">
                        <p class="bold">PURPOSE<p>
                        <p class="keyword">Action</p>
                        <p class="element">Earth </p>
                      </div>
                      <div class="down">
                        <p class="bold">MEANING <p>
                          <p class="keyword">Species</p>
                        <p class="element">AIR </p>
                      </div>
                      <div class="up">
                        <p class="bold">EMPATHY<p>
                          <p class="keyword">Compromise</p>
                          <p class="element">Water </p>
                        </div>
                        <div class="down">
                        <p class="bold">VITALITY<p>
                          <p class="keyword">Motivation</p>
                          <p class="element">Fire </p>
                    </div>     
                  </div>
                </div>
              </div> <!-- //about -->
            </li> <!-- // section-->


            <li class="l-section section">
              <div class="about">
                <div class="about--banner row" >
                  <h2 style="font-size: 55px;">Example of  this map</h2>
                  <p class="subtitle">that could be important on a daily basis</p>
                  <p class="map-example"><?php echo $rws['examples'];?></p>
                </div>
                <div class="about--options media-none" style="margin-top:40px;">
                <p class="about--options-title">
                  How to use map?
                </p>
                These four questions explain how to use the map by putting the key words into a sentence for you to answer.<br>  Then you can prepare what you want to say, plan to ensure you have covered all bases,<br>  think through a variety of possible responses, challenges and compromises, and ensure everyone leaves feeling engaged, heard and optimistic.     

                </div>
              </div>
            </li>


            <li class="l-section section">
              <div class="work catalitic">
                <h2>Catalitic Questions</h2>
                <p class="subtitle">to help your Thinking</p>
                <div class="qns-set">
                  <div id="eq" class="qns">
                    <p class="qns-i">Earth</p>
                    <span><?php echo $rws['earth_qns'];?></span></div>
                  <div id="aq" class="qns">
                    <p class="qns-i">Air</p>
                    <span><?php echo $rws['air_qns'];?></span>
                  </div>
                  <div id="wq" class="qns">
                    <p class="qns-i">Water</p>
                    <span><?php echo $rws['water_qns'];?></span>
                  </div>
                  <div id="fq" class="qns">
                    <p class="qns-i">Fire</p>
                    <span><?php echo $rws['fire_qns'];?></span>
                  </div>
                </div>
              </div>
            </li>

            <?php  }?>
                   
          </ul>
        </div>
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