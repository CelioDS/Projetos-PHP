<?php
include('conexao.php');
$rank = 0
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/banco.css">
    <title>sistema de busca</title>
</head>

<body>

  

    <h1>RANKING</h1>
    <table width="500px">
        <tr>
            <th>Posição</th>
            <th>Nome</th>
            <th>pontos</th>
        </tr>
        <?php
        if ((!$conexao)) {
        ?>
            <tr>
                <td colspan="9">Aguardando pesquisa...</td>
            </tr>
            <?php
        } else {
            $consulta = 'SELECT * FROM ranking  ORDER BY  pontos DESC limit 5 ';
            $sql_consulta = $conexao->query($consulta) or die("ERRO ao consultar" . $mysqli->error);

            if ($sql_consulta->num_rows == 0) {
            ?>
                <tr>
                    <td colspan="9">nenhum encontrado</td>
                </tr>
                <?php
            } else {
                while ($dados = $sql_consulta->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $rank+=1; ?></td>
                        <td><?php echo $dados['nome']; ?></td>
                        <td><?php echo $dados['pontos']; ?></td>
                    </tr>
            <?php
                }
            }
            ?>
        <?php
        }
        ?>
    </table>

</body>

</html>
