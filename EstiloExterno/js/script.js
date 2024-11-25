document.getElementById("btn_iniciar-sesion").addEventListener("click",IniciarSesion);
document.getElementById("btn_iniciar-registrarse").addEventListener("click",register);

//Declarando Variables
var contenerdo_login_registrarse = document.querySelector(".contenerdo_login-registrarse");
var formulario__login = document.querySelector(".formulario_login");
var formulario__registrarse = document.querySelector(".formulario_registrarse");
var caja_trasera__login = document.querySelector(".caja_trasera_login");
var caja_trasera__registrarse = document.querySelector(".caja_trasera_registrarse");


function IniciarSesion(){

		formulario__registrarse.style.display = "nome";
		contenerdo_login_registrarse.style.left = "10px";
		formulario__login.style.display = "block";
		caja_trasera__registrarse.style.opacity = "1";
		caja_trasera__login.style.opacity = "0";
	
}



function register(){
	
		formulario__registrarse.style.display = "block";
		contenerdo_login_registrarse.style.left = "410px";
		formulario__login.style.display = "none";
		caja_trasera__registrarse.style.opacity = "0";
		caja_trasera__login.style.opacity = "1";

}