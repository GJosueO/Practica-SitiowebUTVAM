<?php
$server ='localhost';
	$user = 'root';
	$password ='';
	$database = 'formulariocontacto';

		$conexion = new mysqli($server,$user,$password,$database);

		if (mysqli_connect_errno()){
			echo 'No Hay conexion', mysqli_connect_error();
			exit();

		}else{
			echo "conexion";



		}
	
		
	
		
		
?>