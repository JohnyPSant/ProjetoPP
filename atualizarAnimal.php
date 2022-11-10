<?php
include("config.php"); 
include("verifica2.php"); 
$codigo = $_GET['codigo'];
if(isset($_POST['nome'])){
	extract($_POST);
	if($edit = $conexao->query("update tb_animais set ani_nome = '$nome', ani_idade = '$idade', ani_raça = '$raça', ani_porte = '$porte', ani_especie = '$especie', ani_sobre = '$sobre', ani_sexo = '$sexo' where ani_codigo = $codigo;")) {
		header("Location: dashboard.php");
	} else {
		echo "Não foi possivel fazer o registro";
	}
}

$consulta = $conexao->query("select * from tb_animais where ani_codigo = $codigo");
$edit_res = $consulta->fetch_assoc();

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

    <title>Cadastro de animais</title>
</head>

<body>

    <form action="?codigo=<?php echo $edit_res['ani_codigo']; ?>" method="POST" class="card px-4 py-4">
        <h3 class="text-center mb-5">Cadastrar Animal</h3>
        <div class="mb-3 d-flex gap-3">
            <div>
                <input placeholder="Nome" type="text" class="form-control rounded-5" id="inputNome" name = "nome" value = "<?php echo $edit_res['ani_nome']; ?>">
            </div>
            <div>
                <input placeholder="Idade" type="text" class="form-control rounded-5" id="inputIdade" name = "idade" value = "<?php echo $edit_res['ani_idade']; ?>">
            </div>
        </div>
        <div class="mb-3 d-flex gap-3">
            <div>
                <input placeholder="Espécie" type="text" class="form-control rounded-5" id="inputEspecie" name = "especie" value = "<?php echo $edit_res['ani_especie']; ?>">
            </div>
            <div>
                <input placeholder="Raça" type="text" class="form-control rounded-5" id="inputRaca" name = "raça" value = "<?php echo $edit_res['ani_raça']; ?>">
            </div>
        </div>
        <div class="mb-3 d-flex gap-3">
            <div>
                <input placeholder="Sexo" type="text" class="form-control rounded-5" id="inputSexo" name = "sexo" value = "<?php echo $edit_res['ani_sexo']; ?>">
            </div>
            <div>
                <input placeholder="Porte" class="form-control rounded-5" id="inputPorte" name = "porte" value = "<?php echo $edit_res['ani_porte']; ?>">
            </div>
        </div>
        <div  class="mb-3">
            <textarea class="form-control" placeholder="Sobre" id="floatingTextarea2" style="height: 100px" name = "sobre" ><?php echo $edit_res['ani_sobre']; ?></textarea>
          </div>

        <button type="submit" class="btn btn-lg btn-warning rounded-5 mt-3">Cadastrar</button>
        </form>

            <!-- JavaScript Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
                crossorigin="anonymous"></script>

</body>

</html>