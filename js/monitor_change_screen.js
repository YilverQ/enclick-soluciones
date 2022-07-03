//Script para vigila cambio de pantalla.


/*
    Cuando el usuario hace un cambio en cuanto al tamaño pantalla 
    se debe hacer algunos cambios en los estilos para convertilos en responsive. 
*/

/*
    funciones: ¿Qué hacen?
    rescribir_menu_short_text: Cambia el texto "Zonas de coberturas" por "Lugares" o viceversa.
*/
let anchoVentana = window.innerWidth; //obtiene el tamaño de la ventana.
window.onresize = function(){ //Se ejecuta cuando hay un cambio del tamaño.
    desing();
    rescribir_menu_short_text();
};