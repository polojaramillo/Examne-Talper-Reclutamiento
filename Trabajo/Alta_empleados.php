<?php 

	include("conexion.php");  
//$conexionbd = new conectar("148.227.227.7", "usuario07","07usuario", "usuario07");
			//conexionbd = new conectar("1");   
		if (isset($_POST["guardar+"])){
		$conexion = conexion();

	
		$nombre = $_POST["nombre"];
		$apellido_pat = $_POST["apellido_pat"];
		$apellido_mat = $_POST["apellido_mat"];
		$dat= $_POST["dat"]; 
		$departamento = $_POST["departamento"];
		$sueldo = $_POST["sueldo"];



		//$conexion =$this->conectar();

		$insert = "INSERT INTO Empleados(Nombre,ApPaterno,ApMaterno,FecNac,Departamento,Sueldo) 
		                          VALUES('$nombre','$apellido_pat','$apellido_mat','$dat','$departamento','$sueldo')";
		mysqli_query($conexion, $insert);
		//$conexionbd->query($insert);
     	}

		header("Location:Mostrar.php");
	


?>