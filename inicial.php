<?php 
include("config.php");
$var = 0;
if(isset($_SESSION['nome'])){
    $var = 1;
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/novo.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Início</title>
</head>

<body>
  <div class="position-fixed top-0 d-flex justify-content-between align-items-center" style="width:100%; padding:10px 24px; backgroun-color:red;">
    <img src="/assets/img/logo medio.png" alt="" alt="">
    <div>
        <?php if ($var == 0) {?>
        <a href="login.php"><button type="button" class="btn btn-warning">Entrar</button></a>
        <a href="cadastro.php"><button type="button" class="btn btn-outline-info">Cadastra-se</button></a>
        <?php }elseif ($var == 1) {?>
        <a href="logout.php"><button type="button" class="btn btn-danger">Sair</button></a>
        <a href="doacao.php"><button type="button" class="btn btn-outline-info">Realizar Doação</button></a>
        <a href="cadastroAnimal.php"><button type="button" class="btn btn-outline-success">Cadastrar Animais</button></a>
        <?php } ?>
    </div>
  </div>
  <div class="container">
    <h1>Seja bem vindo!</h1>
    <div class="">
        <h5>Saiba como funciona:</h5>
        <div class="d-flex gap-5 ">
            <div>
                <div class="d-flex flex-column  align-items-center">
                    <img src="./assets/icons/icon.png" alt="">
                    <p class="mt-2">Ache seu pet</p>
                </div>
                <p>Visite nosso site ou Aplicativo com espaço dedicado à adoção. Lá você irá conhecer os 
                    pets  para criar a conexão perfeita com cão e/ou gato que busca um novo lar. </p>
            </div>
            <div>
                <div class="d-flex flex-column  align-items-center">
                    <img src="./assets/icons/icon2.png" alt="">
                    <p class="mt-2">Cadastre-se</p>
                </div>
                <p>Faça seu cadastro em nosso site ou aplicativo.</p>
            </div>
            <div>
                <div class="d-flex flex-column  align-items-center">
                    <img src="./assets/icons/icon3.png" alt="">
                    <p class="mt-2">Avaliação para adoção</p>
                </div>
                <p>Após escolher o seu bichinho entraremos em contato o mais breve possível para marcarmos uma entrevista</p>
            </div>
            <div>
                <div class="d-flex flex-column  align-items-center">
                    <img src="./assets/icons/icon4.png" alt="">
                    <p class="mt-2">Adoção completa</p>
                </div>
                <p>Aprovado a adoção, você já pode levar seu pet para casa! Simples e rápido.</p>
            </div>
            
        </div>
        
    </div>
  </div>
      
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>