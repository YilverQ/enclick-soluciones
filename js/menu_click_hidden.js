//Ocultar el menú cuando se haga click. 

/*
	Para cuando la pantalla se hace pequeña el menu sale por el lado izquierdo. 
	Cuando un usuario hace click en una de las secciones debe cerrar el menu. 
	Este script es para ocultar el menu luego que el usuario haga click en una
	de las secciones del menu.
*/


/*
	Variables principales.
	menu: son cada uno de los elementos (li) del menu.
	boton: es el boton que muestra y oculta el menu. 
	pantalla_chica: Es un boleano que comprueba si el tamaño de la pantalla es chica o no.
*/
const menu = document.querySelectorAll(".menu-click");
const boton = document.getElementById("res-menu");
let pantalla_chica = null;


/*
	Por cada elemento del menú se comprueba si hay un click.
	En caso correcto se pasa a comprobar la función check_pantalla_menu.
	En caso se hace click al boton para oculta el menu. 
*/
menu.forEach( (element, i) => {
	menu[i].addEventListener("click", ()=>{
		if (check_pantalla_menu()) { //Comprueba si la pantalla es pequeña.
			boton.click(); //Oculta el menu.
		}
	})
})


/*
	Función para comprobar el tamaño de la pantalla. 
	Modifica el valor de "pantalla_chica" dependiendo del tamaño de la pantalla.
*/
function check_pantalla_menu(){
	anchoVentana = window.innerWidth; //obtiene el tamaño de la ventana.
	if (anchoVentana < 949) { //Mide el tamaño de la pantalla.
		pantalla_chica = true;
	}
	else{
		pantalla_chica = false;
	}
	return pantalla_chica;
}