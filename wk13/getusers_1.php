<?php
  echo "
    <form method='GET' action='';>
      <label for='user'>First name:</label><br />
      <input type='text' name='fname'><br /><br />
      <input type='submit' name='submit' value='Submit'>
    </form>"
?>

<?php
  if (isset($_GET['submit'])) {

    $server = "localhost";
    $user = "pulled out for security reasons";
    $pw = "pulled out for security reasons";
    $db = "myDB";
    $fname = $_GET['fname'];

    $conn = mysqli_connect($server, $user, $pw, $db);
    if (!$conn) {
      echo "Connection Error. " . mysqli_connect_error();
    }
    $sql = "SELECT * FROM users WHERE firstname='$fname' AND active=1";

    $result = mysqli_query($conn, $sql);
    mysqli_store_result($conn);
    $rows = mysqli_num_rows($result);

    if ($rows > 0) {
      echo "
        <div>
          <table style='width:50%'>
            <tr>
              <th>id</th>
              <th>username</th>
              <th>email</th>
              <th>firstname</th>
              <th>lastname</th>
              <th>active</th>
            </tr>";

      while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['username']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['firstname']."</td>";
        echo "<td>".$row['lastname']."</td>";
        echo "<td>".$row['active']."</td>";
        echo "</tr>";
      }
        echo "</table>
          </div>";
    } else {
      echo "<div>0 results</div>";
    }

  }
?>

<style>
  table, th, td {
    border: 1px solid blue;
  }
</style>