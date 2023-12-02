function cargarContenidoA() {

    var contenedor;
    contenedor = document.getElementById('contenido');
    var ajax = new XMLHttpRequest() 
    ajax.open("get", 'pregunta2.php', true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}

function generarEjercicios() {
    var cantidad = document.getElementById("cantidad").value;
    var operaciones = ["+", "-", "*", "/"];
    var contenido = "";
    
    for(var i = 0; i < cantidad; i++) {
      var operacion = operaciones[Math.floor(Math.random()*4)];
      var a = Math.floor(Math.random()*10) + 1; 
      var b = Math.floor(Math.random()*10) + 1;
  
      contenido += a + " " + operacion + " " + b + " = <input type='number'>" + "<br>";
    }
  
    document.getElementById("sub-menu").innerHTML = contenido;
  }