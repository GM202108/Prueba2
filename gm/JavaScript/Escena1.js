/* Escena - 1 */
var PuertaL = document.querySelector(".Puertaizquierda");
PuertaL.addEventListener("click", mov_Puertaizquierda);
function mov_Puertaizquierda(){
    PuertaL.classList.add("mov_Puertaizquierda");
}

var PuertaR = document.querySelector(".Puertaderecha");
PuertaR.addEventListener("click", mov_Puertaderecha);
function mov_Puertaderecha(){
    PuertaR.classList.add("mov_Puertaderecha");
}
