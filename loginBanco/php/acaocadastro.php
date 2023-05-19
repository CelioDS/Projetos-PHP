<?php
include('conexao1.php');
include('scripts.php');

$nome = strip_tags($_POST['txtnome']);
$senha = strip_tags(md5($_POST['txtsenha']));
$nivel = strip_tags($_POST['txtnivel']);

//evitar  login sem acesso
if (empty($nome) && empty(md5($senha))) {
    header('location: ../index.html');
    die;
}

$comandoSQL1 = "INSERT INTO usuarios (usuario, senha, nivel) VALUE ('$nome','$senha', '$nivel')";

// verifica se os dados ja estao inseridos
$consulta = "SELECT usuario FROM usuarios WHERE usuario='$nome'  ";
$sql_consulta = $conexao1->query($consulta) or die("ERRO ao consultar" . $mysqli->error);


//se resultado for igual 1 so recarrega a pagina
if ($sql_consulta->num_rows >= 1) {

    alerta2("error", "Usuario ja cadastrado ", "tente novamente", 1900);
    echo  '<script>
    setTimeout(function () {
        window.location.href="../cadastrarusuario.html";
    },1900);
    </script>';
} else {
    $cadastrar = mysqli_query($conexao1, $comandoSQL1);
    if ($cadastrar == true) {

        alerta2("success", "Usuario  cadastrado com sucesso", "Seja Bem-Vindo", 1900);
        echo  '<script>
        setTimeout(function () {
            window.location.href="../index.html";
        },1900);
        </script>';
    } else {
        alerta2("error", "error", "tente novamente", 1900);
        echo  '<script>
        setTimeout(function () {
            window.location.href="../index.html";
        },1900);
        </script>';
    }
}
