<?php

//conexão com o servidor 
include_once "conexao.php";

// Ler o JSON enviado no corpo da requisição
$jsonData = file_get_contents('php://input');

// Decodificar o JSON em um objeto
$userData = json_decode($jsonData);

// Verificar se a decodificação foi bem-sucedida
if ($userData === null) {
  http_response_code(400); // Bad Request
  echo json_encode(["error" => "Erro ao decodificar os dados JSON."]);
  exit();
}

// Salvar no banco de dados
$response;
if (
  $query = mysqli_query($conn, "INSERT INTO usuarios (nome,data_nascimento,sexo,cpf,celular,telefone,nome_materno,login,hash_senha,cep) 
  VALUES ('$userData->nome','$userData->nascimento','$userData->sexo','$userData->cpf','$userData->cel','$userData->tel','$userData->nomeMaterno','$userData->login','" . md5($userData->senha) . "', '$userData->cep')")
) {
  // Responder com um JSON (exemplo)
  $response = "Dados inseridos com sucesso!";
  echo json_encode(["success" => true, "response" => $response]);
} else {
  $response = "Ocorreu um erro!" . mysqli_error($conn);
  echo json_encode(["success" => false, "response" => $response]);
}

