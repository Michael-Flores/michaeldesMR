function cargarContenido(abrir){
    var contenedor;
    var con1;
    contenedor = document.getElementById('contenido');
     con1=document.getElementById("inicio");
    fetch(abrir)
		.then(response => response.text())
		.then(data => contenedor.innerHTML=data);
    con1.style.height="auto";
}
function cargarSubmenu(abrir){
  var contenedor;
  contenedor = document.getElementById('sub-menu');
  fetch(abrir)
  .then(response => response.text())
  .then(data => contenedor.innerHTML=data);
}
function cambiartitulo(titulo) {
  var cont2=document.getElementById('titulo');
  cont2.innerHTML=titulo;
}
function generarEjercicios(operacion,simbolo) {
  var cantidad = document.getElementById("cantidad1").value;

  var ejercicios = "";
  
  for(var i = 0; i < cantidad; i++) {
    var a = Math.floor(Math.random()*10) + 1;
    var b = Math.floor(Math.random()*10) + 1;
    ejercicios += "<div>" + a + " " + operacion + " " + b + " = <input type='number'style='width: 35px;' ></div><br>";
  }
   ejercicios+="<button onclick='calificar()'>Calificar</button>"
  document.getElementById("reultado").innerHTML = ejercicios;
  document.getElementById("contenido").style.display="flex"
  document.getElementById("contenido").style.flexDirection="column"
}

function calificar() {
  var contenido = document.getElementById("reultado");
  var divs = contenido.querySelectorAll("div");

  for(var i = 0; i < divs.length; i++) {
    var div = divs[i];
    var input = div.querySelector("input");
    var texto = div.textContent.replace("=", "").trim();
    var resultado = eval(texto); 

    if(parseInt(input.value) === resultado) {
      input.style.backgroundColor = "green";
    } else {
      input.style.backgroundColor = "red"; 
    }
  }
}

function cambiarColor() {
  var div = document.getElementById(selectDiv.value);  
  var propiedad = selectPropiedad.value;
  var color = colorPicker.value;  
  
  div.style[propiedad] = color; 
}