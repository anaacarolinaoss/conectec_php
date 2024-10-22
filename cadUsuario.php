<!DOCTYPE html>
<html>
<head>
  <title>Cadastro</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(to right, #000000, #8b0000);
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh; 
      margin: 0;
    }
    .container {
      width: 300px;
      padding: 20px;
      background-color: #FFFFFF; 
      border-radius: 10px; 
      box-shadow: 0 6px 30px rgba(0, 0, 0, 0.7); 
      text-align: center;
    }
    .button {
      background-color: #4682B4;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s; 
    }
    .button:hover {
      background-color: #87CEEB;
    }
    input[type="text"], input[type="password"], select {
      width: 90%; 
      padding: 8px;
      margin: 10px 0; 
      border: 1px solid #ccc; 
      border-radius: 5px; 
    }
    p {
      margin-top: 15px; 
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Cadastro</h2>
    <form action="" method="post">
      
      <select name="tipo_cadastro" required>
        <option value="" disabled selected>Selecione o tipo de cadastro</option>
        <option value="adm">Administrador</option>
        <option value="usuario">Usuário</option>
      </select>
      <input type="text" name="nome" placeholder="Nome" required>
      <input type="text" name="usuario" placeholder="Usuário" required>
      <input type="password" name="senha" placeholder="Senha" required>
      <button class="button" type="submit">Cadastrar</button>
    </form>
    <p>Já possui uma conta? <a href="index.php">Faça login</a></p>
  </div>

  <?php
  // Conectar ao banco de dados
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "cadastro";

  // Criar conexão
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Verificar conexão
  if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
  }

  // Verificar se o formulário foi enviado
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $tipo_cadastro = $_POST['tipo_cadastro'];

    // Hash da senha
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    // Inserir dados no banco de dados
    if ($tipo_cadastro == 'adm') {
      $sql = "INSERT INTO administradores (nome, usuario, senha) VALUES (?, ?, ?)";
    } else {
      $sql = "INSERT INTO usuarios_comuns (nome, usuario, senha) VALUES (?, ?, ?)";
    }

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nome, $usuario, $senha_hash);

    if ($stmt->execute()) {
      echo "Cadastro realizado com sucesso!";
    } else {
      echo "Erro ao cadastrar: " . $conn->error;
    }

    $stmt->close();
  }

  $conn->close();
  ?>
</body>
</html>