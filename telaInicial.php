<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela com Botões</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            height: 100vh;
            margin: 0;
        }
        .button-container {
            display: flex;
            gap: 10px; /* Espaço entre os botões */
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="button-container">
        <button onclick="alert('Botão 1 clicado')">Botão 1</button>
        <button onclick="alert('Botão 2 clicado')">Botão 2</button>
        <button onclick="alert('Botão 3 clicado')">Botão 3</button>
        <button onclick="alert('Botão 4 clicado')">Botão 4</button>
    </div>
</body>
</html>