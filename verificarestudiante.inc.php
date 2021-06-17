<center>
<h1> PASO 6 CONFIRMAR DATOS ESTUDIANTE</h1>

<?PHP
$rol=$_GET["rol"];
$nombre=$_GET["nombrec"];
$ci=$_GET["ci"];
if($rol=='U'or $rol=='K'){
	
	include "conexion.inc.php";
	$sqlseg="UPDATE seguimiento SET proceso='P6' WHERE ci='$ci'";
	$resultadoseg=mysqli_query($conn,$sqlseg);
	$sqlk="select * from flujoproceso.alumnosinformatica where ci='$ci'";
	$resultadok=mysqli_query($conn,$sqlk);
	$fila=mysqli_fetch_array($resultadok);
	$ci=$fila['ci'];
	echo "POR FAVOR VERIFICA TU INFORMACION"."<br>";
	
	echo "ci:       ".$fila[1]."</br>";
	echo "nombre:   ".$fila[2]."</br>";
	echo "paterno 	".$fila[3]."</br>";
	echo "materno 	".$fila[4]."</br>";
	echo "boleta  	".$fila[5]."</br>";
	echo "foto    	".$fila[6]."</br></br></br>";
	echo "Si los datos son correctos, pulse siguiente...";
}
else{
	echo "Error de visualizacion";
	
}
?>
<input name="ci" value="<?php echo $ci;?>" type="hidden" />