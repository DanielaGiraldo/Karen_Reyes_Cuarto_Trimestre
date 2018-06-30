
function cambiaEstilo(){
	document.getElementById('name').style.color = '#045A8A  ';
	document.getElementById('name').style.fontSize = '2em';
}
function Restablecer(){
	document.getElementById('name').style.color = '#000000';
	document.getElementById('name').style.fontSize = '17px';
}
function cambiaEstilocorreo(){
	document.getElementById('correo').style.color = '#045A8A';
	document.getElementById('correo').style.fontSize = '2em';
}
function Restablecercorreo(){
	document.getElementById('correo').style.color = '#000000';
	document.getElementById('correo').style.fontSize = '17px';
}
function cambiaEstilopass(){
	document.getElementById('password').style.color = '#045A8A';
	document.getElementById('password').style.fontSize = '2em';
}
function Restablecerpass(){
	document.getElementById('password').style.color = '#000000';
	document.getElementById('password').style.fontSize = '17px';
}
function cambiapassword(){
	document.getElementById('confirm_password').style.color = '#045A8A';
	document.getElementById('confirm_password').style.fontSize = '2em';
}
function Restablecerpassword(){
	document.getElementById('confirm_password').style.color = '#000000';
	document.getElementById('confirm_password').style.fontSize = '17px';
}

function cambialog(){
	document.getElementById('log').style.color = '#045A8A';
	document.getElementById('log').style.fontSize = '2em';
}
function Restablecerlog(){
	document.getElementById('log').style.color = '#000000';
	document.getElementById('log').style.fontSize = '17px';
}

function cambiapasslog(){
	document.getElementById('passlog').style.color = '#045A8A';
	document.getElementById('passlog').style.fontSize = '2em';
}
function Restablecerpasslog(){
	document.getElementById('passlog').style.color = '#000000';
	document.getElementById('passlog').style.fontSize = '17px';
}
function inicializarname(){
	document.getElementById('name').addEventListener('click', cambiaEstilo);
	document.getElementById('name').addEventListener('blur', Restablecer);
}

function inicializarcorreo(){
	document.getElementById('correo').addEventListener('click', cambiaEstilocorreo);
	document.getElementById('correo').addEventListener('blur', Restablecercorreo);
}
function inicializarpass(){
	document.getElementById('password').addEventListener('click', cambiaEstilopass);
	document.getElementById('password').addEventListener('blur', Restablecerpass);
}

function inicializarpassword(){
	document.getElementById('confirm_password').addEventListener('click', cambiapassword);
	document.getElementById('confirm_password').addEventListener('blur', Restablecerpassword);
}
function inicializarlog(){
	document.getElementById('log').addEventListener('click', cambialog);
	document.getElementById('log').addEventListener('blur', Restablecerlog);
}
function inicializarpasslog(){
	document.getElementById('passlog').addEventListener('click', cambiapasslog);
	document.getElementById('passlog').addEventListener('blur', Restablecerpasslog);
}

document.addEventListener('DOMContentLoaded' , inicializarname)
document.addEventListener('DOMContentLoaded' , inicializarcorreo)
document.addEventListener('DOMContentLoaded' , inicializarpass)
document.addEventListener('DOMContentLoaded' , inicializarpassword)
document.addEventListener('DOMContentLoaded' , inicializarlog)
document.addEventListener('DOMContentLoaded' , inicializarpasslog)