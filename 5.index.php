<!DOCTYPE>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Guitar Wars - High Scores</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <<h2>Guitar Wars - High Scores</h2>
  <p>Welcome, Guitar Warrior, do you have what it takes to crack the high score list? If so, just <a href="../1.4.1.HeadFirstPhpSQL/5.add_score.php">add your own score</a>.</p>
  <hr />
<?php
  // Connect to the database
  $dbc = mysqli_connect('localhost', 'linbiao', 'mypasswd', 'guitarwars');

  // Retrieve the score data from MySQL
  $query = "SELECT * FROM guitarwars";
  $data = mysqli_query($dbc, $query);

  // Loop through the array of score data, formatting it as HTML
  echo '<table>';
  while ($row = mysqli_fetch_array($data)) {
    // Display the score data
    echo '<tr><td class="scoreinfo">';
    echo '<span class="score">' . $row['score'] . '</span><br />';
    echo '<strong>Name:</strong> ' . $row['name'] . '<br />';
    echo '<strong>Date:</strong> ' . $row['date'] . '</td></tr>';
  }
  echo '</table>';

  mysqli_close($dbc);
?>

</body>
</html>
