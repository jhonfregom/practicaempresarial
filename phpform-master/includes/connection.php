
<?php
require("constants.php");

/*$con = mysqli_connect(DB_SERVER,DB_USER, DB_PASS) or die(mysql_error());
	mysqli_select_db(DB_NAME) or die("No se logra conexion");*/

	function connectDB(){
		$server = "172.30.223.141";
		$user = "user";
		$pass = "password";
		$bd = "sampledb";
		
		$con = mysqli_connect($server, $user, $pass,$bd) 
			or die("Ha sucedido un error inexperado en la conexion de la base de datos");
	}
	
?>