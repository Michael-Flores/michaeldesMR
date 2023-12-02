<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="javascript:crearPersona()" method="POST" enctype="multipart/form-data" class="contenido" id="form-persona">
        <div>
            <label for="archivo">Fotografia:</label>
            <input type="file" name="archivo">
        </div>
        <div>
            <label for="titulo">Titulo</label>
            <input type="text" name="titulos" id="titulos">
        </div>
        <div>
            <label for="autor">Autor</label>
            <input type="text" name="autor" id="autor">
        </div>
        <div>
            <label for="editorial">Editorial</label>
            <select name="editorial" id="editorial">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>
        <div>
            <label for="ano">Año</label>
            <input type="number" name="ano" id="ano">
        </div>
        <div>
            <label for="usuario">Usuario</label>
            <select name="usuario" id="usuario">
                <option value="1">1</option>
                <option value="2">2</option>
            </select> 
        </div>
        <div>
            <label for="carrera">carrera</label>
            <select name="carrera" id="carrera">
                <option value="1">1</option>
                <option value="2">2</option>
            </select>
        </div>
        
        <input type="submit" value="Crear">
    </form>
   
</body>
</html>