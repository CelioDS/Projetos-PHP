<?php
session_start();

if (empty($_SESSION['usuarioL']) && empty($_SESSION['senhaL'])) {
    header('location: ../index.html');
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
        <button class="cadastro">
            <a href="../php/sair.php">
                < Sair </a>
        </button>

        <button class="cadastro">
            <a href="bancoUsuario.php">BANCO DE DADOS ></a>
        </button>

    </div>

    <aside class="perfil">
        <p><?php echo $_SESSION['usuario']  ?></p>
        <p><?php echo $_SESSION['nivel']  ?> </p>
        <p><?php $hoje = date('d/m/Y'); echo $hoje; ?> </p>
    </aside>



    <div class="box">
        <form method="POST" action="../php/cadastroCliente.php" id="form">
            <fieldset>
                <legend><b>Fórmulario de Clientes</b></legend>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="nome" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="nome" class="labelInput">Telefone</label>
                </div>
                <br>
                <p><strong>Sexo:</strong></p>
                <input type="radio" class="checkbox" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" class="checkbox" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input checked type="radio" class="checkbox" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br> <br>

                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>

                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="cep" id="cep" class="inputUser" onchange="verificarCep()" required>
                    <label for="cep" id='labelcep' class="labelInput">Cep</label>
                </div>

                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label id="labelcidade" for="cidade" class="labelInput ">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label id="labelestado" for="estado" class="labelInput">Estado</label>
                </div>


                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>

    </div>



</body>
<script src="../js/script.js"></script>
<script src="../js/apiCep.js"></script>
<script src="../js/bloquear.js"></script>

</html>