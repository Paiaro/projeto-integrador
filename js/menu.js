'use strict';

const botaoMenu = document.querySelector("nav h2 a");
const listaDeLinks = document.querySelector(".links-menu");
botaoMenu.addEventListener("click", function (event) {
    event.preventDefault();
    listaDeLinks.classList.toggle("aberto");
    if (listaDeLinks.classList.contains("aberto")) {
        botaoMenu.innerHTML = "Fechar &times;";
    } else {
        botaoMenu.innerHTML = "Menu &equiv;";
    }
});