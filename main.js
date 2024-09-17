function abrirMenu(){

    setTimeout(abrir, 700);
}

function abrir(){

    let menu = document.querySelector("#menu_empreendimentos");

    menu.click();
}

function mudarIcon(){

    let aberto = document.querySelector("#aberto");
    let fechado = document.querySelector("#fechado");

    aberto.classList.toggle("d-none");
    fechado.classList.toggle("d-none");
}