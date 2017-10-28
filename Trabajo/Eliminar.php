<?php

			
			include("conexion.php");

			$id= $_POST['id'];
				echo $id;

		

			//if (isset($_POST["guardar+"])){
			$conexion = conexion();

			echo $insert = "DELETE FROM Empleados WHERE Clave= '$id'";
			mysqli_query($conexion, $insert);
	
			header("Location:Mostrar.php");

		//}
		
	
			
?>