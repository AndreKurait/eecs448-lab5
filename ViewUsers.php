<?php
  $mysqli = new mysqli("mysql.eecs.ku.edu", "a841k310", "Haew4she", "a841k310");
  if ($mysqli->connect_errno) {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
  }
  $result = $mysqli->query("SELECT * FROM Users");
  if (result)
  {
    while ($row = $result->fetch_assoc()) {
      printf ("%s \n", $row["user_id"]);
      echo "<br>";
    }
  }
  $mysqli->close();
?>
