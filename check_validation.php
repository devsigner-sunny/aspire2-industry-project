<?php
if(isset($_POST['signup']))
  {
    // include Database connection file 
    include("config.php");
 
    $email = mysqli_real_escape_string($con, $_POST['email']);
 
    $sql = "SELECT email FROM user WHERE email = '$email'";
    $rs = $conn->query($sql);
    $num = $rs->num_rows;
    if($num > 0)
    {
      // email is already exist 
      echo '<div style="color: red;"> <b>'.$email.'</b> is already in use! </div>';
      echo "<script>$('#submit').prop('disabled',true);</script>";
    }
    else
    {
        // email is avaialable to use.
        echo '<div style="color: green;"> <b>'.$email.'</b> is avaialable! </div>';
    }
  }
?>

