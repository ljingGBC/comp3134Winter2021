<?php
  if (isset($_POST['submit'])) {
    $username = $_POST["user"];
    $password = $_POST["pwd"];
    if ($username=="host" && $password=="pass"){
      echo "<div id='msg'>Login Successfully!</div>";
    } else {
      echo "<did id='msg'>Error! Login Failed!</div>";
    }
  }
?>

<div id="msg"></div><br />
<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <label for="user">Username:</label><br />
  <input type="text" name="user" value="<?=$_POST['user'] ?>"><br />
  <label for="pwd">Password:</label><br />
  <input type="password" name="pwd" value="<?=$_POST['pwd'] ?>"><br /><br />
  <input type="submit" name="submit" value="Submit">
</form>