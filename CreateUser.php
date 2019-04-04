<?php
$username = $_POST['username'];

if($username==""){
  echo "No username given";
}
else{
  $mysqli = new mysqli("mysql.eecs.ku.edu", "a841k310", "Haew4she", "a841k310");
  if ($mysqli->connect_errno) {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
  }
  $query = "INSERT INTO Users(user_id) VALUES ('$username');";

  if($mysqli->query($query)){
    echo "Your username, $username, has been created";
  }
  else{
    echo "$username, is not unique. Please try again";
  }
  $mysqli->close();
}
?>
