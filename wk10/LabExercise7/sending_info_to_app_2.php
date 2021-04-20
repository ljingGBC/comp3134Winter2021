<form method="get">
    <input name="q" placeholder="Enter Text"> <br/>
    <input type="submit" value="Go">
</form>

<?php
    echo isset ($_GET['q']) ? htmlentities($_GET['q']) : "";
?>