<?php

include('conexao.php');
// trata o erro de select inject

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

    <header>
        <h1>Consulta no Banco de Dados</h1>
        <form action="">
            <input name="busca" type="text" value="<?php if (isset($_GET['busca'])) echo $_GET['busca']; ?>" placeholder="Digite as pesquisa">
            <button class="btn-pesquisa" type="submit">Pesquisa</button>
        </form>
    </header>


    <table width="500px">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>pontos</th>
        </tr>
        <?php
        if (!isset($_GET['busca'])) {
        ?>
            <tr>
                <td colspan="9">Aguardando pesquisa...</td>
            </tr>
            <?php
        } else {
            // trata o erro de select inject
            $pesquisa = $conexao->real_escape_string($_GET['busca']);

            $consulta = "SELECT* FROM ranking WHERE nome LIKE '%$pesquisa%' AND  id    ";
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
                        <td><?php echo htmlentities($dados['id']); ?></td>
                        <td><?php echo htmlentities($dados['nome']); ?></td>
                        <td><?php echo htmlentities($dados['pontos']); ?></td>

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