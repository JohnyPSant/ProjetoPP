<?php
include("config.php");
include("verifica.php");
$erro = 0;
if (isset($_POST['mail'])) {
    extract($_POST);
    $consulta = $conexao->query("select * from tb_usuarios where usu_email = '$mail' and usu_senha = '$senha'");
    $login_admin = $conexao->query("select * from tb_usuarios where usu_email = '$mail' and usu_senha = '$senha' and usu_codigo = 1");
    if ($resultado = $login_admin->fetch_assoc()) {
        $_SESSION['mail'] = $resultado['usu_email'];
        $_SESSION['nome'] = $resultado['usu_nome'];
        $_SESSION['codigo'] = $resultado['usu_codigo'];
        $codigo = $resultado['usu_codigo'];
        header("Location: admin.php");
    } elseif($resultado = $consulta->fetch_assoc()){
        $_SESSION['mail'] = $resultado['usu_email'];
        $_SESSION['nome'] = $resultado['usu_nome'];
        $_SESSION['codigo'] = $resultado['usu_codigo'];
        $codigo = $resultado['usu_codigo'];
        header("Location: inicial.php");
    }else{
        $erro = 1;
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

    <title>Login</title>
</head>

<body>

    <form action="?" method="POST" class="card px-4 py-4">
        <div class="align-middle">
            <img src="./assets/img/Logo_2.png" alt="">
        </div>
        <h5 class="card-title align-center mb-5 ">Acesse sua conta</h5>
        <div class="mb-3 d-flex gap-3">

            <input placeholder="Email" type="email" class="form-control rounded-5" id="inputEmail" name="mail">
        </div>
        <div class="mb-3 d-flex gap-3">
            <input placeholder="Senha" type="password" class="form-control rounded-5" id="inputSenha" name="senha">


        </div>
        <button type="submit" class="btn btn-primary mt-5">Acessar</button>
        <?php if ($erro == 1) echo "<br><span align=center style='color:red'>Usuario ou senha inválida, tente novamente.</span><br>"; ?>
        <form>
            <!-- JavaScript Bundle with Popper -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>