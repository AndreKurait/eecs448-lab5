<?php
$q1 = $_POST['arrayOfInputs'];

  /* gain access to mysqli */
  $mysqli = new mysqli("mysql.eecs.ku.edu", "a841k310", "Haew4she", "a841k310");

  /* check connection */
  if ($mysqli->connect_errno) {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
  }

foreach($_POST['arrayOfInputs'] as $post){
  $query = "DELETE FROM Posts WHERE post_id='$post'";
  if($mysqli->query($query)){
    echo "Post with post_id = $post was deleted<br>";
  }
  else{
        echo "Post with post_id = $post could not be deleted<br>";
  }
}

  $mysqli->close();


?>
