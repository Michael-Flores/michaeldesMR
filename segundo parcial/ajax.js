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



function crear(){
    const app = document.getElementById('principal');

    const numInput = document.createElement('input');
    numInput.type = 'number';
    numInput.id = 'inputNumero';
    
    const numLabel = document.createElement('label');
    numLabel.textContent = 'Tabla del';
    
    const sumaRadio = document.createElement('input');
    sumaRadio.type = 'radio';
    sumaRadio.name = 'operation';
    sumaRadio.value = 'suma';
    sumaRadio.id = 'radioSuma';
    
    const sumaLabel = document.createElement('label'); 
    sumaLabel.textContent = 'Suma';
    
    const restaRadio = document.createElement('input');
    restaRadio.type = 'radio';
    restaRadio.name = 'operation';
    restaRadio.value = 'resta';
    restaRadio.id = 'radioResta';
    
    const restaLabel = document.createElement('label');
    restaLabel.textContent = 'Resta';
    
    const factorialRadio = document.createElement('input');
    factorialRadio.type = 'radio'; 
    factorialRadio.name = 'operation';
    factorialRadio.value = 'factorial';
    factorialRadio.id = 'radioFactorial';
    
    const factorialLabel = document.createElement('label');
    factorialLabel.textContent = 'Factorial';
    
    const numInput2 = document.createElement('input');
    numInput2.type = 'number';
    numInput2.id = 'inputHasta';
    
    const br= document.createElement('br')
    const hastaLabel = document.createElement('label');
    
    hastaLabel.textContent = 'Hasta';
    
    const button = document.createElement('button');
    button.textContent = 'Calcular';
    
    app.appendChild(numLabel);
    app.appendChild(numInput);
    
    app.appendChild(sumaRadio);
    app.appendChild(sumaLabel);
    
    app.appendChild(restaRadio);
    app.appendChild(restaLabel);
    
    app.appendChild(factorialRadio);
    app.appendChild(factorialLabel);  
    app.appendChild(br)
    app.appendChild(hastaLabel);
    app.appendChild(numInput2);
    
    app.appendChild(button);
    
  
    button.addEventListener('click', () => {
      const cam=document.getElementById('principal');
      cam.style.height="auto";
      const num1 = parseInt(numInput.value);
      const num2 = parseInt(numInput2.value);
    
      const operation = document.querySelector('input[name="operation"]:checked').value;
    
   
      const table = document.createElement('table');
    

      let header = '';
      header += '<tr>';
    
      header += '</tr>';

      for(let i = 1; i <= num2; i++) {
    
        let row = '';
        row += '<tr>';
        row += `<td>${num1}</td>`;
        row += `<td>${operation === 'suma' ? '+' : '-'}</td>`;
        row += `<td>${operation === 'suma' ? i : num1+i}</td>`;
        row += `<td>=</td>`;
    
        let result;
        if(operation === 'suma') {
          result = num1 + i;
        } else if(operation === 'resta') {
          result = (num1+i) - num1;
        } else if(operation === 'factorial') {
          
        }
    
        row += `<td>${result}</td>`;
        row += '</tr>';
    
        header += row;
    
      }
    
      table.innerHTML = header;
  
      app.appendChild(table);
    
    });
    
    
    
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


function cargar3() {
    var contenedor;
    contenedor = document.getElementById('cuadros');
    var formulario = document.getElementById("form-1");
    var parametros = new FormData(formulario);

    var cam=document.getElementById('principal');
    f=new FormData();
    f.add
    var ajax = new XMLHttpRequest() //crea el objetov ajax 
    ajax.open("post", 'introducir.php' , true);
    ajax.onreadystatechange = function () {
        if (ajax.readyState == 4) {
            contenedor.innerHTML = ajax.responseText;
            cam.style.height="auto";
            let cuadros = document.querySelectorAll('#cuadros input');
            let suma = 0;
            cuadros.forEach(cuadro => {
              cuadro.addEventListener('input', () => {
                suma = 0;
                cuadros.forEach(c => {
                  suma += parseInt(c.value) || 0;
                });
                document.getElementById('suma').textContent = suma;
              });
            });
        }
    }

    ajax.send(parametros ,`numero=${numero}`);
}