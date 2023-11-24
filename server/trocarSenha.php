<?php
session_start();
//conexão com o servidor 
include_once "conexao.php";

// Ler o JSON enviado no corpo da requisição
$jsonData = file_get_contents('php://input');

// Decodificar o JSON em um array associativo
$dados = json_decode($jsonData);

// Verificar se a decodificação foi bem-sucedida
if ($dados === null) {
  http_response_code(400); // Bad Request
  echo json_encode(["error" => "Erro ao decodificar os dados JSON."]);
  exit();
}

// Verifica se as credencias passadas com as informações no banco de dados
$response;

$query = "UPDATE usuarios SET senha = '$dados->novaSenha' WHERE id = '{$_SESSION['id']}'";
$result = $conn->query($query) or die($conn->error);

if (
  $conn->affected_rows > 0 // Houve registros alterados
) {
  // Responder com um JSON
  $response = "Senha alterada com sucesso!";
  echo json_encode(["success" => true, "response" => $response]);
} else {
  // Responder com um JSON
  $response = "Nenhuma alteração realizada.";
  echo json_encode(["success" => false, "response" => $response]);
}

$conn->close();
