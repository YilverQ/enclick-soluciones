//Script para eliminar contenido en pantalla pequeña.

//Seleccionamos todos los 'UL' de servicios
const listaServicios = document.querySelectorAll(".listaServicios");

//Funcion principal.
function createLista(){
	anchoVentana = window.innerWidth; //obtiene el tamaño de la ventana.
	if (anchoVentana < 601) { //Mide el tamaño de la pantalla.
		//Eliminamos (ocultamos) todos los 'UL' de servicios.
		listaServicios.forEach( (cadaH4, i) => {
			listaServicios[i].classList.add("activo");
		})
	}else{
		//Mostramos todos los 'UL' de servicios.
		listaServicios.forEach( (cadaH4, i) => {
			listaServicios[i].classList.remove("activo");
		})
	}
}

//llama a la función principal
createLista();