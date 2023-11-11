function cargarContenido(abrir){
    var contenedor;
    contenedor = document.getElementById('men');
    var ajax = new XMLHttpRequest();
    ajax.open("get",abrir,true);
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            contenedor.innerHTML = ajax.responseText;
        }
    }    
ajax.setRequestHeader("Content-Type","text/html; charset=utf-8")
ajax.send();
}