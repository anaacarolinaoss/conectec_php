<?php
// Conectar ao banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastro";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
  die("Conexão falhou: " . $conn->connect_error);
}

// Receber dados do formulário
$tipo_cadastro = $_POST['tipo_cadastro'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$confirmar_senha = $_POST['confirmar_senha'];

// Verificar se as senhas coincidem
if ($senha != $confirmar_senha) {
  echo "As senhas não coincidem!";
  exit;
}

// Criptografar a senha
$senha_criptografada = password_hash($senha, PASSWORD_DEFAULT);

// Inserir dados no banco de dados
if ($tipo_cadastro == "adm") {
  $sql = "INSERT INTO administradores (usuario, senha) VALUES ('$usuario', '$senha_criptografada')";
} else {
  $sql = "INSERT INTO usuarios_comuns (usuario, senha) VALUES ('$usuario', '$senha_criptografada')";
}

if ($conn->query($sql) === TRUE) {
  echo "Cadastro realizado com sucesso!";
} else {
  echo "Erro ao cadastrar: " . $conn->error;
}

