<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/dashboard.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <title>Dashboard</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg position-fixed top-0">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><img src="./assets/img/logo medio.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="./dashboard.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./registroDoacao.php">Minhas Doações</a>
          </li>
  
        </ul>
        <a href="./doacao.php">
          <button class="btn btn-secundario rounded-5">Quero Doar</button>
        </a>
      </div>
    </div>
  </nav>
  <div class="container-fluid  mt-5">
    <h2 class="cinza-primario">Pets Disponíveis</h2>
    <div id="cards" class="mt-3 mb-3" onclick="">
      <div class="card">
        <img src="./assets/img/dog.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title cinza-primario">Joca</h5>
          <div class="d-flex justify-content-around mt-3">
            <div class="d-flex flex-column align-items-center">
              <p class="cinza-secundario mb-0">Sexo</p>
              <p>Macho</p>
            </div>
            <div class="d-flex flex-column align-items-center">
              <p class="cinza-secundario mb-0">Idade</p>
              <p>2 Anos</p>
            </div>
            <div class="d-flex flex-column align-items-center">
              <p class="cinza-secundario mb-0">Porte</p>
              <p>Médio</p>
            </div>
          </div>
          <div class="d-flex flex-column mt-3">
            <button type="button" class="btn btn-secundario rounded-5" data-bs-toggle="modal"
              data-bs-target="#staticBackdrop">Detalhes</button>
            <button type="button" class="btn btn-primario mt-2 rounded-5">Quero Adotar!</button>
          </div>
        </div>
      </div>

      <div class="card">
        <img src="./assets/img/dog.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title cinza-primario">Joca</h5>
          <div class="d-flex justify-content-around mt-3">
            <div class="d-flex flex-column align-items-center">
              <p class="cinza-secundario mb-0">Sexo</p>
              <p>Macho</p>
            </div>
            <div class="d-flex flex-column align-items-center">
              <p class="cinza-secundario mb-0">Idade</p>
              <p>2 Anos</p>
            </div>
            <div class="d-flex flex-column align-items-center">
              <p class="cinza-secundario mb-0">Porte</p>
              <p>Médio</p>
            </div>
          </div>
          <div class="d-flex flex-column mt-3">
            <button type="button" class="btn btn-secundario rounded-5" data-bs-toggle="modal"
              data-bs-target="#staticBackdrop">Detalhes</button>
            <button type="button" class="btn btn-primario mt-2 rounded-5">Quero Adotar!</button>
          </div>
        </div>
      </div>

      <div class="card">
        <img src="./assets/img/dog.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title cinza-primario">Joca</h5>
          <div class="d-flex justify-content-around mt-3">
            <div class="d-flex flex-column align-items-center">
              <p class="cinza-secundario mb-0">Sexo</p>
              <p>Macho</p>
            </div>
            <div class="d-flex flex-column align-items-center">
              <p class="cinza-secundario mb-0">Idade</p>
              <p>2 Anos</p>
            </div>
            <div class="d-flex flex-column align-items-center">
              <p class="cinza-secundario mb-0">Porte</p>
              <p>Médio</p>
            </div>
          </div>
          <div class="d-flex flex-column mt-3">
            <button type="button" class="btn btn-secundario rounded-5" data-bs-toggle="modal"
              data-bs-target="#staticBackdrop">Detalhes</button>
            <button type="button" class="btn btn-primario mt-2 rounded-5">Quero Adotar!</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content d-flex flex-row">

        <div class="rounded-5">
          <img src="./assets/img/dog.png" class="rounded-2" alt=""
            style="max-width: 210px; height: 100%; object-fit: cover;">
        </div>

        <div class="px-4 py-4" style="width: 100%;">
          <h2 class="card-title cinza-primario">Joca</h5>
          <div class="d-flex justify-content-between mt-3">
            <div class="d-flex flex-column align-items-center">
              <p class="cinza-secundario mb-0">Sexo</p>
              <p>Macho</p>
            </div>
            <div class="d-flex flex-column align-items-center">
              <p class="cinza-secundario mb-0">Idade</p>
              <p>2 Anos</p>
            </div>
            <div class="d-flex flex-column align-items-center">
              <p class="cinza-secundario mb-0">Porte</p>
              <p>Médio</p>
            </div>
          </div>
          <div>
            <div class="d-flex flex-column align-items-star">
              <p class="cinza-secundario mb-0">Espécie</p>
              <p>Cachorro</p>
            </div>
            <div class="d-flex flex-column align-items-star">
              <p class="cinza-secundario mb-0">Raça</p>
              <p>Vira-lata</p>
            </div>
            <div class="d-flex flex-column align-items-star">
              <p class="cinza-secundario mb-0">Sobre</p>
              <p>Meu olhar falar!</p>
            </div>

          </div>
          <div class="mt-3 d-flex justify-content-between">
            <button type="button" class="btn btn-primario rounded-5 ">Quero Adotar!</button>
            <button type="button" class="btn btn-outline-secondary rounded-5  " data-bs-dismiss="modal"
              aria-label="Close">Voltar</button>
          </div>

        </div>
      </div>
    </div>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"></script>

</body>

</html>