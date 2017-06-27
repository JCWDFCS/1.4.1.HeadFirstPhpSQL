<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>RemoveEmail</title>
  </head>
  <body>
    <h1>Remove Email</h1>
    <?php
    $dbc = mysqli_connect('localhost','linbiao','mypasswd','elvis_store')
    or die("Error to connecting to database server.");

    $email = $_POST['email'];


    $query = "DELETE FROM elvis_list where email = '$email' ";
    $result = mysqli_query($dbc, $query)
    or die('Error in querying.');

    echo "The information about " . $email . " had been removed." ;

    mysqli_close($dbc);




     ?>
  </body>
</html>
