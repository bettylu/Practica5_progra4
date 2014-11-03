<?php
	session start();
	if(isset($_SESSION["usuario"])){
	echo"Bienvenido".$_SESSION["usuario"];
	}
	else {
	echo "inicie sesion";
	}
	?>

//validando usuario