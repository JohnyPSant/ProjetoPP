<?php
   include("config.php");
   include("verifica.php");
   if(isset($_POST['nome'])){
    extract($_POST);
    if($consulta = $conexao -> query("INSERT INTO tb_usuarios (usu_cpf, usu_nome, usu_tel, usu_email, usu_senha) VALUES ('$cpf', '$nome', '$tele', '$email', '$senha');")){
        header('Location: index.php');
    }
    else{
        echo "Não foi possivel fazer o registro";
    }
   };
    
   
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Cadastro</title>
</head>

<body>
  
        <form action = "?" method = "POST" class="card position-fixed top-1">
            <div class="card-body">
                <div class="align-middle">
                    <img src="./assets/img/Logo_2.png" alt="">
                </div>
              <h5 class="card-title align-center">Cadastre-se</h5>
              <div class="mb-3 d-flex flex-column">
                    <label for="" >CPF/CNPJ</label>
                    <input type="text" name = "cpf" placeholder="Insira seu CPF" required>
                </div>
                <div class="mb-3 d-flex flex-column">
                    <label for="">Nome/empresa</label>
                    <input type="text" name = "nome" placeholder="Insira o nome" required>
                </div>
                <div class="mb-3 d-flex flex-column">
                    <label for="">Telefone</label>
                    <input type="tel" name = "tele" placeholder="Insira seu telefone">
                </div>
                <div class="mb-3 d-flex flex-column">
                    <label for="">email</label>
                    <input type="email" name = "email" placeholder="Insira seu email" required>
                </div>
                
                <div class="mt-3 d-flex flex-column">
                    <label for="">Senha</label>
                    <input type="password" name = "senha" placeholder="Insira sua senha" required>
                </div>
                <div class="mt-3 d-flex flex-column">
                    <label for="">Confirmar senha</label>
                    <input type="password" name = "conf-senha" placeholder="Confirme sua senha" required>
                </div>
                <button type="sumbit" class="btn btn-primary mt-5">Cadastrar</button>

            </div>
          <form>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>