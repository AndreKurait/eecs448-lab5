<?php
$username = $_POST['username'];
$post = $_POST['post'];


if($post==""){
  echo "You cannot create a blank post<br>";
  header( "refresh:2; url=https://people.eecs.ku.edu/~a841k310/lab5/CreatePosts.html" );
}
else{
  /* gain access to mysqli */
  $mysqli = new mysqli("mysql.eecs.ku.edu", "a841k310", "Haew4she", "a841k310");
  
  /* check connection */
  if ($mysqli->connect_errno) {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
  }

  $checkUsers = "SELECT * FROM Users WHERE user_id='$username'";
  $post_id = rand(0, 500000);
  $query = "INSERT INTO Posts(content, author_id, post_id) VALUES ('$post', '$username', '$post_id')";

  $result = $mysqli->query($checkUsers);
  $row_count = mysqli_num_rows($result);

  if($row_count==0){
        echo "This user does not exist, please enter a valid username";
  }
  else if($mysqli->query($query)){
      echo "Well done " .$username. ". Your post has been created <br>";
  }
  $mysqli->close();
}

?>
