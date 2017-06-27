<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>addemail.php</title>

  </head>
  <body>
  <?php
  $first_name = $_POST['firstname'];
  $last_name = $_POST['lastname'];
  $email = $_POST['email'];

  $dbc = mysqli_connect('localhost','linbiao','mypasswd','elvis_store')
  or die("Error to connecting to database server.");



  $query = "INSERT INTO elvis_list(first_name, last_name, email)" .
  "VALUES ('$first_name', '$last_name','$email')";


  mysqli_query($dbc, $query)
  or die('Error querying database.');


  mysqli_close($dbc);

  echo 'Customer Added'




   ?>
  </body>
</html>
