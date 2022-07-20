//Hacer el primer cambio de pantalla.
let anchoVentana = window.innerWidth; //obtiene el tamaño de la ventana.
window.onresize = function(){ //Se ejecuta cuando hay un cambio del tamaño.
    desing();
    createLista();
};