<html>
<head>
<title>Peticion get</title>
<meta name="viewport" content="width=devide-width,user-scalable=no, initial-scal=1.0, minimun-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<form action="insertar.php" method="get">  
  <div class="form-group">
    <label for="inputAddress">Nombre</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name = "nombre">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Especialidad</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" name="especialidad">
  </div>
    <div class="form-group col-md-4">
      <select id="inputState" class="form-control" name="mes">
        <option selected>MES</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
      </select>
      <select id="inputState" class="form-control" name="agno">      
      <option selected>AÑO</option>
        <option>2000</option>
        <option>2001</option>
        <option>2002</option>        
      </select>
      <select id="inputState" class="form-control" name = "day">      
      <option selected>DÍA</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
      </select>            
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
<?php echo '<a href="http://localhost/practica5/consulta.php">Buscar Alumno</a>';?>

</body>
</html>