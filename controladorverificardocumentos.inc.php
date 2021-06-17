<?php
$flujo=$_GET["flujo"];
$proceso=$_GET["proceso"];
$ci=$_GET["ci"];
$nombre=$_GET["nombre"];
$fecha=date("Y").date("m").date("d");
?>
<form action="verificarpersonal.inc.php" method="GET">
<input type="text" value="<?php echo $nombre;?>" name="nombreI"/></br>
</form>
<?php

$paterno=$_GET["paterno"];
$materno=$_GET["materno"];
$boleta=$_GET["boleta"];
$foto=$_GET["foto"];
$rol=$_GET["rol"];
$verini="sinverificar";
$matriculaini="no";
$materias="no";
if($ci==NULL || $nombre==NULL){
	//echo "<script>alert('No se guardan datos vacios');</script>";
	//header("Location:crearcuenta.php");
	if(isset($_GET["Anterior"]))
	{//F1    P4   IF
	$sql="select * from flujoproceso where flujo='$flujo' and procesosiguiente='$proceso'";
	}
	
	if(isset($_GET["Siguiente"]))
	{
	header("Location:http://localhost/workflow2/motor.php?flujo=F1&proceso=P4&nombrec=$nombre&rol=$rol&ci=$ci");
	exit;
	$sql="select * from flujoproceso where flujo='$flujo' and proceso='P5'";
	}
	
}
else{
	include "conexion.inc.php";
	$valalumno="select * from alumnosinformatica where ci='$ci'";
	$resultadoval=mysqli_query($conn,$valalumno);
	$filaval=mysqli_fetch_Array($resultadoval);
	$valorci=$filaval['ci'];
	if($valorci!=NULL){
	$sqla="UPDATE alumnosinformatica SET nombre='$nombre',paterno='$paterno',materno='$materno',boletaDeposito='$boleta',foto='$foto',Estado='$verini',matricula='$matriculaini',materias='$materias' WHERE ci='$ci'";
		$resultadoa=mysqli_query($conn,$sqla);
	//NOTIFICAR AL KARDEX
		$sqlnot="insert into bandejaalumno values('','$ci','$nombre','Documentos Actualizados','$fecha','no')";
		$resultadonot=mysqli_query($conn,$sqlnot);
	}else{
	$sqla="insert into alumnosinformatica values ('','$ci','$nombre','$paterno','$materno','$boleta','$foto','$verini','$matriculaini','$materias')";
		$resultadoa=mysqli_query($conn,$sqla);
		//NOTIFICAR AL KARDEX
		$sqlnot="insert into bandejaalumno values('','$ci','$nombre','Documentos Ingresados','$fecha','no')";
		$resultadonot=mysqli_query($conn,$sqlnot);
	}
	
	//contando cantidad de kardixtas
	$sqlkardex="select count(*)as cantidad from cargatrabajo";
	$resultadokardex=mysqli_query($conn,$sqlkardex);
	$filakardex=mysqli_fetch_Array($resultadokardex);
	$cantidadkardex=$filakardex['cantidad'];
	//rolear kardixta aleatoriamente
	$carga=rand(1, $cantidadkardex);
	//Seleccionar al ganador
	$selkardex="select * from cargatrabajo where nro='$carga'";
	$resultadosel=mysqli_query($conn,$selkardex);
	$filasel=mysqli_fetch_Array($resultadosel);
	$p5=$filasel['p5'];//obteniendo numero de carga de trabajos
	$p5=$p5+1;
	
	$sqlup="UPDATE `cargatrabajo` SET `p5`='$p5' WHERE nro='$carga'";
	$resultadoup=mysqli_query($conn,$sqlup);
	
	if(isset($_GET["Anterior"]))
	{//F1    P4   IF
	$sql="select * from flujoproceso where flujo='$flujo' and procesosiguiente='$proceso'";
	}
	if(isset($_GET["Siguiente"]))
	{
	$sql="select * from flujoproceso where flujo='$flujo' and proceso='P5'";
	}
}


?>


