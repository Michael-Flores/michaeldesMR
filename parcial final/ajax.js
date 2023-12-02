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
function cargarContenido4(abrir) {

    var contenedor;
    contenedor = document.getElementById('contenido');
    var ajax = new XMLHttpRequest() 
    ajax.open("get", abrir, true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
        }
    }
    ajax.setRequestHeader("Content-Type", "text/html; charset=utf-8");
    ajax.send();
}

