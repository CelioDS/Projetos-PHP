

document.onkeypress = bloquear;
document.onkeydown = bloquear;
document.oncontextmenu = mensagem;


function mensagem() {
    return false;
}



function bloquear(Event) {
    var Event = Event ? Event : window.event;
    var tecla = (Event.keyCode) ? Event.keyCode : Event.which;

    if (tecla == 17) {
        mensagem();
        return false
    }
    if (tecla == 123) {
        mensagem();
        return false
    }
    if (sessionStorage.getItem("ultimaTecla") === "17" && tecla === 85) {
        mensagem();
        return false
    }

    sessionStorage.setItem("ultimaTecla", tecla);
}

celular = false;
if (screen.width < 640 || screen.height < 480) {
    celular = true;
}
if (!celular) {
    if (window.devtools.isOpen === true) {
        window.location = "http://jogotrol.space/conteudo-protegido.html";
    }

}



window.addEventListener('devtoolschange', event => {
    if (event.detail.isOpen === true) {
        window.location = "http://jogotrol.space/conteudo-protegido.html";
    }
});

