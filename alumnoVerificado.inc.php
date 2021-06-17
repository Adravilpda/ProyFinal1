<?php
$user=$_GET["user"];
include "conexion.inc.php";
	$sql="select * from alumnos where nombre='$user'";
	$resultado=mysqli_query($conn,$sql);
	$fila=mysqli_fetch_array($resultado);
	$nombre=$fila['nombre'];
	$ci=$fila['ci'];
	$rol=$fila['rol'];
	
?>
<h3>El proceso para el estudiante ha finalizado</h3>
<form action="bandejakardex.inc.php" method="POST">
		<input type="hidden" value="<?php echo $nombre;?>" name="nombrec"/>
		<input type="hidden" value="<?php echo $ci;?>" name="ci"/>
		<input type="hidden" value="<?php echo $rol;?>" name="rol"/>
		<input type="submit" value="Volver Bandeja Entrada" name="enviar"/>
		</form>
</form>
