<?php

#3 de abril 2014|
	$conexion=mysql_connect('localhost','root','MeganFo$2015');

	if ($conexion) 
	{
		echo "Conexion exitosa man."<br>;
	}

	$selecciona_database=mysql_select_db("mercado_test",$conexion);

	if(!mysql_select_db("mercado_test",$conexion))
	{
		echo "No existe tal base de datos";
	}



?>
