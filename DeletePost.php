<html>
	<head>
		<title>Deleting Post</title>
	</head>
	<body>
  <form action="DeletePost1.php" method="POST">
      <b>Select a user:</b><br>
        <table border=1>
          <tr><th>Post_ID</th><th>Content</th><th>Author</th><th>Delete?</th></tr>
            <?php
            $mysqli = new mysqli("mysql.eecs.ku.edu", "a841k310", "Haew4she", "a841k310");
              if ($mysqli->connect_errno) {
                  printf("Connect failed: %s\n", $mysqli->connect_error);
                  exit();
              }

                if ($result = $mysqli->query("SELECT * FROM Posts;"))
                {
                  while ($row = $result->fetch_assoc()) {
                    $x=$row["content"];
                    $y=$row["author_id"];
										$z=$row["post_id"];

                    echo "<tr>";
										echo "<td>" . $z . "</td>";
                    echo "<td>" . $x . "</td>";
                    echo "<td>" . $y . "</td>";
                    echo "<td> <input type='checkbox' name='arrayOfInputs[]' value='$z'> </td>";
                    echo "</tr>";
                  }
                }
              $mysqli->close();
            ?>
      </table>
      <input type="submit" value="Select">
    </form>

	</body>
</html>
<!--output the post-id to some sort of array, then look for that number and delete them-->
