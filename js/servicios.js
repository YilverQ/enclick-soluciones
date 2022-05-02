//Script para hacer un acordeon. 

const bloque = document.querySelectorAll(".bloque");
const bloqueInfo = document.querySelectorAll(".bloqueInfo");
const h4 = document.querySelectorAll(".h4");

h4.forEach( (cadaH4, i) => {
	h4[i].addEventListener("click", ()=>{
		bloque.forEach( (cadaBloque, i) =>{
			bloqueInfo[i].classList.remove("activo");
		})
		//Se le añade 1 porque el primer elemento no es iterable una vez se hace click en los h4.
		bloqueInfo[i+1].classList.add("activo");
	})
})