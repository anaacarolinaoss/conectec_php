<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conectec</title>
    <style> 
        header {
            background-color: #800000; 
            text-align: center;
            font-family: Arial, sans-serif;
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .imagem-cabecalho {
            margin: 10px; /* Margem ao redor da imagem */
            max-width: 135px; /* Tamanho máximo da imagem */
            height: auto; /* Mantém a proporção da imagem */
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #fff;
            display: flex;
            align-items: center;
        }

        .menu {
            font-family: 'Verdana', sans-serif;
            list-style: none;
            margin: 0; 
            padding: 0; 
            display: flex; 
            justify-content: space-around; 
            width: 100%; 
        }

        .menu li {
            flex: 1; 
            margin: 0; 
            background-color: #800000; 
            padding: 15px; 
            border: 2px solid #fff; 
            border-radius: 0px; 
            transition: background-color 0.3s;
        }

        .menu li:hover {
            background-color: rgba(280, 78, 0, 0.4); 
        }

        .menu a {
            color: #fff; 
            text-decoration: none;
            display: block; 
            text-align: center; 
        }

        @media (max-width: 768px) {
            .menu-button {
                display: block;
            }
            .menu {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                background-color: #ff0000;
                padding: 20px;
                width: 100%;
            }
            .menu li {
                margin-bottom: 10px;
            }
            .menu a {
                display: block;
            }
            .menu-button:hover + .menu {
                display: block;
            }
        }

        .texto-centralizado {
            display: flex; /* Usando Flexbox */
            justify-content: center; /* Centraliza horizontalmente */
            align-items: center; /* Centraliza verticalmente */
            height: calc(10vh - 150px); /* Altura total da tela menos altura do header e menu */
            text-align: center; /* Centraliza o texto */
            font-size: 20px; /* Tamanho da fonte */
            color: #000; /* Cor do texto */
        }

        .subtitulo {
            font-size: 15px; /* Tamanho do subtítulo */
            color: #000; /* Cor do subtítulo */
            margin-top: 10px; /* Espaço acima do subtítulo */
        }

        /* Sidebar adicional */
        .info-sidebar {
            position: fixed;
            top: 0;
            right: -1000px; /* Mantém a sidebar fora da tela */
            width: 250px;
            height: 100%;
            background-color: #800000;
            color: black;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding: 20px;
            transition: right 0.3s;
            z-index: 1000;
        }

        .info-sidebar.open {
            right: 0; /* Move para dentro da tela */
        }

        .back-button {
            cursor: pointer;
            margin-bottom: 20px;
            font-size: 24px;
            color: white;
        }

        .info-button {
            background-color: #8000;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-size: 16px;
            margin-left: 20px;
        }

        .info-button:hover {
            background-color: rgba(255, 255, 255, 0.8);
        }

        .avisos {
            margin: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
        }

        .editable-text {
            border: 1px dashed #ccc;
            padding: 10px;
            background-color: #fff;
            margin-bottom: 10px;
        }

        .edit-button {
            background-color: #4CAF50; /* Cor do botão */
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px; /* Margem acima do botão */
        }

        .edit-button:hover {
            background-color: #45a049; /* Cor do botão ao passar o mouse */
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="imagens/conectec2.png" alt="Imagem no cabeçalho" class="imagem-cabecalho">
                <h1>Conectec</h1>
            </div>
            <nav>
              
            </nav>
            <button class="info-button" onclick="toggleInfoSidebar()">&#9776;</button> 
        </div>
    </header>
    
    <div class="info-sidebar" id="infoSidebar">
        <span class="back-button" onclick="toggleInfoSidebar()">&#8592;</span>
        <a href="sobre.php" class="info-button">Sobre</a>
        <a href="privacidade.php" class="info-button">Política de Privacidade</a>
        <a href="ajuda.php" class="info-button">Ajuda</a>
    </div>
    <ul class="menu">
                    <li><a href="noticias.php">Notícias</a></li>
                    <li><a href="eventos.php">Eventos</a></li>
                    <li><a href="calendario.php">Calendário</a></li>
                    <li><a href="avisos.php">Avisos</a></li>
                </ul>

    <div class="texto-centralizado">
        <p>Avisos!</p>
        <h2 class="subtitulo">Aqui você encontrará as informações de maneira mais fácil.</h2>
    </div>

    <div class="avisos">
        <div class="editable-text" id="editableText" contenteditable="true">
            <p><i class="fas fa-exclamation-triangle warning"></i> Em virtude da situação emergencial das queimadas na região, dia 26/08 as aulas serão de forma remota. Para os alunos que não puderem assistir as aulas, deverão entregar atividades para computação de frequência.</p>
            <p><i class="fas fa-exclamation-triangle warning"></i> Dia 10/10, quinta-feira, aulão com a professora Josi no salão nobre às 08:30.</p>
            <p><i class="fas fa-exclamation-triangle warning"></i> Devido a problemas na rede de água da unidade, amanhã 11/10, sexta-feira, as aulas serão remotas pelo teams e o trote será adiado, sem data prevista!</p>
        </div>
    </div>

    <button class="edit-button" onclick="saveText()">Salvar Avisos</button> <!-- Botão para salvar os avisos -->

    <script>
        function toggleInfoSidebar() {
            const infoSidebar = document.getElementById('infoSidebar');
            infoSidebar.classList.toggle('open');
        }

        function saveText() {
            const editableText = document.getElementById('editableText');
            alert("Avisos salvos:\n" + editableText.innerHTML);
            // Aqui você pode adicionar a lógica para salvar o texto em um banco de dados ou arquivo
        }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>
