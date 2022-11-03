<?php
include("config.php");
include("verifica2.php");

if (isset($_POST['enviar'])) {
    extract($_POST);
    if($_REQUEST['doacao'] == "mantimentos"){
        ($consulta = $conexao->query("INSERT INTO tb_doacoes (doa_qtd) VALUES ('$qtd');"));
            header("Location: index.php");
    }elseif($_REQUEST['doacao'] == "dinheiro"){
        ($consulta = $conexao->query("INSERT INTO tb_doacoes (doa_valor) VALUES ('$valor');"));
            header("Location: index.php");
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
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>Formulário</title>
</head>

<body>

    <form action="?" method="POST" class="card px-4 py-4">
        <h3 class="text-center mb-5">Faça uma Doação</h3>
        <select class="form-select rounded-5 mb-3" id="inputDoacao" name = "doacao">
            <option selected value="none">Tipo de Doação</option>
            <option value="mantimentos">Mantimentos(Comida ou Remédios)</option>
            <option value="dinheiro">Dinheiro</option>
        </select>
        <div class="mb-3 d-flex gap-3">
            <div>
                <input placeholder="Quantidade" type="number" min="1" class="form-control rounded-5" id="inputQuantidade" name="qtd" disabled>
            </div>
            <div>
                <input placeholder="Valor" type="text" class="form-control rounded-5" id="inputValor" name="valor" disabled>

            </div>
        </div>
        <button type="submit" name="enviar" class="btn btn-lg btn-warning rounded-5 mt-3">Doar</button>
    </form>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script src="./assets/scripts/doacao.js"></script>
</body>

</html>