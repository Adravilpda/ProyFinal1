<?php
$ci=$_GET["ci"];
$rol=$_GET["rol"];
$flujo=$_GET["flujo"];
$proceso=$_GET["proceso"];
$nombre=$_GET["nombrec"];
include "conexion.inc.php"; // actualizar proceso de usuario
	$sql="UPDATE `seguimiento` SET `proceso`='P7' WHERE ci='$ci'";
	$resultado=mysqli_query($conn,$sql);
	//contando cantidad de kardixtas
	$sqlkardex="select count(*)as cantidad from cargatrabajo";
	$resultadokardex=mysqli_query($conn,$sqlkardex);
	$filakardex=mysqli_fetch_Array($resultadokardex);
	$cantidadkardex=$filakardex['cantidad'];
	//rolear kardixta aleatoriamente
	$carga=rand(1, $cantidadkardex);
	$carga2=rand(1, $cantidadkardex);
	$carga3=rand(1, $cantidadkardex);
	//Seleccionar al ganador
	$sqlup="UPDATE cargatrabajo SET p7=p7+1 WHERE nro='$carga'";
	$resultadoup=mysqli_query($conn,$sqlup);
	$sqlup="UPDATE cargatrabajo SET p8=p8+1 WHERE nro='$carga2'";
	$resultadoup=mysqli_query($conn,$sqlup);
	$sqlup="UPDATE cargatrabajo SET p9=p9+1 WHERE nro='$carga3'";
	$resultadoup=mysqli_query($conn,$sqlup);
	//NOTIFICAR AL KARDEX
		$sqlnot="insert into bandejaalumno values('','$ci','$nombre','Informacion Estudiante Verificada','$fecha','no')";
		$resultadonot=mysqli_query($conn,$sqlnot);
if($ci==NULL){
	//echo "<script>alert('No se guardan datos vacios');</script>";
	//header("Location:crearcuenta.php");
	if(isset($_GET["Anterior"]))
	{//F1    P6   IF
	$sql="select * from flujoproceso where flujo='$flujo' and procesosiguiente='$proceso'";
	}
	if(isset($_GET["Siguiente"]))
	{
	$sql="select * from flujoproceso where flujo='$flujo' and proceso='P5'";
	}
}
else{
	include "conexion.inc.php";
	//$sqla="insert into flujoproceso.alumnosinformatica values ('$ci','$nombre','$paterno','$materno','$boleta','$foto')";
	//$resultadoa=mysqli_query($conn,$sqla);
	
	if(isset($_GET["Anterior"]))
	{//F1    P4   IF
	$sql="select * from flujoproceso where flujo='$flujo' and procesosiguiente='$proceso'";
	}
	if(isset($_GET["Siguiente"]))
	{
	$sql="select * from flujoproceso where flujo='$flujo' and proceso='P7'";
	}
}


?>
