<?php
include("config.php");
include("verifica2.php");

$codigo = $_SESSION['codigo'];
if (isset($_POST['enviar'])) {
    extract($_POST);
    if($_REQUEST['doar'] == "Mantimentos"){
        ($consulta = $conexao->query("INSERT INTO tb_doacoes (doa_qtd, doa_tipo, doa_usu_codigo) VALUES ('$qtd', '$doar', $codigo);"));
            header("Location: agradecimento.php");
    }elseif($_REQUEST['doar'] == "Dinheiro"){
        ($consulta = $conexao->query("INSERT INTO tb_doacoes (doa_valor, doa_tipo, doa_usu_codigo) VALUES ('$valor', '$doar', $codigo);"));
            header("Location: agradecimento.php");
    }else{
        echo "Não foi possivel registrar";
    }
} 
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

    <title>Doação</title>
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
            <a class="nav-link" aria-current="page" href="./dashboard.php">Inicio</a>
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
    <form action="doacao.php" method="POST" class="card px-4 py-4">
        <h3 class="text-center mb-5 cinza-primario">Faça uma Doação</h3>
        <select class="form-select rounded-5 mb-3" id="inputDoacao" name = "doar">
            <option selected value="none">Tipo de Doação</option>
            <option value="Mantimentos">Mantimentos(Remédios ou Ração)</option>
            <option value="Dinheiro">Dinheiro</option>
        </select>
        <div class="mb-3 d-flex gap-3">
            <div>
                <input placeholder="Quantidade" type="number" min="1" class="form-control rounded-5"
                    id="inputQuantidade" name="qtd" disabled>
            </div>
            <div>
                <input placeholder="Valor" type="text" class="form-control rounded-5" id="inputValor"  name="valor" disabled>
            </div>
        </div>
        <button type="submit" name = "enviar" class="btn btn-lg btn-primario rounded-5 mt-3">Doar</button>

    </form>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>

    <script src="./assets/scripts/doacao.js"></script>
</body>
</html>