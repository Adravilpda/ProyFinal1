<?php
$ci=$_GET["ci"];			//ci ESTUDIANTE
$flujo=$_GET["flujo"];
$proceso=$_GET["proceso"];
$nombre=$_GET["nombrec"]; //nombre ADMIN ACTUAL
		$dia=date("d");
		$mes=date("m");
		$año=date("Y");
		$fecha=$año.$mes.$dia;
	include "conexion.inc.php";	
	if(isset($_GET["verificar"])){
		$verificar=$_GET["verificar"];
		$sql="select * from cargatrabajo where nombre='$nombre'";
		$resultado=mysqli_query($conn,$sql);
		$fila=mysqli_fetch_array($resultado);
		$valor=$fila['p5'];
		if($valor<=0){
			//no se reducira nada
		}else{
			//reducir carga de trabajo gradualmente
			$sql="UPDATE cargatrabajo SET p5=p5-1 where nombre='$nombre'";
			$resultado=mysqli_query($conn,$sql);
		}
		
		
		
		$sql="UPDATE `alumnosinformatica` SET `estado`='verificado' WHERE ci='$ci'";
		$resultado=mysqli_query($conn,$sql);
		$fila=mysqli_fetch_array($resultado);
		
		
		//NOTIFICAR AL ESTUDIANTE
		$sqlnot="insert into bandejaalumno values('','$ci','$nombre','Documentos Verificados','$fecha','no')";
		$resultadonot=mysqli_query($conn,$sqlnot);
		
		header("Location:http://localhost/workflow2/motor.php?nombrec=$nombre&ci=$ci&flujo=F1&proceso=P5&rol=K");
		exit;
	}
	if(isset($_GET["rechazar"])){
		$rechazar=$_GET["rechazar"];
		
		$sql="UPDATE `alumnosinformatica` SET `estado`='rechazado' WHERE ci='$ci'";
		$resultado=mysqli_query($conn,$sql);
		//NOTIFICAR AL ESTUDIANTE
		$sqlnot="insert into bandejaalumno values('','$nombre','Documentos Rechazados','$fecha','no')";
		$resultadonot=mysqli_query($conn,$sqlnot);
		
		header("Location:http://localhost/workflow2/motor.php?nombrec=$nombre&ci=$ci&flujo=F1&proceso=P5&rol=K");
		exit;
	}
	
	if(isset($_GET["Anterior"]))
	{//F1    P4   IF
	$sql="select * from flujoproceso where flujo='$flujo' and proceso='P4'";
	}
	if(isset($_GET["Siguiente"]))
	{
	$sql="select * from flujoproceso where flujo='$flujo' and proceso='P6'";
	}

?>