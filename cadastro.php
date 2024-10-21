<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Cadastro</title>
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
        button {
            background-color:#4682B4;
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
    input[type="text"], input[type="password"], input[type="email"]{
      width: 90%; /* Largura total do campo */
      padding: 8px;
      margin: 10px 0; /* Margem entre os campos */
      border: 1px solid #ccc; /* Borda */
      border-radius: 5px; /* Bordas arredondadas */
    }
    p {
      margin-top: 15px; /* Margem acima do texto */
    }
    </style>
</head>
<body>
    <div class="container">
        <h2>Cadastre-se</h2>
        <form action="register.php" method="POST">
            <input type="text" name="username" placeholder="Usuário" required>
            <input type="password" name="password" placeholder="Senha" required>
            <input type="email" name="email" placeholder="email" required>
            <br><br>
            <button type="submit">Cadastrar</button>
        </form>
        <p>é um administrador?<a href="index.php">clique aqui</a></p>
    </div>
</body>
</html>