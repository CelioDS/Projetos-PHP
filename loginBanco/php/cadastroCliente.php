<?php
include('scripts.php');


// se existe o submit informacoes sao enviadas
if (isset($_POST['submit'])) {
    include_once('conexao.php');

    $nome = strip_tags($_POST['nome']);
    $email = strip_tags($_POST['email']);
    $telefone = strip_tags($_POST['telefone']);
    $sexo = strip_tags($_POST['genero']);
    $data_nasc = strip_tags($_POST['data_nascimento']);
    $cep = strip_tags($_POST['cep']);
    $cidade = strip_tags($_POST['cidade']);
    $estado = strip_tags($_POST['estado']);

    $ConsultaEmail = "SELECT * FROM usuarios WHERE email='$email' 
    ";
    $ConsultaDados = mysqli_query($conexao, $ConsultaEmail);

    $ConsultaEmail = "SELECT * FROM usuarios WHERE telefone='$telefone' 
    ";
    $ConsultaDados1 = mysqli_query($conexao, $ConsultaEmail);



    if (mysqli_num_rows($ConsultaDados) >= 1) {
        alerta2("error", "Email ja cadastrado.", "Tente novamente.", 1900);

        if (mysqli_num_rows($ConsultaDados1) >= 1) {
            alerta2("error", "Email e Telefone ja cadastrado.", "Tente novamente.", 1900);
        }
        echo  '<script>
                    setTimeout(function () {
                         window.location.href="../banco/cadastro.php";
                     },1900);
                </script>';
    } else if (mysqli_num_rows($ConsultaDados1) >= 1) {
        alerta2("error", "Telefone ja cadastrado.", "Tente novamente.", 1900);

        echo  '<script>
                setTimeout(function () {
                     window.location.href="../banco/cadastro.php";
                 },1900);
            </script>';
    } else {
        $result =  "INSERT INTO usuarios(nome,email,telefone,sexo,data_nasc,cidade,estado,cep) VALUES('$nome', '$email', '$telefone', '$sexo', '$data_nasc', '$cidade', '$estado', '$cep')";

        // verifica e envia 
        if (mysqli_query($conexao, $result)) {

            alerta2("success", "Cadastrado com sucesso.", "Bem vindo.", 1900);
            echo  '<script>
        setTimeout(function () {
            window.location.href="../banco/cadastro.php";
        },1900);
        </script>';
        } else {
            echo "ERRO no envio" . mysqli_connect_error($conexao);
            alerta2("error", "houve um erro", "tente novamente", 1900);
            echo  '<script>
        setTimeout(function () {
            window.location.href="../banco/cadastro.php";
        },1900);
        </script>';
        }

        //fechar conexao
        mysqli_close($conexao);
    }
} else {

    header('location: ../banco/cadastro.php');
    die;
}
