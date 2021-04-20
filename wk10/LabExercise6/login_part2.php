<?php
    if (!isset($_POST['pw'])) {
?>
        <h1>Weak Password</h1>
        <form method="post" id="hide">
            <div id="form">
            <label>Password</label>
            <input type="password" name="password"> <br/>
            <input type="submit">
            </div>
        </form>

<?php
        $password = $_POST["password"];
        $common_pw = ['123456', '123456789', 'qwerty', 'password', '111111',
        '12345678', 'abc123', '1234567', 'password1', '12345'];
        if (in_array($password, $common_pw)) {
            $username = "eva";
            echo "Welcome {$username} to Your Portal";
            echo "<script>
            document.getElementById('hide').style.display = 'none';
            </script>";
        }
    }
?>