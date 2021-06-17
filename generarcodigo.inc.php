<h1>GENERAR CODIGO</H1>

<?php
$tramite=100;
$fin="no termino";
$flujo=$_GET["flujo"];
$proceso=$_GET["proceso"];
$usuario=$_GET["nombrec"];
$ci=$_GET["ci"];
$rol=$_GET["rol"];
$fecha=date("Y").date("m").date("d");




include "conexion.inc.php";
	$buscar="select * from seguimiento where ci='$ci'";
	$r=mysqli_query($conn,$buscar);
	$fila=mysqli_fetch_array($r);
	
	$usuariox=$fila['usuario'];
	
	if($usuariox==NULL){
		$codigo=rand(5000000, 10000000);
		echo "Su Codigo es:"."</br>";
		echo $codigo;
		
		$sqlmax="select max(tramite)as maximo from seguimiento";
		$resultadomax=mysqli_query($conn,$sqlmax);
		$filamax=mysqli_fetch_array($resultadomax);
		$tmax=$filamax['maximo'];
		$tmax=$tmax+1;
		$sql="insert into seguimiento values ('$usuario','$ci','$codigo','$flujo','$proceso','$tmax',$fecha,'')";
		$resultado=mysqli_query($conn,$sql);
		//NOTIFICAR AL KARDEX
		$sqlnot="insert into bandejaalumno values('','$ci','$usuario','Codigo Inscripcion Generado','$fecha','no')";
		$resultadonot=mysqli_query($conn,$sqlnot);
		
		
	}
	else{
		echo "Este usuario ya tiene un codigo asignado, espere a que expire su codigo"."</br>";
		echo "USUARIO: ".$usuariox."</br>";
		$coduser=$fila['codigo'];
		echo "Su codigo es:".$coduser."</br>";
	}
	
	
	//$DateAndTime = date('m-d-Y h:i:s a', time()); 
	//$hora=date("d");
	//echo "La hora actual es: $DateAndTime.";
	//echo "</br>";
	//echo $hora;
	
	

 
	
?>
<h4>Tiempo restante para depositar:48 horas</h4>
