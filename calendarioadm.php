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
        <a href="sobre.php" class="info-button">Sobre</a>
        <a href="privacidade.php" class="info-button">Política de Privacidade</a>
        <a href="ajuda.php" class="info-button">Ajuda</a>
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
            <h2 class="subtitulo">Aqui você encontrará as datas e  informações no calendario.</h2>

            <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendário Dinâmico</title>
    <style>
         body {
            font-family: 'Arial', sans-serif;
            background-color: #ffffff; /* Cor de fundo branco */
            text-align: center;
            margin: 20px;
        }
        .calendar {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 10px;
            margin-top: 20px;
            border: 2px solid #800000; /* Borda vermelha suave */
            padding: 10px;
            border-radius: 8px; /* Bordas arredondadas */
            background-color: #fff; /* Fundo branco para o calendário */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Sombra para profundidade */
        }
        .calendar div {
            padding: 20px;
            background-color: #; /* Cor de fundo suave para os dias */
            border: 1px solid #ff9999; /* Borda vermelha suave */
            text-align: center;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .calendar div:hover {
            background-color: #ffcccc; /* Cor de fundo ao passar o mouse */
        }

        .modal, .edit-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            justify-content: center;
            align-items: center;
        }
        .modal-content, .edit-modal-content {
            background: white;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
        button {
            background-color: #800000; /* Botão em vermelho suave */
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="text"], textarea {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .calendar-header {
            grid-column: span 7;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
    </style>
</head>
<body>
    <div class="calendar" id="calendar"></div>

    <!-- Modal para adicionar informação -->
    <div class="modal" id="modal">
        <div class="modal-content">
            <h3>Adicionar Informação</h3>
            <input type="text" id="infoInput" placeholder="Digite sua informação">
            <button onclick="addInfo()">Adicionar</button>
            <button onclick="closeModal()">Fechar</button>
        </div>
    </div>

    <!-- Modal para editar informação -->
    <div class="edit-modal" id="editModal">
        <div class="edit-modal-content">
            <h3>Editar Informação</h3>
            <textarea id="editInput" rows="4" placeholder="Edite sua informação"></textarea>
            <button onclick="saveEdit()">Salvar</button>
            <button onclick="closeEditModal()">Fechar</button>
        </div>
    </div>

    <script>
        const calendarElement = document.getElementById('calendar');
        const modal = document.getElementById('modal');
        const editModal = document.getElementById('editModal');
        const infoInput = document.getElementById('infoInput');
        const editInput = document.getElementById('editInput');
        let currentDate = new Date();
        let selectedDate = null;
        let editDate = null;

        function renderCalendar(date) {
            calendarElement.innerHTML = '';
            const year = date.getFullYear();
            const month = date.getMonth();

            // Definindo os dias da semana
            const days = ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'];
            const calendarHeader = document.createElement('div');
            calendarHeader.className = 'calendar-header';

            // Botões de navegação
            const prevButton = document.createElement('button');
            prevButton.innerText = '←';
            prevButton.onclick = () => {
                date.setMonth(month - 1);
                renderCalendar(date);
            };

            const nextButton = document.createElement('button');
            nextButton.innerText = '→';
            nextButton.onclick = () => {
                date.setMonth(month + 1);
                renderCalendar(date);
            };

            calendarHeader.appendChild(prevButton);
            calendarHeader.appendChild(document.createTextNode(`${month + 1}/${year}`));
            calendarHeader.appendChild(nextButton);
            calendarElement.appendChild(calendarHeader);

            // Adicionando os dias da semana
            days.forEach(day => {
                const dayElement = document.createElement('div');
                dayElement.innerText = day;
                calendarElement.appendChild(dayElement);
            });

            // Adicionando os dias do mês
            const firstDay = new Date(year, month, 1).getDay();
            const daysInMonth = new Date(year, month + 1, 0).getDate();

            for (let i = 0; i < firstDay; i++) {
                calendarElement.appendChild(document.createElement('div'));
            }

            for (let i = 1; i <= daysInMonth; i++) {
                const dayElement = document.createElement('div');
                dayElement.innerText = i;
                dayElement.onclick = () => openModal(year, month, i);
                
                // Recuperar informações armazenadas
                const info = getInfo(year, month, i);
                if (info) {
                    dayElement.innerText += `\n${info}`;
                }

                // Clique para editar a informação
                dayElement.ondblclick = () => openEditModal(year, month, i);
                calendarElement.appendChild(dayElement);
            }
        }

        function openModal(year, month, day) {
            selectedDate = new Date(year, month, day);
            modal.style.display = 'flex';
        }

        function closeModal() {
            modal.style.display = 'none';
            infoInput.value = '';
        }

        function addInfo() {
            const info = infoInput.value;
            if (info) {
                const year = selectedDate.getFullYear();
                const month = selectedDate.getMonth();
                const day = selectedDate.getDate();
                
                // Salvar informação no localStorage
                saveInfo(year, month, day, info);

                // Atualiza o calendário
                renderCalendar(new Date(year, month));
                closeModal();
            }
        }

        function openEditModal(year, month, day) {
            editDate = new Date(year, month, day);
            const existingInfo = getInfo(year, month, day);
            editInput.value = existingInfo || '';
            editModal.style.display = 'flex';
        }

        function closeEditModal() {
            editModal.style.display = 'none';
            editInput.value = '';
        }

        function saveEdit() {
            const year = editDate.getFullYear();
            const month = editDate.getMonth();
            const day = editDate.getDate();
            const updatedInfo = editInput.value;

            // Atualiza a informação no localStorage
            saveInfo(year, month, day, updatedInfo);

            // Atualiza o calendário
            renderCalendar(new Date(year, month));
            closeEditModal();
        }

        function saveInfo(year, month, day, info) {
            const key = `${year}-${month + 1}-${day}`;
            localStorage.setItem(key, info);
        }

        function getInfo(year, month, day) {
            const key = `${year}-${month + 1}-${day}`;
            return localStorage.getItem(key);
        }

        renderCalendar(currentDate);
    </script>
</body>
</html>
  
<?php
require 'db.php';

// Adicionar nova informação
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = $_POST['data'];
    $info = $_POST['info'];

    $stmt = $pdo->prepare("INSERT INTO informacoes_calendario (data, info) VALUES (?, ?)");
    $stmt->execute([$data, $info]);

    echo json_encode(['status' => 'success']);
    exit;
}

// Recuperar informações do calendário
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $stmt = $pdo->query("SELECT * FROM informacoes_calendario");
    $informacoes = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($informacoes);
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Estilos conforme o anterior */
    </style>
</head>
<body>

    <div class="calendar" id="calendar"></div>

    <div class="modal" id="modal">
        <div class="modal-content">
            <h3>Adicionar Informação</h3>
            <input type="date" id="dataInput">
            <input type="text" id="infoInput" placeholder="Digite sua informação">
            <button onclick="addInfo()">Adicionar</button>
            <button onclick="closeModal()">Fechar</button>
        </div>
    </div>

    <script>
        const calendarElement = document.getElementById('calendar');
        const modal = document.getElementById('modal');
        const infoInput = document.getElementById('infoInput');
        const dataInput = document.getElementById('dataInput');

        function renderCalendar() {
            // Renderiza o calendário, implementando lógica conforme o necessário
            // ...
        }

        function openModal() {
            modal.style.display = 'flex';
        }

        function closeModal() {
            modal.style.display = 'none';
            infoInput.value = '';
        }

        async function addInfo() {
            const data = dataInput.value;
            const info = infoInput.value;

            if (data && info) {
                const response = await fetch('calendario.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                    body: new URLSearchParams({
                        data: data,
                        info: info
                    })
                });

                const result = await response.json();
                if (result.status === 'success') {
                    renderCalendar(); // Atualiza o calendário após adicionar
                }
                closeModal();
            }
        }

        async function fetchInfo() {
            const response = await fetch('calendario.php');
            const informacoes = await response.json();
            // Aqui você pode renderizar as informações no calendário
        }

        document.addEventListener('DOMContentLoaded', () => {
            fetchInfo();
            renderCalendar(); // Renderiza o calendário inicialmente
        });
    </script>
</body>
</html>
