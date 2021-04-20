<?php
  session_start();

  $_SESSION['confirmation'] = "confirmed";

  if (isset($_POST['submit'])) {
    $confirmation = $_POST["confirmation"];
    $username = $_POST["user"];
    $password = $_POST["pwd"];
    if ($username=="host" && $password=="pass"){ 
      echo "<div id='msg'>Login Successfully!</div>";
      if ($_SESSION['confirmation'] == $confirmation) {
        echo "<div id='msg'>Session variable and confirmation value have SAME value!</div>";
      } else {
        echo "<div id='msg'>Session variable and confirmation value DON'T have same value!</div>";
      }
    } else {
      echo "<did id='msg'>Error! Login Failed!</div>";
    }
  }
?>

<div id="msg"></div><br />    

<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <label for="user">Username:</label> <br />
  <input type="text" name="user" value="<?=$_POST['user'] ?>"> <br />
  <label for="pwd">Password:</label><br />
  <input type="password" name="pwd" value="<?=$_POST['pwd'] ?>"> <br /> <br />
  <input type="hidden" name="confirmation" value="confirmed">  
  <input type="submit" name="submit" value="Submit">
</form>

