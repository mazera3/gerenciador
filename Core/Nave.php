<nav class="navbar navbar-expand-lg navbar-info container" style="background-color: #ccfcfc">
  <a class="navbar-brand" href="#"><img src="./assets/logo.png" width="80px" height="20px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="./">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./Cadastro.php">Cadastro</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Relatórios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="./Listar_Operacoes.php">Listar Operações</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="./Total_Operacoes.php">Total de Operações</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="./Filtro.php">Filtro</a>
        </div>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Procurar" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Localizar</button>
    </form>
  </div>
</nav>