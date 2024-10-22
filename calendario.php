<header>
  <div class="container">
    <div class="logo">
      <h1>Conectec</h1>
      <style>
        header {
  background-color: #8b0000; 
  padding: 20px 0;
  text-align: center;
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
}

.menu {
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
  background-color: #8b0000; 
  padding: 15px; 
  border: 2px solid #fff; 
  border-radius: 0px; 
  transition: background-color 0.3s;
}

.menu li:hover {
  background-color: rgba(255, 255, 255, 0.2); 
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

</style>
    </div>
    <nav>
      <button class="menu-button">
        <span></span>
        <span></span>
        <span></span>
      </button>

    </nav>
  </div>
</header>
<ul class="menu">
        <li><a href="#">Notícias</a></li>
        <li><a href="#">Eventos</a></li>
        <li><a href="#">Calendário</a></li>
        <li><a href="#">Avisos</a></li>
      </ul>
    
