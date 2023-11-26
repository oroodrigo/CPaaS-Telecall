<?php
session_start();
//conexão com o servidor 
include_once "conexao.php";

// Seleciona todos os registros de usuarios
$response;
$usuarios = array(); // cria um array vazio para armazenar os usuarios

$query = "SELECT * FROM usuarios";
$result = $conn->query($query) or die($conn->error);

if (
  mysqli_num_rows($result)  < 1 //Registro não encontrado
) {
  // Responder com um JSON
  $response = "Nenhum registro encontrado.";
  echo json_encode(["success" => false, "response" => $response]);
} else {
  while ($row = $result->fetch_object()) {
    $usuario = json_decode(json_encode($row), false);

    array_push($usuarios, $usuario);
  }

  // Responder com um JSON
  $response = "Registros encontrados com sucesso!";
  echo json_encode(["success" => true, "response" => $response, "usuarios" => $usuarios]);
}
