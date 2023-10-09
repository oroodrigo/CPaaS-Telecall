<?php

$HOSTNAME = "localhost";
$DATABASE = "telecall";
$USER = "root";
$PASS = "";

$conn = new mysqli($HOSTNAME, $USER, $PASS, $DATABASE);

if ($conn->connect_error) {
  echo json_encode(["sucess" => false, "error" => $conn->connect_error]);
}
