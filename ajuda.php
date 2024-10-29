<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajuda - Conectec</title>
    <link rel="stylesheet" href="styles.css"> <!-- Inclua seu CSS aqui, se necessário -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        header {
            background-color: #800000;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: relative; /* Para posicionar a setinha */
        }

        .back-button {
            position: absolute;
            left: 20px;
            top: 10px;
            cursor: pointer;
            font-size: 24px;
            color: white;
            background: none;
            border: none;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center; /* Centraliza o texto */
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        p {
            line-height: 1.6;
            margin-bottom: 10px;
        }

        footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <header>
        <button class="back-button" onclick="window.history.back();">&#8592;</button>
        <h1>Ajuda</h1>
    </header>

    <div class="container">
        <p>Em caso de dúvidas, entre em contato conosco:</p>
        <p>Email: <a href="mailto:@etec.sp.gov.br">@etec.sp.gov.br</a></p>
        <p>Telefone: (16) 3818-2192</p>
    </div>

    <footer>
        &copy; 2024 Conectec. Todos os direitos reservados.
    </footer>
</body>
</html>
