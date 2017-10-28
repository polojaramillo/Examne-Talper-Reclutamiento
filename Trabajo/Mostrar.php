<!DOCTYPE html>
<html>
<head>

  <title>Lista de Empleados</title>

  <link rel="icon" type="image/png" href="talper.png" />
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
                  <li class="active"><a href="Mostrar.php">Empleados</a></li>
              </ul>
            </div>
          </div>  
        </div>        
      </div>
    </div>
  </header>
  <br><br>  
  <h3><b>Lista de Empleados</b> </h3>

  <center>
  <br><br><br><br>
  <section id="content"><br><br>
	<table border="5">
		<thead>
			<tr>
				<th colspan="5"  bgcolor=#D4FEFF> <center>Lista de Empleados </center></th>
				<th colspan="1"><a href="Empleados.php"> <center>Nuevo </center></a></th>

			</tr>
		</thead>
		<tbody>
			<tr>
				<td colspan="1" bgcolor= #D4DDFF> <center>Nombre </center></td>
				<td colspan="1" bgcolor= #D4DDFF> <center>Fecha de Nacimiento </center></td>
				<td colspan="1" bgcolor= #D4DDFF> <center>Departamento </center></td>
				<td colspan="1" bgcolor= #D4DDFF> <center>Sueldo </center></td>
				<td colspan="2" bgcolor= #D4DDFF> <center>Accion </center></td>
				
			</tr>

		<?php
			
			
			include("conexion.php");
			$conexion = conexion();
			$sql = "SELECT * FROM Empleados";
			$result = mysqli_query($conexion,$sql);
			while ($row=mysqli_fetch_assoc($result)) {
			
		?>
			<tr>
				<form method="POST" action="Modificar.php">
				<td><?php echo $row['Nombre']. " ". $row['ApPaterno'] . " " .$row['ApMaterno']  ?></td>
				<td><?php echo $row['FecNac']  ?></td>
				<td>
		<?php
			//$conexion2 = conexion();
			$sql2 = "SELECT Descripcion FROM Departamentos INNER JOIN Empleados ON Empleados.Departamento = Departamentos.Puesto WHERE Clave=$row[Clave]";
			$result2 = mysqli_query($conexion,$sql2);
			$i=0;
			$row2=mysqli_fetch_array($result2);
			echo $row2[$i]; 
		?>			
				</td>
				<td><?php echo " $ ". $row['Sueldo'];  ?></td>
				<td>
					
					<input type="hidden" name="id" value="<?php echo $row['Clave']; ?>">
					<input type="submit" value="Modificar" >
					</form>
				</td>
				<td>
					<form method="POST" action="Eliminar.php">
					<input type="hidden" name="id" value="<?php echo $row['Clave']; ?>">		
					<input type="submit" value="Eliminar" onclick="return confirm('¿Estas seguro de Eliminar?');">
					</form>
			</td>

		<?php

			}

		?>	
			
		   </tr>


		</tbody>

	</table>
	 <br><br>  
	</section>
</center>

</body>
</html>