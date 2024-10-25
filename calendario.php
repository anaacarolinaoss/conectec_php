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
        .info-sidebar p {
            font-family: 'Courier New', Courier, monospace; /* Exemplo de nova fonte */
            font-size: 16px; /* Tamanho da fonte */
            color: white; /* Cor do texto */
            margin: 0; /* Remove margens padrão */
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
        <p>Informações Adicionais</p>
        
        <!-- Adicione mais conteúdo aqui, se necessário -->
    </div>
    <script>
        function toggleInfoSidebar() {
            const infoSidebar = document.getElementById('infoSidebar');
            infoSidebar.classList.toggle('open');
        }
    </script>
</body>
</html>
<ul class="menu">
                    <li><a href="noticias.php">Notícias</a></li>
                    <li><a href="eventos.php">Eventos</a></li>
                    <li><a href="calendario.php">Calendário</a></li>
                    <li><a href="avisos.php">Avisos</a></li>
                </ul>
            </nav>
            <p class="texto-centralizado">Bem-vindo ao Calendário!</p>
            <h2 class="subtitulo">Aqui você encontrará as datas e poderá marcar suas informações no calendario.</h2>

            