<!DOCTYPE html>
<html>
<title>PaginaMultiplicaciones</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<link href="estilo.css" rel="stylesheet" >
<head>
</head>


<body>
<h1>PaginaMultiplicaciones</h1>

<h2>Actualizar datos</h2>



<form action="Actualizar.php" method="get">

    <label for="actualizar">Seleciona el id que deseas actualizar:</label>
    <input class="form-control" type="text" id="actualizar" name="actualizar" style="width: 200px;" value=""><br>
    <label for="nombre">Ingrese su nombre:</label>
    <input class="form-control"  type="text"  id="nombre" name="nombre" style="width: 200px;" value=""><br>
    <label for="correo">Ingrese su correo electronico:</label>
    <input class="form-control"  type="text"  id="correo" name="correo" style="width: 200px;" value=""><br>
    <label for="tabla">Tabla del:</label>
    <input class="form-control"  type="text"  id="tabla" name="tabla" style="width: 200px;" value=""><br>
    <label for="inicial">Desde el:</label>
    <input class="form-control" type="text" id="inicial" name="inicial" style="width: 200px;" value=""><br>
    <label for="limite">Hasta el:</label>
    <input class="form-control" type="text" id="limite" name="limite" style="width: 200px;" value=""><br>
    <label for="resultado">resultado:</label>
    <input class="form-control" type="text" id="resultado" name="resultado" style="width: 200px;" value=""><br>
    <input class="btn btn-primary" type="submit" value="Actualizar">
    
  </form>

  <br>


<div></div>
</body>
</html>