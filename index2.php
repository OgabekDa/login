
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Anor.uz</title>
  </head>
  <body>
    <center>
    <form action="data.php" method="POST">
        <p>F.I.O</p>
        <input type="text" name="name">
        <p>Password</p>
        <input type="text" name="password"><br>
    <input type="submit" name="Kirish" value="OK">
    </form>
</center>
  </body>
</html>
<?php
$q = require_once('users.php');
$w = $q['name'];
echo $w;
?>