<center>
<h1> PASO 7 CREAR MATRICULA</h1>

<?PHP
$rol=$_GET["rol"];
$nombre=$_GET["nombrec"];
$ci=$_GET["ci"];
	include "conexion.inc.php"; // actualizar proceso de usuario
	$sql="UPDATE `seguimiento` SET `proceso`='P7' WHERE ci='$ci'";
	$resultado=mysqli_query($conn,$sql);
if($rol=='U'){
	echo "Solo los kardixtas pueden ver esta seccion";
}
else{
	include "conexion.inc.php";
	$sqlk="select * from alumnosinformatica where ci='$ci'";
	$resultadok=mysqli_query($conn,$sqlk);
	$fila=mysqli_fetch_array($resultadok);
	$ci=$fila['ci'];
	echo "PROCEDER A CREAR MATRICULA CON DATOS DEL ESTUDIANTE"."</br></br></br>";
	echo "idMatricula: "."<br>";
	echo "Nombre Completo:".$fila['nombre']." ".$fila['paterno']." ".$fila['materno']."</br>";
	echo "ci: ".$ci."<br>";
	echo "Codigo Universitario: "."<br>";
?>
	<input type="text" name="coduni"/></br>
<?php
	echo "Foto: "."<br>";
?>
<table border=2 width=50 height=50>
<tr>
</tr>
</table>
<?php
	echo "Fecha Creacion: "."<br>";
	?>
	<input type="text" name="coduni"/></br>
<?php
	//LISTAR DOCUMENTOS DE ESTUDIANTE
	
}


?>
