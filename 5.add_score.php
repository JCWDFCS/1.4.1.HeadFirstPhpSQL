<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>5.Add scores</title>
  </head>
  <body>
    <?php
    $dbc = mysqli_connect('localhost', 'linbiao', 'mypasswd','guitarwars')
    or die("Error in connecting database.");
    $name = $_POST['name'];
    $score = $_POST['score'];
    $query = "INSERT INTO guitarwars" .
    "VALUES(0, NOW(), '$name','$score')";

    $result = mysqli_query($dbc, $query)
    or die('Erroring in querying...');


    ?>
    <form enctype='multiple/form-data' method="post" action='<?php echo $_SERVER['PHP_SELF'];?>'>
      <input type="hidden" name="MAX_FILE_SIZE" value="32768"/>
      <label for="name">Name:</label>
      <input type="text" id='name' name="name" value="<?php if (!empty($name)) echo $name; ?>">
      <br>
      <label for="score">Score:</label>
      <input type="text" id='score' name="score" value="<?php if (!empty($score)) echo $score; ?>">
      <br>
      <label for="screenshot">Screen shot:</label>
      <input type="file" name="screenshot" value="screenshot">
      <hr>
      <input type="submit" name="Submit" value="Add">

    </form>

  </body>
</html>
