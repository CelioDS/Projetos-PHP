<script src="../js/swet.js"></script>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/gh/brunoalbim/devtools-detect/index.js"></script>
    <script src="../js/bloquear.js"></script>
    <title>Document</title>
</head>

<body>


    <?php
    function alerta2($type, $title, $mensagem, $time)
    {
        echo "<script type='text/javascript'>
    
    Swal.fire({
    icon: '$type',
    title: '$title',
    text:  '$mensagem',
    timer: $time,
    showConfirmButton: false
  
    });
    
    </script>";
    }


    ?>

    <script type='text/javascript'>
        setTimeout(function() {
            //   window.location.href='../index.html';
        }, 1500);
    </script>


</body>

</html>