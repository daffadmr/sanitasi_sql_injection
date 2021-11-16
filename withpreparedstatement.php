<?php

$servername = "localhost";
$username = "root";
$password = "";

  $conn = new PDO("mysql:host=$servername;dbname=sql_injection_test", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$result= $conn->query("SELECT * FROM user");
$total = $result->rowCount();

$username = "apasaja' OR '1'='1";

#prepared statement
$query = $conn->prepare("SELECT * FROM user WHERE username = ?");
$query->execute(array($username));

var_dump($query->fetch(PDO::FETCH_ASSOC));
?>