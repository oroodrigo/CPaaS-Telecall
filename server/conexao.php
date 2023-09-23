<?php

$HOSTNAME = "localhost";
$DATABASE = "telecall";
$USER = "root";
$PASS = "";

$conn = new mysqli ($HOSTNAME,$USER,$PASS,$DATABASE);

if($conn->connect_error){
  echo"Falha ao conectar:(".$conn->connect_error.")".$conn->connect_error; 
} else 
  echo "Conexão realizada com sucesso!";



