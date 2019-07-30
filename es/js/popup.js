function actbtton(){
	overlay.classList.add('active');
	 popup.classList.add('active');
}

function rembtton(){
	overlay.classList.remove('active');
	popup.classList.remove('active');
}

var btnAbrirPopup = document.getElementById('btn-abrir-popup'),
	btnCerrarPopup = document.getElementById('btn-cerrar-popup');

btnAbrirPopup.addEventListener('click', function(){
	actbtton();
});

btnCerrarPopup.addEventListener('click', function(e){
	e.preventDefault();
	rembtton();
});












var btnAbrirPopupDos = document.getElementById('btn-abrir-articuloDos'),
	btnCerrarPopupDos = document.getElementById('btn-cerrar-articuloDos');

btnAbrirPopupDos.addEventListener('click', function(){
	overlayDos.classList.add('active');
	popupDos.classList.add('active');
});

btnCerrarPopupDos.addEventListener('click', function(e){
	e.preventDefault();
	overlayDos.classList.remove('active');
	popupDos.classList.remove('active');
});
