<?php 

//$conexion = new mysqli("localhost", "usuario07","07usuario", "usuari07");

function conexion(){
		$hostname = "148.227.227.7";
		$database = "usuario07";
		$username = "usuario07";
		$password = "07usuario";

			$conexion=mysqli_connect($hostname,$username,$password,$database);

			if($conexion === false){
            	die("ERROR: No puede conectar. " . mysqli_connect_error());
        	}

			return $conexion;
		}

	

class conectar{
		private $hostname = "148.227.227.7";
		private $database = "usuario07";
		private $username = "usuario07";
		private $password = "07usuario";
		private $conexion;
	


	public function conectar($hostname,$username,$password,$database){
		
		return $this->conexion = (mysqli_connect($hostname,$username,$password,$database)) or die(mysqli_error());
		//mysqli_select_db($database,$conexion) or die(mysqli_error());
		//return $conexion;

	}

	public function query($resultado){
		return mysqli_query($resultado,$this->conexion);
	}
	public function error($resultado){
		return mysqli_error($resultado,$this->conexion);
	}

	public function fetch_assoc($resultado){
		return mysqli_fetch_assoc($resultado);
	}

	public function num_rows($resultado){
		return mysqli_num_rows($resultado);
	}

	public function registro($objeto){
		$conexion =$this->conectar();
		echo $insert="INSERT INTO Empleados VALUES('$objeto->nombre','$objeto->apellido_pat','$objeto->apellido_mat', '$objeto->dat', '$objeto->departamento','$objeto->sueldo')";
	 echo $jala = $conexion->query($conexion, $insert);
	 if($jala){
			echo "enrtro <br>";
		}
	}
}

/**
* 
*/
class objeto{
	
}

?>