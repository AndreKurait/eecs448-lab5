<?php
  $username = $_POST['user'];
  echo $username;
  echo "'s Posts:<br>"; 
  $mysqli = new mysqli("mysql.eecs.ku.edu", "a841k310", "Haew4she", "a841k310");

  if ($mysqli->connect_errno) {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
  }
  $result = $mysqli->query("SELECT * FROM Posts WHERE author_id='$username'");
  if (result)
  {
    while ($row = $result->fetch_assoc()) {
      printf ("%s \n", $row["content"]);
      echo "<br><br>";
    }
  }
  $mysqli->close();
?>



