<?php
$ci=$_GET["ci"];
$flujo=$_GET["flujo"];
$proceso=$_GET["proceso"];	
$nombre=$_GET["nombrec"];
$fecha=date("Y").date("m").date("d");	
	include "conexion.inc.php"; // actualizar proceso de usuario
	$sql="select * from alumnos where ci='$ci'";
	$resultado=mysqli_query($conn,$sql);
	$fila=mysqli_fetch_array($resultado);
	$user=$fila['nombre'];
	
	$sql="UPDATE `alumnosinformatica` SET `matricula`='si' WHERE ci='$ci'";
	$resultado=mysqli_query($conn,$sql);
	
	$sql="UPDATE `seguimiento` SET `proceso`='P8' WHERE usuario='$user'";
	$resultado=mysqli_query($conn,$sql);
	//reducir carga de trabajo
	$sql="select * from cargatrabajo where nombre='$nombre'";
		$resultado=mysqli_query($conn,$sql);
		$fila=mysqli_fetch_array($resultado);
		$valor=$fila['p7'];
		if($valor<=0){
			//no se reducira nada
		}else{
			//reducir carga de trabajo gradualmente
			$sql="UPDATE cargatrabajo SET p7=p7-1 where nombre='$nombre'";
			$resultado=mysqli_query($conn,$sql);
		}
	
	//NOTIFICAR AL ESTUDIANTE
	$sqlnot="insert into bandejaalumno values('','$ci','$nombre','Matricula Creada','$fecha','no')";
	$resultadonot=mysqli_query($conn,$sqlnot);
	
	if(isset($_GET["Anterior"]))
	{//F1    P4   IF
	$sql="select * from flujoproceso where flujo='$flujo' and proceso='P6'";
	}
	if(isset($_GET["Siguiente"]))
	{
	$sql="select * from flujoproceso where flujo='$flujo' and proceso='P8'";
	}

?>