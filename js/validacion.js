(function(){
	var formulario1 = document.getElementsByName("form"),
	elementos = form.elements,
	boton = document.getElementById('btn');

	var validarName = function(e){
		if (form.name.value == 0 ) {
			form.name.className = 'form-control border-danger';
			alerta2.innerHTML = "Introduzca Un Nombre!";
			console.log("Name Field Not Completed!");
			e.preventDefault();
		} else {

			form.name.className = 'form-control border-success';

		}
	};

	var  validarSuname = function(e){
		if (form.suname.value == 0) {
			console.log("Introduzca Un Apellido!");
			alerta3.innerHTML = "Introduzca Un Apellido!";
			form.suname.className = 'form-control border-danger';
			e.preventDefault();
		}else {

			form.suname.className = 'form-control border-success';

		}

	}

	var  validarIdentification = function(e){
		if (form.identification.value == 0) {
			console.log("Introduzca Un Numero de Indentificación!");
			alerta4.innerHTML = "Introduzca Un Numero de Indentificación!";
			form.identification.className = 'form-control border-danger';
			e.preventDefault();
		}else {

			form.identification.className = 'form-control border-success';

		}

	}

	var  validarMail = function(e){
		if (form.mail.value == 0) {
			console.log("Ingrese Un Correo Valido!");
			alerta5.innerHTML = "Introduce Un Correo Valido!";
			form.mail.className = 'form-control border-danger';
			e.preventDefault();
		}else {

			form.mail.className = 'form-control border-success';

		}

	}

	var  validarPassword = function(e){
		if (form.password.value == 0) {
			console.log("Ingrese una Contrasena!");
			alerta6.innerHTML = "Ingrese una Contrasena!";
			form.password.className = 'form-control border-danger';
			e.preventDefault();
		}else {

			form.password.className = 'form-control border-success';

		}

	}



	var valid = function(e){
		validarName(e);
		validarSuname(e);
		validarIdentification(e);
		validarMail(e);
		validarPassword(e);
	};
	form.addEventListener('submit', valid);

}())