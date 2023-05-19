
const mario = document.querySelector(".mario"); /*seletor de class do css*/
const pipe = document.querySelector(".pipe");
const clounds = document.querySelector(".clounds");/* seletor css*/
const texto = document.querySelector(".texto");
const player = document.querySelector(".player");
const player1 = document.querySelector(".player1");
const number1 = document.querySelector(".number1");
const play = document.querySelector(".reiniciar");
const backgorund = document.querySelector(".game");
const painel = document.querySelector(".painel");



var contador = 0;

const jump = () => {
    mario.src = '../img/mariojump.png';
    mario.classList.add("jump"); /*adiciona a class */


    setTimeout(() => {
        mario.classList.remove("jump"); /**remover a class depois de 500ms*/
    }, 500);
}



const loop = setInterval(() => { /*intervalo de tempo para executar*/
    const pipe_position = pipe.offsetLeft; /*pegando a posição a esquerda*/
    const mario_position = +window.getComputedStyle(mario).bottom.replace('px', ''); /*consegue pegar qualquer CSS* + = number*/
    const clounds_position = +window.getComputedStyle(clounds).left.replace('px', '');


    verificarScore(contador);
    andando(mario_position, contador);


    if (pipe_position <= 90 && mario_position < 85 && pipe_position > 0) {
        pipe.style.animation = 'none'; /* remover a animation*/
        pipe.style.left = pipe_position + 'px'; /*parando na posicao que bateu */
        play.style.color = 'white';
        play.style.left = 0;
        play.style.opacity = '1';
        painel.style.opacity = '0';
        texto.style.bottom = '100px';

        mario.style.animation = 'none' /* remover a animation*/
        mario.style.bottom = mario_position + 2 + 'px'; /*parando na posicao que bateu */
        mario.style.left = -20 + 'px'; /*parando na posicao que bateu */
        mario.src = '../img/game.png';
        mario.style.marginLeft = '20px'


        clounds.style.animation = 'none';
        clounds.style.left = clounds_position + 'px';


        document.getElementById('gamerover').innerHTML = 'GAMER OVER';

        if (contador < +localStorage.getItem('Score2')) {
            document.getElementById('texto').innerHTML = 'Só isso ' + (contador) + '???';
        } else {
            document.getElementById('texto').innerHTML = 'Novo recorde';
        }

        setTimeout(() => {
            mario.src = '../img/mario.png';
            mario.classList.remove("jump"); /**remover a class depois de 500ms*/
        }, 500);

        setTimeout(() => {
            mario.src = '../img/mariojump.png';

        }, 1000);

        document.getElementById('etapa').innerHTML = '';


        clearInterval(loop);
    }


    setTimeout(() => { /*contador score*/
        contador += 1;

        document.getElementById('contador').innerHTML = 'Score: ' + contador;

    }, 1);




    /*adiciona so se for maior*/ /** adicionar nome do maximo */
    if (contador > +localStorage.getItem('Score2')) {

        localStorage.setItem('Score2', contador);/*armazena contador*/
        localStorage.setItem('Name2', localStorage.getItem("Name"));/*armazena contador*/

        number1.innerHTML = 'Score: ' + localStorage.getItem("Score2");/*puxa o score*/
        player1.innerHTML = 'Players: ' + localStorage.getItem("Name2"); /*puxa o nome*/
        player.innerHTML = 'Player: ' + localStorage.getItem("Name2"); /*puxa o nome*/
    }


    localStorage.setItem('Score', contador);/*armazena 
    number1.innerHTML = 'Score: ' + contador;/*puxa o score*/
    player1.innerHTML = 'Player: ' + localStorage.getItem("Name"); /*puxa o nome*/
    number1.innerHTML = 'Score: ' + localStorage.getItem("Score");/*puxa o score*/


}, 1)

window.onload = () => {/* executa algo dps que carrrega todos elementos*/
    player.innerHTML = 'Player: ' + localStorage.getItem("Name"); /*puxa o nome*/
    number1.innerHTML = 'Score: ' + localStorage.getItem("Score2");/*puxa o score*/
    document.getElementById('bdscore').value = localStorage.getItem("Score2");
    document.getElementById('bdnome').value = localStorage.getItem("Name2");

}

document.addEventListener('keydown', jump); /*tecla executa função*/
document.addEventListener('touchstart', jump);/*toque executa função*/
document.addEventListener('click', jump); /*tecla executa função*/



function andando(mario_position, contador) {

    if (mario_position == 0 && contador % 1 == 0) {
        if (contador % 2 == 0) {
            mario.src = '../img/mario2.png';
        } else {
            mario.src = '../img/mario1.png';
        }
    }

}



