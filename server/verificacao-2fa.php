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

$query = "SELECT * FROM usuarios WHERE login = '$dados->login' AND senha= '$dados->senha'";
$result = $conn->query($query) or die($conn->error);

$row = $result->fetch_object();


if ($row->{$dados->perguntaSecreta} === $dados->respostaSecreta) {
  // //  Inicia uma sessão
  $_SESSION["login"] = $row->login;
  $_SESSION["role"] = $row->role;
  $_SESSION["nome"] = $row->nome;
  $_SESSION["nomeMaterno"] = $row->nome_materno;
  $_SESSION["cpf"] = $row->cpf;
  $_SESSION["cep"] = $row->cep;
  $_SESSION['id'] = $row->id;

  // Responder com um JSON
  $response = "Login feito com sucesso!";
  echo json_encode(["success" => true, "response" => $response]);
} else {
  // Responder com um JSON
  $response = "Resposta errada.";
  echo json_encode(["success" => false, "response" => $response]);
}
