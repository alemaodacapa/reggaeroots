<?php 
// Habilitar exibição de erros para depuração (REMOVA EM PRODUÇÃO)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Configuração do Banco de Dados
$host = "localhost"; // Servidor
$user = "xwuiyikf_b"; // Usuário do banco de dados
$pass = "Thmpv77d69#Secret"; // Senha do banco de dados
$dbname = "xwuiyikf_a"; // Nome do banco de dados

// Criar Conexão
$conn = new mysqli($host, $user, $pass, $dbname);

// Verificar Conexão
if ($conn->connect_error) {
    die("❌ Falha na conexão: " . $conn->connect_error);
}

// Definir charset para evitar problemas com caracteres especiais
mysqli_set_charset($conn, "utf8");

// Definir constantes de API e plataforma
define("PLATAFORMA", "kiwify");
define("KIWIFY_ACCESS_TOKEN", "73802b90-b56b-4578-825e-5cf3d74c0ad6");
define("KIWIFY_SECRET_KEY", "d13ac823706125700b6cd0513409f5a28342f0731d5679d5158031235a621fa0");
define("MP_ACCESS_TOKEN", "APP_USR-5314616727157998-031001-ff04a46701dfaf179d94620618c5b310-1745537091");
define("MP_SECRET_KEY", "64fb54a8da3c9c1e017039abbaeefd1cf77193121f0bfd5d0fb6f9e71f1303e2");

// ✅ Conexão estabelecida (REMOVA EM PRODUÇÃO)
echo "✅ Conexão com o banco de dados estabelecida com sucesso!";
?>
