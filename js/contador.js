/*TYPING*/ //Contador.
let numeroJS = document.querySelectorAll(".num");
let numerosArray = [2001,1548,1452, 1340];

function typing(position, segundos){
	let contador = 0;
	setInterval(function(){
		if(contador<numerosArray[position]){
			numeroJS[position].innerHTML = contador;
			contador++;
		}
	},segundos)
}


//Efecto Scroll
//Efecto Scroll
let uno_sola_vez = false;
$(document).ready(function(){
	$(window).scroll(function(){
		if($(this).scrollTop()>1500 && !uno_sola_vez){
			typing(0, 0.5);
			typing(1, 0.5);
			typing(2, 0.5);
			typing(3, 0.5);
			uno_sola_vez = true;
		}
	});
});