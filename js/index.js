'use strict'

window.addEventListener("load", ()=>{
    const hamburger = document.querySelector(".nav-movil i");
    const listaNav = document.querySelector(".nav-list");
    hamburger.addEventListener("click",()=>{
        listaNav.classList.toggle("abrir");
    })
});