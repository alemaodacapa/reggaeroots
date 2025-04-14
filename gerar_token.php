<?php
header('Content-Type: application/json');

// Gera um token aleatório
$token = bin2hex(random_bytes(16));

// Salva o token em um arquivo temporário com o caminho para o arquivo real
$token_file = "temp_tokens/$token.txt";
$file_path = "downloads/?"; // Caminho do arquivo real

// Armazena o caminho do arquivo real no arquivo temporário
file_put_contents($token_file, $file_path);

// Retorna o token gerado
echo json_encode(["status" => "ok", "token" => $token]);
?>
