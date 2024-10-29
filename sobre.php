<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre - Conectec</title>
    <style> 
        body {
            font-family: Arial, sans-serif; /* Define a fonte padrão */
            margin: 0;
            padding: 0;
            background-color: #f5f5f5; /* Cor de fundo suave */
        }

        header {
            background-color: #800000; 
            text-align: center;
            padding: 20px 0;
        }

        .container {
            display: flex;
            justify-content: center; /* Centraliza a logo */
            max-width: 1200px;
            margin: 0 auto;
        }

        .imagem-cabecalho {
            margin: 10px;
            max-width: 135px; 
            height: auto; 
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #fff;
            display: flex;
            align-items: center;
        }

        .texto-centralizado {
            display: flex; 
            justify-content: center; 
            align-items: center; 
            height: calc(90vh - 150px); /* Altura total da tela menos altura do header */
            text-align: center; 
            font-size: 20px; 
            color: #333; /* Cor do texto */
            padding: 20px; /* Adiciona um pouco de espaço ao redor do texto */
            background-color: #fff; /* Fundo branco para contraste */
            border-radius: 8px; /* Cantos arredondados */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Sombra suave */
            margin: 20px; /* Espaçamento em torno da seção */
        }

        .subtitulo {
            font-size: 15px; 
            color: #666; /* Cor mais suave para o subtítulo */
            margin-top: 10px; 
        }

        .back-button {
            position: absolute; /* Fixa a posição da setinha */
            top: 20px; 
            left: 20px; 
            font-size: 24px; 
            cursor: pointer; 
            color: white; 
            background: #800000; /* Fundo da setinha */
            border: none; 
            border-radius: 50%; /* Bordas arredondadas */
            padding: 10px; /* Espaçamento interno */
            transition: background-color 0.3s; /* Transição suave */
        }

        .back-button:hover {
            background-color: #a00000; /* Cor mais clara ao passar o mouse */
        }

        .info-sidebar {
            position: fixed;
            top: 0;
            right: -1000px; 
            width: 250px;
            height: 100%;
            background-color: #800000;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding: 20px;
            transition: right 0.3s;
            z-index: 1000;
        }

        .info-sidebar.open {
            right: 0; 
        }

        .info-sidebar p {
            font-size: 16px; 
            margin: 0; 
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
        </div>
    </header>

    <button class="back-button" onclick="window.history.back()">&#8592;</button>

    <div class="texto-centralizado">
        <div>
            <h2>Sobre a Conectec</h2>
            <p>A Conectec é uma plataforma dedicada a conectar alunos e funcionários da escola de forma eficaz. Nossa missão é facilitar a comunicação e o acesso à informação para todos.</p>
            <p>Com uma variedade de serviços e uma equipe comprometida, buscamos inovar e oferecer a melhor experiência para nossos usuários.</p>
            <p class="subtitulo">Junte-se a nós e faça parte dessa rede!</p>
        </div>
    </div>

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
