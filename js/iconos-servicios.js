//Script para hacer poner iconos. 

//Variables. 
const h4A = document.querySelectorAll(".h4"); 
const url = "<img src='images/nuestros_servicios/icons/";
const end_url = ".png'>";
const images = ["conexion-redes", "domotica", "streaming" ,"diseño-pagina-web", "equipos-tecnologicos", "social-media", "empresarial", "capacitaciones", "otros-servicios"];
const textos = ["Conexión de redes",
				"Dómitica e Inmótica",
				"Servicios de Streaming",
				"Diseño de páginas webs",
				"Suministros de equipos tecnológicos",
				"Social media",
				"Gestión para empresas y programas informáticos",
				"Capacitaciones",
				"Otros Servicios"]; //Textos predeterminados.

function desing(){
	anchoVentana = window.innerWidth; //obtiene el tamaño de la ventana.
	if (anchoVentana < 801) { //Mide el tamaño de la pantalla.
		//Convertimos cada texto en una imagen.
		h4A.forEach( (cadaH4, i) => {
			h4A[i].innerHTML = url + images[i] + end_url;
		})
	}else{
		h4A.forEach( (cadaH4, i) => {
			h4A[i].innerHTML = textos[i];
		})
	}
}

desing();