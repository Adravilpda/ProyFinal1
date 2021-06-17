<center>
<h1> LA INFORMACION SE VERIFICARA POR UN KARDIXTA</h1>


<?php
$rol=$_GET["rol"];
$nombre=$_GET["nombrec"];
$ci=$_GET["ci"];
$flujo=$_GET["flujo"];
$proceso=$_GET["proceso"];
include "conexion.inc.php"; // actualizar proceso de usuario
	$sql="UPDATE `seguimiento` SET `proceso`='P5' WHERE ci='$ci'";
	$resultado=mysqli_query($conn,$sql);
	//verificar estado de alumno
	$sql="select estado from alumnosinformatica where ci=$ci";
	$resultadoestado=mysqli_query($conn,$sql);
	$filaestado=mysqli_fetch_array($resultadoestado);
	$estado=$filaestado['estado'];

if($rol=='U'){
	echo "Solo los Kardixtas pueden ver esta seccion"."</br>";
?>

	<h2>Navegacion Bloqueada</h2></br>
	<h5>Podra continuar con su inscripcion desde su bandeja de entrada</h5>
<?php
}
else{
	
	if($estado=='sinverificar'){
		echo "DOCUMENTOS SIN VERIFICAR</br>";
		
	}
	if($estado=="rechazado"){
		echo "<h2>ALUMNO RECHAZADO</h2>";
	}
	if($estado=="verificado"){
		echo "<h2>ALUMNO VERIFICADO</h2>";
	}
	
	$sqlk="select * from flujoproceso.alumnosinformatica where ci='$ci'";
	$resultadok=mysqli_query($conn,$sqlk);
	$fila=mysqli_fetch_array($resultadok);
	echo "Documentos del USUARIO: ".$fila[2]."</br>";
	echo "<br>";
	echo "<br>";
	echo "<table border=1>";
	echo "<tr><td>ci      	:<td>".$fila[1];
	echo "<tr><td>nombre	:<td> ".$fila[2];
	echo "<tr><td>paterno	:<td>".$fila[3];
	echo "<tr><td>materno	:<td> ".$fila[4];
	echo "<tr><td>boleta	:<td>  ".$fila[5];
	echo "<tr><td>foto		:<td>  ".$fila[6];
	echo "</table>";
	if($estado=='sinverificar'){
	
?>
	<input type="submit" value="RECHAZAR" name="rechazar">
	<input type="submit" value="VERIFICAR" name="verificar">
<?php	
	}
	if($estado=='verificado'){
?>
	<input type="submit" value="RECHAZAR" name="rechazar">
	<input type="submit" value="VERIFICAR" name="verificar" disabled/>
<?php
	}
	if($estado=='rechazado'){
?>
		<input type="submit" value="RECHAZAR" name="rechazar"disabled/>
		<input type="submit" value="VERIFICAR" name="verificar" >
<?php
	}
}


?>
	
 
