<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body {
            margin: 0px;
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #000000, #8b0000);
            display: flex;
            flex-direction: column;
            align-items: center; 
            justify-content: center; 
            height: 100vh;
        }
        .header {
            display: flex;
            align-items: center; 
            justify-content: center; 
            margin-bottom: 20px; 
        }
        .header-image {
            width: 150px; 
        }
        .titulo {
            font-size: 50px; 
            color: white;
            margin-left: 20px; 
        }
        .container {
            width: 300px;
            padding: 20px;
            background-color: #FFFFFF; 
            border-radius: 10px; 
            box-shadow: 0 6px 30px rgba(0, 0, 0, 0.7); 
            text-align: center;
        }
        input[type="text"], input[type="password"] {
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
        .register-button {
            margin-top: 10px;
            display: block;
            width: 90%;
            background-color: transparent; 
            color: #000000; 
            border: 1px solid #000000; 
            text-align: center; 
            padding: 10px; 
            border-radius: 5px; 
        }
        .register-button:hover {
            background-color: #87CEEB; 
        }
        p {
            margin-top: 15px; 
        }
        .forgot-password {
            margin-top: 10px;
            font-size: 0.9em;
        }
        .forgot-password a {
            color: #4682B4;
            text-decoration: none;
        }
        .forgot-password a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="./imagens/conectec2.png" class="header-image" alt="Logo Conectec">
        <h1 class="titulo">Conectec</h1>
    </div>    

    <div class="container">
        <h2>Login</h2>
        <form action="" method="post">
            <input type="text" name="usuario" placeholder="Email" required>
            <input type="password" name="senha" placeholder="Senha" required>
            <button class="button" type="submit">Entrar</button>
        </form>
        <p class="forgot-password">
            <a href="recuperacao-senha.php">Esqueceu a senha? Clique aqui</a>
        </p>
        <a href="cadUsuario.php" class="register-button">Cadastre-se</a>
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
                header("Location: telaInical.php"); // Corrigido para telaInical.php
                exit();
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
                    header("Location: noticias.php"); // Corrigido para telaInical.php
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