function verificarScore(contador) {

    if (contador === 1000) {
        document.getElementById('etapa').innerHTML = 'Muito facil';
    }

    if (contador === 2000) {
        document.getElementById('etapa').innerHTML = 'Easy';
        document.getElementById('texto').innerHTML = 'Quem viu mentiu';
    }

    if (contador === 2780) { /* Zera modificação*/
        document.getElementById('etapa').innerHTML = 'esta cansando a mao ne';
        mario.style.bottom = '0px';

        document.getElementById('texto').innerHTML = '';
    }


    if (contador === 6000) {
        document.getElementById('etapa').innerHTML = 'Very easy';

    }

    if (contador === 7000) {
        document.getElementById('etapa').innerHTML = 'Entao voce e o o bichao ';
    }

    if (contador === 8000) {
        document.getElementById('etapa').innerHTML = 'Nao tem coisa melhor pára fazer? ';
    }
    if (contador === 9000) {
        document.getElementById('etapa').innerHTML = 'Voce tem que estuda meu caro';

    }

    if (contador === 10000) {
        document.getElementById('etapa').innerHTML = 'Cade a mae dessa criança?';
        var url = 'https://thumbs.dreamstime.com/b/aplica%C3%A7%C3%A3o-do-fundo-do-jogo-da-floresta-d-73706218.jpg'
        backgorund.style.backgroundImage = `url(${url})`;

    }
    if (contador === 20000) {
        mario.style.bottom = '150px';

        texto.style.bottom = '300px';

        document.getElementById('texto').innerHTML = 'Joy soy uno aviao';
    }
    if (contador === 22222) { /* Zera modificação*/
        document.getElementById('etapa').innerHTML = 'esta cansando a mao ne';
        mario.style.bottom = '0px';
        texto.style.bottom = '200px';

        document.getElementById('texto').innerHTML = '';
    }

    if (contador === 40000) {
        document.getElementById('etapa').innerHTML = 'esta cansando a mao ne';
        var url = 'https://thumbs.dreamstime.com/b/fundo-do-jogo-do-p%C3%A2ntano-49998146.jpg'
        backgorund.style.backgroundImage = `url(${url})`;


    }
    if (contador === 50000) {
        document.getElementById('etapa').innerHTML = 'olha a caimbra ';
    }
    if (contador === 60000) {
        document.getElementById('etapa').innerHTML = 'Easy';
        mario.style.bottom = '100px';
        texto.style.bottom = '200px';
        document.getElementById('texto').innerHTML = 'Quem viu mentiu';
    }
    if (contador === 61100) {
        mario.style.bottom = '0px';
        document.getElementById('texto').innerHTML = '';

    }
    if (contador === 80000) {
        mario.style.bottom = '100px';
        texto.style.bottom = '200px';
        balao.src = '/img/balao.png';
        document.getElementById('texto').innerHTML = 'Quem viu mentiu';
    }
    if (contador === 81200) {
        mario.style.bottom = '0px';

        document.getElementById('texto').innerHTML = 'esta de hack meu jovem??';
        var url = 'https://thumbs.dreamstime.com/b/paisagem-do-fundo-do-jogo-da-natureza-49998152.jpg'
        backgorund.style.backgroundImage = `url(${url})`;
    }
    if (contador === 100000) {
        document.getElementById('etapa').innerHTML = 'Como vai a vida? tem muito tempo livre?';
        document.getElementById('texto').innerHTML = '';
    }
    if (contador === 110000) {
        document.getElementById('texto').innerHTML = 'quer o jogo para voce?';
        var url = 'https://thumbs.dreamstime.com/b/paisagem-preto-e-branco-do-fundo-do-jogo-da-floresta-dos-desenhos-animados-ilustra%C3%A7%C3%A3o-do-vetor-90210494.jpg'

        backgorund.style.backgroundImage = `url(${url})`;
    }
    if (contador === 210000) {
        document.getElementById('texto').innerHTML = 'quer o jogo para voce?';
        var url = 'https://thumbs.dreamstime.com/b/paisagem-do-fundo-do-jogo-da-natureza-49998152.jpg'

        backgorund.style.backgroundImage = `url(${url})`;
    }
    if (contador === 220100) {
        document.getElementById('texto').innerHTML = '';
        var url = 'https://thumbs.dreamstime.com/b/paisagem-do-fundo-do-jogo-da-natureza-49998152.jpg'

        backgorund.style.backgroundImage = `url(${url})`;
    }
}

