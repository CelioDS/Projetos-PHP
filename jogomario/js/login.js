const entrada = document.querySelector(".login_input");
const buttonvalida = document.querySelector(".login_button");
const form = document.querySelector(".login_form");
const nomeSalvo = document.querySelector(".historico-nome");
const scoreSalvo = document.querySelector(".historico-score");
const personagem = document.querySelector(".personagem");
var pontos = document.getElementById('historico-score').value

/* verificar localstorage e coloca valor */
if (localStorage.getItem("Name2") === null || localStorage.getItem("Score2") === null) {


  localStorage.setItem("Name2", 'nome');
  localStorage.setItem("Score2", 0);

}

const validar_input = ({ target }) => { /*habilita o botao*/
  if (target.value.length > 0) {
    buttonvalida.removeAttribute("disabled");
    personagem.src = '../img/mariojump.png';
    personagem.classList.add("jump"); /*adiciona a class */

    return;
  }
  buttonvalida.setAttribute("disabled", " ");
  personagem.src = '../img/mario.png';



}

entrada.addEventListener('input', validar_input); /* verfica o evento*/

const handleSubmit = (event) => { /*habilita o botao*/
  event.preventDefault(); /* nao deixa recarregar*/


  localStorage.setItem('Name', entrada.value);


  window.location = 'PAGE/game.html';


}

form.addEventListener('submit', handleSubmit);




/* jogador que chegou mais longe */
nomeSalvo.innerHTML = 'Player: ' + localStorage.getItem("Name2"); /*puxa o nome*/
scoreSalvo.innerHTML = 'Score: ' + localStorage.getItem("Score2"); /*puxa o score*/

