﻿<?php
	/*
	$_GET['uskey']
	$_GET['fecha']
	$_GET['gol']
	$_GET['color']
	*/
	include('../../php/conexion.php');
	
	$instruccion8="SELECT * from partido WHERE fecha='".$_GET['fecha']."'";
		//echo $instruccion."<br />";
		$consulta6 = mysql_query ($instruccion8, $conexion)
				or die ("Fallo en la consulta $instruccion8");
		$resultado7=mysql_fetch_array($consulta6);
	
	if ($_GET['color']=='am')
		{
		mysql_set_charset("utf8");
		$instruccion="UPDATE incidencias SET golam='".$_GET['gol']."' WHERE usuario='".$_GET['uskey']."' AND fecha='".$_GET['fecha']."'";
		echo $instruccion."<br />";
		$consulta = mysql_query ($instruccion, $conexion)
				or die ("Fallo en la consulta $instruccion");
		}
		else 
		{
		mysql_set_charset("utf8");
		$instruccion="UPDATE incidencias SET golaz='".$_GET['gol']."' WHERE usuario='".$_GET['uskey']."' AND fecha='".$_GET['fecha']."'";
		echo $instruccion."<br />";
		$consulta = mysql_query ($instruccion, $conexion)
				or die ("Fallo en la consulta $instruccion");
		}
	

	
	mysql_close($conexion);
	
	
?>
<html>
<head>
<script>

setTimeout(function () {window.close()},2000);

</script>
</head>
<body onload="cerrar()">
</body>
</html>
<h3 style="color:green;">Guardado!</h3>
