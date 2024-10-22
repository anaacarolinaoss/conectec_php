<!DOCTYPE html>
<html>
<head>
    <title>Recuperação de Senha</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #000000, #8b0000);
            margin: 0;
            display: flex;
            flex-direction: column; /* Alinha os elementos verticalmente */
            align-items: center; /* Centraliza os elementos horizontalmente */
            height: 100vh;
            justify-content: center; /* Centraliza verticalmente o conteúdo */
        }
        .header {
            display: flex;
            align-items: center; /* Alinha a imagem e o texto */
            justify-content: center; /* Centraliza horizontalmente */
            margin-bottom: 20px; /* Espaço entre o cabeçalho e o conteúdo */
        }
        .header-image {
            width: 150px; /* Tamanho da imagem */
        }
        .titulo {
            font-size: 50px; 
            color: white;
            margin-left: 20px; 
            font-family: Arial, sans-serif;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5); /* Sombra para destacar o texto */
        }
        .container {
            width: 300px;
            padding: 20px;
            background-color: #FFFFFF; 
            border-radius: 10px; 
            box-shadow: 0 6px 30px rgba(0, 0, 0, 0.7); 
            text-align: center;
        }
        input[type="email"] {
            width: 90%; 
            padding: 8px;
            margin: 10px 0; 
            border: 1px solid #ccc; 
            border-radius: 5px; 
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
        <h2>Recuperação de Senha</h2>
        <form action="" method="post">
            <input type="email" name="email" placeholder="Digite seu e-mail" required>
            <button class="button" type="submit">Enviar Instruções</button>
        </form>
        <p><a href="index.php">Voltar ao Login</a></p>
    </div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];

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

        // Verificar se o e-mail existe na tabela de usuários
        $sql = "SELECT usuario FROM usuarios_comuns WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            // Gerar um token de recuperação
            $token = bin2hex(random_bytes(50));
            // Armazenar o token no banco de dados com uma data de expiração
            $sql = "UPDATE usuarios_comuns SET token_recuperacao = ?, data_expiracao = NOW() + INTERVAL 1 HOUR WHERE email = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $token, $email);
            $stmt->execute();

            // Enviar e-mail com instruções para redefinir a senha
            $link = "http://seusite.com/resetar-senha.php?token=" . $token;
            $subject = "Redefinição de Senha";
            $message = "Clique no link a seguir para redefinir sua senha: " . $link;
            $headers = "From: no-reply@seusite.com";

            if (mail($email, $subject, $message, $headers)) {
                echo "<p>Instruções para recuperação de senha enviadas para seu e-mail.</p>";
            } else {
                echo "<p>Erro ao enviar e-mail. Tente novamente mais tarde.</p>";
            }
        } else {
            echo "<p>E-mail não encontrado.</p>";
        }

        $stmt->close();
        $conn->close();
    }
    ?>
</body>
</html>
