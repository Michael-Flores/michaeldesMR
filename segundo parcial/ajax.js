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
function cargar(abrir){
    var contenedor;
    contenedor = document.getElementById('principal');
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
function cambiar(pre1,pre2) {
    var titulo1=document.getElementById('pre1');
    var titulo2=document.getElementById('pre2');
    titulo1.innerHTML=pre1;
    titulo2.innerHTML=pre2;
}
function cambiartitulo(pre1) {
    var titulo1=document.getElementById('titulo');
    titulo1.innerHTML=pre1;
}
function cargar3(){
    var contenedor;
    contenedor = document.getElementById('cuadros');
    var formulario = document.getElementById("form-1");
    var parametros = new FormData(formulario);
    var ajax = new XMLHttpRequest();
    ajax.open('post','introducir.php',true);
    ajax.onreadystatechange = function(){
        if(ajax.readyState == 4){
            contenedor.innerHTML = ajax.responseText;
        }
    }    

ajax.send(parametros);
}

function update()
{
    var contenedor;
    contenedor = document.getElementById('cuadros');
    var formulario = document.getElementById("form-alumno");
    var parametros = new FormData(formulario);

    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    ajax.open("post", 'introducir.php' , true);
    ajax.onreadystatechange = function ( ) {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText; 
        }
    }

    ajax.send(parametros );    
}