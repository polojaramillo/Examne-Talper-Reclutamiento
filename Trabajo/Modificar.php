<!DOCTYPE html>
<html>
<head>

	<title>Modificar Empleados</title>

	<link rel="icon" type="image/png" href="talper.png" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
  	<link rel="stylesheet" href="css/font-awesome.min.css" />
  	<link rel="stylesheet" href="css/font-awesome.css" />
  	<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
 	<link rel="stylesheet" href="css/style.css">
 	<link href="carousel.css" rel="stylesheet">

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
                <li><a href="Empleados.php">Agregar</a></li>
                  <li><a href="Mostrar.php">Empleados</a></li>
          
              </ul>
            </div>
          </div>  
        </div>        
      </div>
    </div>
  </header>
  <br><br>
    <h3><b>Modificar Empleados</b> </h3>
	<center>

		<?php

			$id=$_REQUEST['id'];
			include("conexion.php") ;
			$conexion = conexion();     
          	$sql = "SELECT * FROM Empleados WHERE Clave = '$id'";
			$result = mysqli_query($conexion,$sql);
			$row=mysqli_fetch_assoc($result);
					
		?>

		<form method="POST"  action="Mod_Empleados.php"><br><br><br><br>

			<section id="content"><br><br>

				<input type="text" REQUIRED name="nombre" placeholder="Nombre" value="<?php echo $row['Nombre']; ?>"/><br><br>
				<input type="text" REQUIRED name="apellido_pat" placeholder="Apellido Paterno" value="<?php echo $row['ApPaterno']; ?>"/><br><br>
				<input type="text" REQUIRED name="apellido_mat" placeholder="Apellido Materno" value="<?php echo $row['ApMaterno']; ?>"/><br><br>

			<?php
  				
      			$conexion2 = conexion();
     			$sql2 = "SELECT Puesto, Descripcion  FROM Departamentos ORDER BY Descripcion asc";
      			$result2 = mysqli_query($conexion2,$sql2);
				echo" Departamento <select name='departamento' required>"; 
					while ($row2=mysqli_fetch_assoc($result2)) {
 				 		echo "<option value=".$row2['Puesto'].">".$row2['Descripcion']."</option>\n"; 
					}
				echo "</select>";
			?>

			<br><br>
			<input type="text" REQUIRED name="sueldo" placeholder="Sueldo" value="<?php echo $row['Sueldo']; ?>"/><br><br>
			<input type="date" REQUIRED name="dat" value="<?php echo $row['FecNac']; ?>"  ></div>
			<input type="hidden" name="id" value="<?php echo $row['Clave']; ?>">
			<input type="submit" value="Guardar" name="Guarda+">
			<br><br>
			
		
			</section>
			</form>

		</center>
</body>
</html>