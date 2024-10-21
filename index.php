<!DOCTYPE html>
<html>
<head>
  <title>Login lh</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(to right, #000000, #8b0000 );
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh; /* Altura total da tela */
      margin: 0;
    }
    .container {
      width: 300px;
      padding: 20px;
      background-color:  #FFFFFF; /* Cor de fundo do quadrado */
      border-radius: 10px; /* Bordas arredondadas */
      box-shadow: 0 6px 30px rgba(0, 0, 0, 0.7); /* Sombra */
      text-align: center;
    }
    .button {
      background-color:#4682B4;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s; /* Transição suave */
    }
    .button:hover {
      background-color: #87CEEB;
    }
    input[type="text"], input[type="password"] {
      width: 90%; /* Largura total do campo */
      padding: 8px;
      margin: 10px 0; /* Margem entre os campos */
      border: 1px solid #ccc; /* Borda */
      border-radius: 5px; /* Bordas arredondadas */
    }
    p {
      margin-top: 15px; /* Margem acima do texto */
    }
    .logo {
      width: 100%; /* Largura da imagem */
      height: 100px; /* Altura da imagem */
      margin-bottom: 20px; /* Margem abaixo da imagem */
    }
    
  </style>
</head>
<body>
  <div class="container">
    <h2>Login</h2>
    <form action="login.php" method="post">
      <input type="text" name="usuario" placeholder="Usuário" required>
      <input type="password" name="senha" placeholder="Senha" required>
      <button class="button" type="submit">Entrar</button>
    </form>
    <p>Não possui uma conta? <a href="cadastro.php">Cadastre-se</a></p>
  </div>
</body>
</html>