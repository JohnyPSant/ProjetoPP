<?php
include("config.php");

$codigo2 = $_SESSION['nome'];
$consulta = $conexao->query("select * from tb_animais");


?>

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
      <a class="navbar-brand" href="index.php"><img src="./assets/img/Logo_2.png" alt=""></a>
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
  <div class="container">
    <h1 class="cinza-primario text-center">Pets Registrados</h1>
    <div class="container">
    <table class="table shadow-sm rounded-2 mt-5">
      <thead>
        <tr>
          <th scope="col">Nome</th>
          <th scope="col">Idade</th>
          <th scope="col">Espécie</th>
          <th scope="col">Raça</th>
          <th scope="col">Porte</th>
          <th scope="col">Sexo</th>
          <th scope="col">Sobre</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($resultado = $consulta->fetch_assoc()) { ?>
          <tr>
            <td><?php echo ucfirst($resultado['ani_nome']) ?></td>
            <td><?php echo ucfirst($resultado['ani_idade']) ?></td>
            <td><?php echo ucfirst($resultado['ani_especie']) ?></td>
            <td><?php echo ucfirst ($resultado['ani_raça'])?></td>
            <td><?php echo ucfirst ($resultado['ani_porte'])?></td>
            <td><?php echo ucfirst ($resultado['ani_sexo'])?></td>
            <td><?php echo ucfirst ($resultado['ani_sobre'])?></td>
            <td><a href="?">Adotar</a></td>
          </tr>
        <?php } ?>

      </tbody>
    </table>

  </div>
    </div>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"></script>

</body>

</html>