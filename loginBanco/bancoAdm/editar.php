<?php
session_start();

if (empty($_SESSION['usuarioL']) && empty($_SESSION['senhaL'])) {
    header('location: ../index.html');
    die;
}

// se nao estiver vazio trazer os dados
if (!empty($_GET['id'])) {
    include_once('../php/conexao.php');

    $id = $_GET['id'];

    $sql = "SELECT * FROM usuarios WHERE id = $id";

    $resultado = $conexao->query($sql);

    // objeto
    // print_r($resultado);

    if ($resultado->num_rows > 0) {
        while ($user_data = mysqli_fetch_assoc($resultado)) {

            $nome = strip_tags($user_data['nome']);
            $email = strip_tags($user_data['email']);
            $telefone = strip_tags($user_data['telefone']);
            $sexo = strip_tags($user_data['sexo']);
            $data_nasc = strip_tags(($user_data['data_nasc']));
            $cep = strip_tags($user_data['cep']);
            $cidade = strip_tags($user_data['cidade']);
            $estado = strip_tags($user_data['estado']);
        }
    } else {
        header('location: bancoadm.php');
        die;
    }
} else {
    header('location: bancoadm.php');
    die;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/formulario.css">

    <link rel="stylesheet" type="text/css" href="formulario.css?v=<?= filemtime($file); ?>">
    <link rel="shortcut icon" href="../imagem/as.ico" type="img/x-icon">
    <script src="https://cdn.jsdelivr.net/gh/brunoalbim/devtools-detect/index.js"></script>

    <title>Login</title>
</head>

<body>
    <div class="areabtn">
        <button class="cadastro"><a href="bancoadm.php"> Voltar </Voltar></a></button>
        <button class="cadastro"><a href="bancoadm.php">BANCO DE DADOS ADM ></a></button>
    </div>


    <aside class="perfil">
        <p><?php echo $_SESSION['usuario']  ?></p>
        <p><?php echo $_SESSION['nivel']  ?> </p>
        <p><?php $hoje = date('d/m/Y');
            echo $hoje; ?> </p>
    </aside>



    <div class="box">
        <form method="POST" action="saveEditar.php" id="form">
            <fieldset>
                <legend><b>Fórmulario de Clientes ADM</b></legend>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo  htmlentities($nome) ?>" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" value="<?php echo  htmlentities($email) ?>" required>
                    <label for="nome" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" value="<?php echo  htmlentities($telefone) ?>" required>
                    <label for="nome" class="labelInput">Telefone</label>
                </div>
                <br>
                <p><strong>Sexo:</strong></p>

                <input type="radio" class="checkbox" id="feminino" name="genero" value="feminino" <?php echo  htmlentities($sexo == 'feminino') ? 'checked' : '' ?> required>
                <label for="feminino">Feminino</label>
                <br>

                <input type="radio" class="checkbox" id="masculino" name="genero" value="masculino" <?php echo  htmlentities($sexo == 'masculino') ? 'checked' : '' ?> required>
                <label for="masculino">Masculino</label>
                <br>

                <input type="radio" class="checkbox" id="outro" name="genero" value="outro" <?php echo  htmlentities($sexo == 'outro') ? 'checked' : '' ?> required>
                <label for="outro">Outros</label>
                <br> <br>

                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" value="<?php echo  htmlentities($data_nasc) ?>" required>

                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="cep" id="cep" class="inputUser" onchange="verificarCep()" value="<?php echo  htmlentities($cep) ?>" required>
                    <label for="cep" id='labelcep' class="labelInput">Cep</label>
                </div>

                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" value="<?php echo  htmlentities($cidade) ?>" required>
                    <label id="labelcidade" for="cidade" class="labelInput ">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" value="<?php echo  htmlentities($estado) ?>" required>
                    <label id="labelestado" for="estado" class="labelInput">Estado</label>
                </div>


                <br><br>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" name="update" id="update">
            </fieldset>
        </form>

    </div>



</body>
<script src="../js/script.js"></script>
<script src="apiCep.js"></script>
<script src="../js/bloquear.js"></script>

</html>