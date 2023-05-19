<?php

include('conexao.php');

$nome = htmlentities($_POST['bdnome']);
$pontos = htmlentities($_POST['bdscore']);

// ASPAS PARA NUMERO VARCHAR
// 1 modo de enviar dados
// $result = mysqli_query($conexao, "INSERT INTO ranking(nome,pontos) VALUES('$nome','$pontos')");

// 2 modo de enviar dados
$comandosql = "INSERT INTO ranking(nome,pontos) VALUES('$nome','$pontos')";


// verifica se os dados ja estao inseridos
$consulta = "SELECT pontos, nome FROM ranking WHERE  pontos='$pontos' AND nome='$nome'  ";
$sql_consulta = $conexao->query($consulta) or die("ERRO ao consultar" . $mysqli->error);

//se resultado for igual 1 so recarrega a pagina
if ($sql_consulta->num_rows >= 1) {
    echo "<script> 
        window.location.href='../PAGE/game.html';
        </script>";
} else {
    //verifica e envia 
    if (mysqli_query($conexao, $comandosql)) {
        echo  "<script> 
        window.location.href='../PAGE/game.html';
        </script>";
    } else {
        echo "ERRO no envio" . mysqli_connect_error($conexao);
    }
}



//fechar conexao
mysqli_close($conexao);
