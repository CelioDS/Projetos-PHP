let form = document.getElementById("form");

const estado = document.getElementById("estado");
const cidade = document.getElementById("cidade");
const cep = document.getElementById("cep");

const labelcep = document.getElementById("labelcep");
const labelcidade = document.getElementById("labelcidade");
const labelestado = document.getElementById("labelestado");




function verificarCep() {

  form.addEventListener("change", async (evento) => {
    evento.preventDefault();

    const form_data = new FormData(form);

    //consulta a api e traz os valores
    const responseHTTP = await fetch("viacep.php", {
      method: "POST",
      body: form_data
    }).then(response => response.json())
      .then(data => data)

    //print o objeto com os valores
    //  console.log(responseHTTP)

    // colocar os valores no input
    estado.value = responseHTTP.uf
    cidade.value = responseHTTP.localidade

    cepInvalido();

  })


  addUplabel();
  removerUplabel();

}




function cepInvalido() {
  if (estado.value === '') {
    if (cep.value != '') {
      labelcep.innerHTML = 'Cep nao cadastrado';

    }
  }
  else {
    labelcep.innerHTML = 'Cep';
  }

}

function addUplabel() {
  if (cep.value != '') {
    labelcidade.classList.add("uplabel");
    labelestado.classList.add("uplabel");
  }
}


function removerUplabel() {
  if (cep.value === '') {
    labelcidade.classList.remove("uplabel");
    labelestado.classList.remove("uplabel");
    labelcep.innerHTML = 'Cep';
  }
}





