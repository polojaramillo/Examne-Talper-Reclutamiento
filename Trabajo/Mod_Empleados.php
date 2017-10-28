<?php 
	

	include("conexion.php");

	//if (isset($_POST["Guardar+"])){
		$conexion = conexion();

		echo $id=$_REQUEST['id'];;

	
		echo $nombre = $_POST["nombre"];;
		echo $apellido_pat = $_POST["apellido_pat"];;
		echo $apellido_mat = $_POST["apellido_mat"];;
		echo $dat= $_POST["dat"];;
		echo $departamento = $_POST["departamento"];;
		echo $sueldo = $_POST["sueldo"];;


		echo $insert = "UPDATE Empleados SET Nombre='$nombre', ApPaterno='$apellido_pat', ApMaterno='$apellido_mat', FecNac='$dat', Departamento='$departamento', Sueldo='$sueldo' WHERE Clave = '$id'";
		mysqli_query($conexion, $insert);

		
	//}
		header("Location:Mostrar.php");
?>