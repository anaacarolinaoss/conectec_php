<header>
  <div class="container">
    <div class="logo">
    <img src="imagens/conectec2.png" alt="Imagem no cabeçalho" class="imagem-cabecalho">
      <h1>Conectec</h1>
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
}

.imagem-cabecalho {
    margin: 10px; /* Margem ao redor da imagem */
    max-width: 135px; /* Tamanho máximo da imagem */
    height: auto; /* Mantém a proporção da imagem */
}

.container {
  max-width: 1200px;
  margin: 0 auto;
  display: flex;
  justify-content: center; 
  align-items: center;
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

</style>
    <div class="menu-toggle" id="menuToggle">☰</div>
    </script>
    <nav>
    </nav>
  </div>
</header>
<ul class="menu">
        <li><a href="#">Notícias</a></li>
        <li><a href="#">Eventos</a></li>
        <li><a href="#">Calendário</a></li>
        <li><a href="#">Avisos</a></li>
      </ul>
     <p class="texto-centralizado">Bem-vindo ao Calendário!</p>
     <h2 class="subtitulo">Aqui você encontrará as datas e poderá marcar suas informações.</h2>
     