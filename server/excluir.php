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

$id = $dados->id;

// Preparar a consulta com um prepared statement
$query = "DELETE FROM usuarios WHERE id = ?";
$stmt = $conn->prepare($query);

// Vincular parâmetro e executar a consulta
$stmt->bind_param("i", $id); // "i" indica um parâmetro do tipo inteiro
$stmt->execute();

if ($stmt->affected_rows > 0) {
  $response = "Usuário deletado com sucesso!";
  echo json_encode(["success" => true, "response" => $response]);
} else {
  $response = "Nenhuma alteração realizada.";
  echo json_encode(["success" => false, "response" => $response]);
}

$stmt->close(); // Fechar o statement
$conn->close(); // Fechar a conexão
