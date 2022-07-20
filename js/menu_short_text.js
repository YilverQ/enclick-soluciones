//Acortar el texto cuando la pantalla es muy pequeña.

/*
	Cuando el tamaño de la pantalla es muy pequeña el texto sobre sale.
	Es por eso que opto por cambiar los texto que son muy largos por unos más cortos.
	Dicho de otra forma: Cambiar a un texto grande cuando el tamaño de la pantalla lo permita.
	Sino, cambiar a un texto mas corto.
*/

/*
	Variable:
	zonaCoberturaID: obtenemos el texto largo.
	icono_dentro_zona: Contiene la etiqueta que pone el icono.
*/
const short_text = document.getElementById("short_text");
const icono_dentro_zona = '<i class="fa-solid fa-location-dot menu-icon-hidden"></i>'


function rescribir_menu_short_text(){
	anchoVentana = window.innerWidth; //obtiene el tamaño de la ventana.
	if (anchoVentana < 301) { //Mide el tamaño de la pantalla.
		short_text.innerHTML = icono_dentro_zona + "Lugares";
	}else{
		short_text.innerHTML = icono_dentro_zona + "Zonas de coberturas";
	}
}

rescribir_menu_short_text();