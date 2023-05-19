<?php 
session_start();

//destroy as sessões
unset($_SESSION['nivel']);
unset($_SESSION['usuario']);
unset($_SESSION['usuarioL']);
unset($_SESSION['senhaL']);

include('scripts.php');
alerta2("success", "Encerrando sessão", "Volte sempre", 1900);



echo  '<script>
  setTimeout(function () {
    window.location.href="../index.html";
  },1900);
  </script>';
  
?>