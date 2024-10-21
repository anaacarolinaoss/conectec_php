<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conectec</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
        }
        header {
            background-color: red;
            color: white;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        nav {
            display: flex;
            gap: 15px;
        }
        .menu-icon {
            cursor: pointer;
            width: 25px;
            height: 25px;
            background-color: white;
            border-radius: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.3s;
        }
        .menu-icon:hover {
            background-color: #ddd;
        }
        .sidebar {
            width: 200px;
            background-color: #f4f4f4;
            position: fixed;
            left: -200px; /* Escondido inicialmente */
            top: 0;
            height: 100%;
            transition: left 0.3s;
            padding: 20px;
            box-shadow: 2px 0 5px rgba(0,0,0,0.5);
        }
        .sidebar.open {
            left: 0; /* Exibir quando aberto */
        }
        .sidebar h3 {
            margin: 0 0 15px;
        }
        .sidebar p {
            margin: 5px 0;
        }
        .content {
            margin-left: 20px;
            padding: 20px;
            flex-grow: 1; /* Para ocupar o espaço restante */
        }
    </style>
</head>
<body>

<header>
    <h1>Conectec</h1>
    <nav>
        <span class="menu-icon" onclick="toggleSidebar()">☰</span>
        <span class="menu-icon" onclick="toggleSidebar()">☰</span>
        <span class="menu-icon" onclick="toggleSidebar()">☰</span>
    </nav>
</header>

<div class="sidebar" id="sidebar">
    <h3>Menu</h3>
    <p>Opção 1</p>
    <p>Opção 2</p>
    <p>Opção 3</p>
    <p>Opção 4</p>
</div>

<div class="content">
    <h2>Bem-vindo à Conectec!</h2>
    <p>Esta é uma tela de exemplo com cabeçalho e barra lateral.</p>
    <ul>
        <li>Notícias</li>
        <li>Eventos</li>
        <li>Calendário</li>
        <li>Avisos</li>
    </ul>
</div>

<script>
    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        sidebar.classList.toggle('open');
    }
</script>

</body>
</html>