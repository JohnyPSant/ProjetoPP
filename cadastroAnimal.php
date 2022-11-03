<?php
include("config.php");
include("verifica2.php");
if(isset($_POST['nome'])){
 extract($_POST);
 if($consulta = $conexao -> query("INSERT INTO tb_animais (ani_nome, ani_idade, ani_raça, ani_porte, ani_especie, ani_sobre, ani_sexo) VALUES ('$nome', '$idade', '$raça', '$porte', '$especie', '$sobre', '$sexo');")){
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Formulário</title>
</head>

<body>

    <form action="?" method="POST" class="card px-4 py-4">
        <h3 class="text-center mb-5">Cadastrar Animal</h3>
        <div class="mb-3 d-flex gap-3">
            <div>
                <input placeholder="Nome" type="text" class="form-control rounded-5" id="inputNome" name = "nome">
            </div>
            <div>
                <input placeholder="Idade" type="text" class="form-control rounded-5" id="inputIdade" name = "idade">
            </div>
        </div>
        <div class="mb-3 d-flex gap-3">
            <div>
                <input placeholder="Espécie" type="text" class="form-control rounded-5" id="inputEspecie" name = "especie">
            </div>
            <div>
                <input placeholder="Raça" type="text" class="form-control rounded-5" id="inputRaca" name = "raça">
            </div>
        </div>
        <div class="mb-3 d-flex gap-3">
            <div>
                <input placeholder="Sexo" type="text" class="form-control rounded-5" id="inputSexo" name = "sexo">
            </div>
            <div>
                <input placeholder="Porte" class="form-control rounded-5" id="inputPorte" name = "porte">
            </div>
        </div>
        <div class="mb-3">
            <label for="inputSexo" class="form-label">Adicione uma foto</label>
            <input type="file" accept="image/png,image/jpeg" class="form-control rounded-5" id="inputFile">
              
        </div>
        <div  class="mb-3">
            <textarea class="form-control" placeholder="Sobre" id="floatingTextarea2" style="height: 100px" name = "sobre"></textarea>
          </div>

        <button type="submit" class="btn btn-lg btn-warning rounded-5 mt-3">Cadastrar</button>
        </form>

            <!-- JavaScript Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
                crossorigin="anonymous"></script>

</body>

</html>