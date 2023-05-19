<?php
$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'bancoCadastro';

$conexao =  new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
if ($conexao->connect_errno) {
  echo "erro: (" . $conexao->connect_errno . ")" . $conexao->connect_errno;
}
 //$dados['id'] = 2;
//else{
//  echo "conectado";
//}


/*



// verifica a conexão
if ($conexao->connect_errno) {
  echo "erro";
} else {
  echo "PORRAA conectado com sucesso ";
}
print_r("<br>");


// verifica se esta enviando
if (isset($_POST['submit'])) {
  print_r('Nome: ' . $_POST['nome']);
  print_r("<br>");
  print_r('email: ' . $_POST['email']);
  print_r("<br>");
  print_r('telefone: ' . $_POST['telefone']);
  print_r("<br>");
  print_r('sexo: ' . $_POST['genero']);
  print_r("<br>");
  print_r('data_nascimento: ' . $_POST['data_nascimento']);
  print_r("<br>");
  print_r('cidade: ' . $_POST['cidade']);
  print_r("<br>");
  print_r('estado: ' . $_POST['estado']);
  print_r("<br>");
  print_r('esdereco: ' . $_POST['endereco']);
  print_r("<br>");

*/
