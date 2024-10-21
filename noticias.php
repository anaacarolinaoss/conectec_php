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
            background-color: #f0f0f0; /* Cor de fundo da página */
        }
        .button-container {
            display: flex;
            gap: 10px; /* Espaço entre os botões */
        }
        a {
            padding: 10px 20px;
            font-size: 16px;
            margin: 10px; /* Margem em torno dos botões */
            border: none; /* Remove a borda padrão */
            border-radius: 5px; /* Bordas arredondadas */
            background-color: #a50000; /* Cor de fundo padrão dos botões */
            color: white; /* Cor do texto */
            text-decoration: none; /* Remove o sublinhado do link */
            display: inline-block; /* Para que o link se comporte como um botão */
            cursor: pointer; /* Muda o cursor ao passar sobre o botão */
            transition: background-color 0.3s; /* Transição suave para a cor */
        }
        a:hover {
            background-color: #850000; /* Cor do botão ao passar o mouse */
        }
    </style>
</head>
<body>
    <div class="button-container">
        <a href="">Notícias</a>
        <a href="eventos.php">Eventos</a>
        <a href="calendario.php">Calendário</a>
        <a href="avisos.php">Avisos</a>
    </div>
</body>
</html>