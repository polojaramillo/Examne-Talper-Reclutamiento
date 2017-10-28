<!DOCTYPE html>
<html>
<head>
	<title>Altas Empleados</title>
  <link rel="icon" type="image/png" href="talper.png" />
	<link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/font-awesome.css" />
  <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
  
  <link rel="stylesheet" href="css/style.css">
 <link href="carousel.css" rel="stylesheet"> 

 <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
<script>
$(function () {
$("#datepicker").datepicker();
});
</script>

</head>
<body>
 <header>
    <div class="main-menu">
      <div class="container">
        <div class="row">
          <div class="col-md-4">            
            <h1><a class="navbar-brand" href="index.php" data-0="line-height:90px;" data-300="line-height:50px;"> Talper
            </a></h1>               
          </div>            
          <div class="col-md-8">
            <div class="dropdown">
              <ul class="nav nav-pills">
                  <li ><a href="index.php">Inicio</a></li>                 
                <li class="active"><a href="Empleados.php">Agregar</a></li>
                  <li><a href="Mostrar.php">Empleados</a></li>
          
              </ul>
            </div>
          </div>  
        </div>        
      </div>
    </div>
  </header>
  <br><br>  

  <h3><b>Agregar Empleados</b> </h3>
	<center>


		<form method="POST" action="Alta_empleados.php">
			<br><br>
			<section id="content"><br><br>
         <input type="text" REQUIRED name="nombre"  placeholder="Nombre" value=""/><br><br>
		  	 <input type="text" REQUIRED name="apellido_pat" placeholder="Apellido Paterno" value=""/><br><br>
			   <input type="text" REQUIRED name="apellido_mat" placeholder="Apellido Materno" value=""/><br><br>
    <?php
      include("conexion.php");
      $conexion = conexion();    
      $sql = "SELECT Puesto, Descripcion  FROM Departamentos ORDER BY Descripcion asc";
      $result = mysqli_query($conexion,$sql);
      echo" Departamento <select name='departamento' required>"; 
        while ($row=mysqli_fetch_assoc($result)) {
          echo "<option value=".$row['Puesto'].">".$row['Descripcion']."</option>\n"; 
        }
      echo "</select>";
    ?>
      
      <br><br>
			<input type="number" REQUIRED name="sueldo" placeholder="Sueldo" value=""/><br><br>
      <input type="date" REQUIRED name="dat"  ></div>
      <br><br>
			<input type="submit" value="Guardar_datos" name="guardar+">
			<button><a href="index.php">Cancelar</a></button>
		  <br><br>
      </center>

			</section>
		</form>

	</center>
</body>
</html>