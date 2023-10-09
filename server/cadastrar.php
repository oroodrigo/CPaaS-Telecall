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
if (
  $query = mysqli_query($conn, "INSERT INTO usuario (nome,data_nascimento,sexo,cpf,celular,telefone,nome_materno,login,hash_senha,cep) 
  VALUES ('$dados->nome','$dados->nascimento','$dados->sexo','$dados->cpf','$dados->cel','$dados->tel','$dados->nomeMaterno','$dados->login','" . md5($dados->senha) . "', '$dados->cep')")
) {
  $response = "Dados inseridos com sucesso!";
} else {
  $response = "Ocorreu um erro!" . mysqli_error($conn);
}

// Responder com um JSON (exemplo)
echo json_encode(["success" => true, "response" => $response]);
