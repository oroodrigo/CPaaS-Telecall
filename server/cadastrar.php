<?php

// include_once "conexao.php";

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

// Agora você pode acessar os dados como um array associativo

// Restante das propriedades...

// Faça o que precisa ser feito com os dados, como salvar no banco de dados

// Responder com um JSON (exemplo)
echo json_encode(["success" => true, "message" => "Dados recebidos com sucesso.", "dados" => $dados, "nome" => $dados->nome]);
