function cargarContenido(abrir){
    var contenedor;
    contenedor = document.getElementById('contenido');
    fetch(abrir)
		.then(response => response.text())
		.then(data => contenedor.innerHTML=data);
}
function Autenticar() {
    var contenedor;
    contenedor = document.getElementById('mensaje');
    var formulario = document.getElementById("form-login");
    var parametros = new FormData(formulario);
    fetch("autenticar.php",
		{method:"POST",
		body:parametros})
		.then(response => response.text())
		.then(data => contenedor.innerHTML=data);

    
}