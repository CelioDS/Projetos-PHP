<?php

include_once("../php/scripts.php");
session_start();

// se nao estiver vazio trazer os dados
if (!empty($_GET['id'])) {
    include_once('../php/conexao.php');

    $id = $_GET['id'];

    $sql = "SELECT * FROM usuarios WHERE id = $id";

    $resultado = $conexao->query($sql);

    // objeto
    // print_r($resultado);

    if ($resultado->num_rows > 0) {

        $sqlDelete = "DELETE FROM usuarios WHERE id='$id'";
        $Delete = $conexao->query($sqlDelete);


        alerta2("success", "Cadastrado Excluido com sucesso", "", 1900);

        echo  '<script>
                setTimeout(function () {
                    window.location.href="bancoadm.php";
                },1900);
               </script>';
    } else {
        header('location: bancoadm.php');
        die;
    }
} else {
    header('location: bancoadm.php');
    die;
}
