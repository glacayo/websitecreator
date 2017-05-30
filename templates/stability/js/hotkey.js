document.onkeydown = desabilitar; // Teclas Presionada 
document.onselectstart = selecionar; //Anular la Selecion de Texto 
document.oncontextmenu = selecionar; //Anular el Boton Der del Mouse 

function selecionar() { 
return false; 
} 

function desabilitar() { 
// Combinacion de Teclas con el Control 
if (event.keyCode) { 
	switch(window.event.keyCode) { 
		case 123: //Evento Keycode (Buscar en la tabla elemento a bloquear)
		event.keyCode = 0; 
		return false; 
		default: 
		break;
		} 
	} 
} 