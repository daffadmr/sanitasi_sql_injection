<?php

$servername = "localhost";
$username = "root";
$password = "";

  $conn = new PDO("mysql:host=$servername;dbname=sql_injection_test", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$result= $conn->query("SELECT * FROM user");
$total = $result->rowCount();

$username = "daffadamar12' OR '1' = '1"; 

$query = "SELECT * FROM user WHERE username = '$username'";
var_dump( $conn->query($query)->fetch(PDO::FETCH_ASSOC));

?>