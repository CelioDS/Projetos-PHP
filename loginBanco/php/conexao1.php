<?php


$dbHost1 = 'Localhost';
$dbUsername1 = 'root';
$dbPassword1 = '';
$dbName1 = 'loginphp';



//outro jeito
//$conexao1 =  new mysqli('Localhost', 'root','', 'loginphp');
$conexao1 =  new mysqli($dbHost1, $dbUsername1, $dbPassword1, $dbName1);
if ($conexao1->connect_errno) {
  echo "erro: (" . $conexao1->connect_errno . ")" . $conexao1->connect_errno;
}
//else{
// echo "conectado1";
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
