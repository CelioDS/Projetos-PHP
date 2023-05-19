<?php

session_start();

include('conexao1.php');
include('scripts.php');

$usuario = strip_tags($_POST['txtnome']);
$senha =  strip_tags(md5($_POST['txtsenha']));

// passando valores para outras paginas



$comandoSQL = "SELECT * FROM usuarios WHERE usuario='$usuario' AND senha='$senha' AND nivel='Usuario'  ";

$comandoSQLAdm = "SELECT * FROM usuarios WHERE usuario='$usuario' AND senha='$senha' AND nivel='Administrador'  ";


//verifica o nome e a senha
$login = mysqli_query($conexao1, $comandoSQL);
$loginAdm = mysqli_query($conexao1, $comandoSQLAdm);




if ($conexao1->connect_errno) {
  echo "erro: (" . $conexao1->connect_errno . ")" . $conexao1->connect_errno;
}

if (mysqli_num_rows($loginAdm) >= 1) {
  alerta2("success", "Acesso liberado", "Bem vindo Administrador", 1900);

  $_SESSION['nivel'] = 'Administrador';
  $_SESSION['usuario'] = strip_tags($usuario);
  $_SESSION['usuarioL'] =  $usuario;
  $_SESSION['senhaL'] = '123ada4';

  echo  '<script>
  setTimeout(function () {
    window.location.href="../bancoAdm/bancoadm.php";
  },1900);
  </script>';
} else if (mysqli_num_rows($login) >= 1) {

  alerta2("success", "Acesso liberado", "Bem vindo Usuario", 1900);
  $_SESSION['nivel'] = 'Usuario';
  $_SESSION['usuario'] = strip_tags($usuario);
  $_SESSION['usuarioL'] =  $usuario;
  $_SESSION['senhaL'] = '123ada4';

  echo  '<script>
  setTimeout(function () {
    window.location.href="../banco/cadastro.php";
  },1900);
  </script>';
} else if (mysqli_num_rows($login) === 0 && mysqli_num_rows($loginAdm) === 0) {

  alerta2("error", "Usuario nao cadastrado", "tente novamente", 1900);

  echo  '<script>
   setTimeout(function () {
       window.location.href="../index.html";
   },1900);
   </script>';
}

if (empty($_SESSION['usuarioL']) && empty($_SESSION['senhaL'])) {
  header('location: ../index.html');
  die;
}
