<html>
	<head>
		<title>View User Posts</title>
	</head>
	<body>
  <form action="ViewUserPosts1.php" method="POST">
      <b>Select a user </b><br>
        <?php
          $mysqli = new mysqli("mysql.eecs.ku.edu", "a841k310", "Haew4she", "a841k310");
          if ($mysqli->connect_errno) {
              printf("Connect failed: %s\n", $mysqli->connect_error);
              exit();
          }
          echo  "<select id='user' name='user'>";
      
              if ($result = $mysqli->query("SELECT * FROM Users"))
              {
              while ($row = $result->fetch_assoc()) {
                  $x=$row["user_id"];
                  echo    "<option value='$x'>$x</option>";
                  echo "<br>";
              }
              }
          echo  "</select>";
          $mysqli->close();
        ?>
      <input type="submit" value="Select">
    </form>
	</body>
</html>
