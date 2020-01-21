<nav class="outer-nav right vertical">
  <li><a href="index.php">Home</a></li>
  <li><a href="about-tetramap.php">About TetraMap</a></li>
  <li><a href="tetramap.php">TetraMap</a></li>
  <li><a href="about-us.php">About Us</a></li>
  <li><a href="contact.php">Contact</a></li>
  
    <?php
    if(strlen($_SESSION['login'])==0){
          ?>
          <li><a href="login-regi.php">User</a>  </li>
          <?php
          }else{
            ?><li><a href="profile.php">Profile</a></li>
             <li><a href="logout.php">Logout</a></li>
            <?php 
          }?>
</nav>