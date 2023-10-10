<?php

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

// Faça o que precisa ser feito com os dados, como salvar no banco de dados
$response;

$query = "SELECT * FROM usuarios WHERE login = '$dados->login' AND hash_senha= '" . md5($dados->senha) . "'";
$result = $conn->query($query) or die($conn->error);

$row = $result->fetch_object();

if (
  mysqli_num_rows($result) < 1
) {
  unset($_SESSION["login"]);
  unset($_SESSION["role"]);
  unset($_SESSION["nome"]);

  $response = "Login ou senha incorreto.";
  echo json_encode(["success" => false, "response" => $response, "dados" => $dados]);
} else {
  $_SESSION["login"] = $row->login;
  $_SESSION["role"] = $row->role;
  $_SESSION["nome"] = $row->nome;

  $response = "Login feito com sucesso!";
  echo json_encode(["success" => true, "response" => $response, "dados" => $dados]);
}

// Responder com um JSON (exemplo)
