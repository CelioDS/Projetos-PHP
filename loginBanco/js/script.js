function aviso_cadastro() {
    var nome = document.getElementById("txtnome").value;
    var senha = document.getElementById("txtsenha").value;
    var nivel = document.getElementById("txtnivel").value;



    if (nome && senha && nivel !== '') {
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Usuario cadastrado com sucesso',
            showConfirmButton: false,
            timer: 1500
        })


    }

}

function cadastroclientes() {
    var txtnome = document.getElementById("txtnome").value;
    var txtsenha = document.getElementById("txtsenha").value;
    console.log('nome', txtnome, 'se', txtsenha)

    if (txtnome && txtsenha === '') {

        if (($_POST)) {

            console.log('nome', txtnome, 'se', txtsenha)
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: ' sucesso',
                showConfirmButton: false,
                timer: 10500
            })

        }




    }

}

function cadastroclientes1() {
    console.log('nome', txtnome, 'se', txtsenha)
    Swal.fire({
        position: 'center',
        icon: 'error',
        title: ' error',
        showConfirmButton: false,
        timer: 10500
    })

}