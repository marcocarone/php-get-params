<?php
// Stampare una stringa verde se la variabile password passata in GET è uguale a “Boolean”, altrimenti stampare una stringa rossa.
$password = $_GET["pass"];
if ($password == "boolean") {
  $class = "green";
  $messaggio = "hai indovinato";
} else {
  $class = "red";
  $messaggio = "hai sbagliato";
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
    <h1 class="<?php  echo $class;?>"><?php  echo $messaggio; ?></h1>
  </body>
</html>
