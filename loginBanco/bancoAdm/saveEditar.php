<?php
include_once("../php/conexao.php");
include_once("../php/scripts.php");

if (isset($_POST['update'])) {


  $id = $_POST['id'];
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $sexo = $_POST['genero'];
  $data_nasc = $_POST['data_nascimento'];
  $cep = $_POST['cep'];
  $cidade = $_POST['cidade'];
  $estado = $_POST['estado'];


  $sqlUpdate = "UPDATE usuarios SET nome='$nome', email='$email', telefone='$telefone', sexo='$sexo', data_nasc='$data_nasc',cep='$cep', cidade='$cidade', estado='$estado' WHERE id='$id'";

  $resultado = $conexao->query($sqlUpdate);

  alerta2("success", "Cadastrado atualizado com sucesso", "", 1900);

  echo  '<script>
             setTimeout(function () {
              window.location.href="bancoadm.php";
             },1900);
           </script>';
} else {
  header('location: bancoadm.php');
  die;
}
