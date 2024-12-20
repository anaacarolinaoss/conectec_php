<!DOCTYPE html>
<html>
<head>
  <title>Cadastro</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(to right, #000000, #8b0000);
      margin: 0;
    }
    .header {
      display: flex;
      align-items: center; /* Alinha verticalmente a imagem e o texto */
      justify-content: center; /* Centraliza horizontalmente */
      margin-bottom: 20px; /* Espaço entre o cabeçalho e o container */
      padding-top: 20px; /* Espaço acima do cabeçalho */
    }
    .header-image {
      width: 150px; /* Tamanho da imagem */
    }
    .titulo {
      font-size: 50px; 
      color: white;
      margin-left: 20px; 
      font-family: Arial, sans-serif;
    }
    .container {
      width: 300px;
      padding: 20px;
      background-color: #FFFFFF; 
      border-radius: 10px; 
      box-shadow: 0 6px 30px rgba(0, 0, 0, 0.7); 
      text-align: center;
      margin: 0 auto; /* Centraliza o container horizontalmente */
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
  <div class="header">
    <img src="./imagens/conectec2.png" class="header-image" alt="Logo Conectec">
    <h1 class="titulo">Conectec</h1>
  </div>    
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
      <input type="password" name="senha_confirmacao" placeholder="Confirme a Senha" required>
      <button class="button" type="submit">Cadastrar</button>
    </form>
    <p>Já possui uma conta? <a href="index.php">Faça login</a></p>
  </div>

  <?php
  // Código PHP para conexão e manipulação do banco de dados
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
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Verificar se o usuário é um administrador
    $sql = "SELECT senha FROM administradores WHERE usuario = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
      $stmt->bind_result($senha_hash);
      $stmt->fetch();
      if (password_verify($senha, $senha_hash)) {
        echo "Login como administrador bem-sucedido!";
        // Redirecionar ou iniciar sessão
      } else {
        echo "Senha incorreta para administrador.";
      }
    } else {
      // Verificar se o usuário é um usuário comum
      $sql = "SELECT senha FROM usuarios_comuns WHERE usuario = ?";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("s", $usuario);
      $stmt->execute();
      $stmt->store_result();

      if ($stmt->num_rows > 0) {
        $stmt->bind_result($senha_hash);
        $stmt->fetch();
        if (password_verify($senha, $senha_hash)) {
          header("Location: noticias.php");
          exit();
        } else {
          echo "Senha incorreta para usuário comum.";
        }
      } else {
        echo "Usuário não encontrado.";
      }
    }
    $stmt->close();
  }

  $conn->close();
  ?>
</body>
</html>
