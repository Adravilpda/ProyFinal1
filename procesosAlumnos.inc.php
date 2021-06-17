<?php
SESSION_START();
//$UsuarioG=$_SESSION['UsuarioG'];
$nom=$_SESSION['usuariog'];
$rolg=$_SESSION['rolg'];
$cig=$_SESSION['cig'];
include "conexion.inc.php";



?>
	<h4>Verificacion de documentos de alumnos pendientes (P5)</h4>
	<table border=2>
	<tr>
		<td>CI</td>
		<td>Usuario</td>
		<td>Verificar</td>
	</tr>
<?php
	
	$sql="select * from alumnosinformatica where estado='sinverificar'";
	$resultado=mysqli_query($conn,$sql);
	//carga de trabajo por docente
	$sqlca="select * from cargatrabajo where ci='$cig'";
	$resultadoca=mysqli_query($conn,$sqlca);
	$filaca=mysqli_fetch_array($resultadoca);
	$cargap5=$filaca['p5'];
	$cont=0;
	while ($fila=mysqli_fetch_array($resultado) and $cont<$cargap5){
		$cont=$cont+1;

		echo "<tr>";
		echo "<td>$fila[1]</td>";
		echo "<td>$fila[2]</td>";
?>
	<td>
	<form action="motor.php" method="GET">
		<input type="hidden" value="<?php echo $nom; ?>" name="nombrec"/>
		<input type="hidden" value="<?php echo $fila[1]; ?>" name="ci"/>
		<input type="hidden" value="F1" name="flujo"/>
		<input type="hidden" value="P5"name="proceso"/>
		<input type="hidden" value="K"name="rol"/>
		<input type="submit" value="Ir a proceso"/>
	</form>
	</td>
<?php
		
		echo "</tr>";
	}

?>
</table>
<h4>Verificacion en matriculacion de alumnos pendientes (P7)</h4>
	<table border=2>
  <tr>
    <td>CI</td>
    <td>Usuario</td>
	<td>Verificar</td>

  </tr>
<?php
	
	
	$sql="select * from alumnosinformatica where estado='verificado' and matricula='no'";
	$resultado=mysqli_query($conn,$sql);
	$cargap7=$filaca['p7'];
	$cont=0;
	while ($fila=mysqli_fetch_array($resultado) and $cont<$cargap7){
		$cont=$cont+1;

		echo "<tr>";
		echo "<td>$fila[1]</td>";
		echo "<td>$fila[2]</td>"."</br>";
?>
	<td>
	<form action="motor.php" method="GET">
		<input type="hidden" value="<?php echo $nom; ?>" name="nombrec"/>
		<input type="hidden" value="<?php echo $fila[1]; ?>" name="ci"/>
		<input type="hidden" value="F1" name="flujo"/>
		<input type="hidden" value="P7"name="proceso"/>
		<input type="hidden" value="K"name="rol"/>
		<input type="submit" value="Ir a proceso"/>
	</form>
	</td>
<?php
		
		echo "</tr>";
	}
	

?>
</table>
<h4>Asignacion de Materias Pendientes (P8)</h4>
	<table border=2>
  <tr>
    <td>CI</td>
    <td>Usuario</td>
	<td>Verificar</td>

  </tr>
<?php
	
	
	$sql="select * from alumnosinformatica where estado='verificado' and matricula='si' and materias='no'";
	$resultado=mysqli_query($conn,$sql);
	$cargap8=$filaca['p8'];
	$cont=0;
	while ($fila=mysqli_fetch_array($resultado) and $cont<$cargap8){
		$cont=$cont+1;

		echo "<tr>";
		echo "<td>$fila[1]</td>";
		echo "<td>$fila[2]</td>";
?>
	<td>
	<form action="motor.php" method="GET">
		<input type="hidden" value="<?php echo $nom; ?>" name="nombrec"/>
		<input type="hidden" value="<?php echo $fila[1]; ?>" name="ci"/>
		<input type="hidden" value="F1" name="flujo"/>
		<input type="hidden" value="P8"name="proceso"/>
		<input type="hidden" value="K"name="rol"/>
		<input type="submit" value="Ir a proceso"/>
	</form>
	</td>
<?php
		
		echo "</tr>";
	}
?>
</table>
<h4>Reasignacion de Materias Pendientes (P9)</h4>
	<table border=2>
  <tr>
    <td>CI</td>
    <td>Usuario</td>
	<td>Verificar</td>

  </tr>
<?php
	
	
	$sql="select * from alumnosinformatica where estado='verificado' and matricula='si' and materias='obs'";
	$resultado=mysqli_query($conn,$sql);
	$cargap9=$filaca['p9'];
	$cont=0;
	while ($fila=mysqli_fetch_array($resultado) and $cont<$cargap9){
		$cont=$cont+1;

		echo "<tr>";
		echo "<td>$fila[1]</td>";
		echo "<td>$fila[2]</td>";
?>
	<td>
	<form action="motor.php" method="GET">
		<input type="hidden" value="<?php echo $nom; ?>" name="nombrec"/>
		<input type="hidden" value="<?php echo $fila[1]; ?>" name="ci"/>
		<input type="hidden" value="F1" name="flujo"/>
		<input type="hidden" value="P8"name="proceso"/>
		<input type="hidden" value="K"name="rol"/>
		<input type="submit" value="Ir a proceso"/>
	</form>
	</td>
<?php
		
		echo "</tr>";
	}
?>