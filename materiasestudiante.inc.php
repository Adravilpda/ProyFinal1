<h1>Horario de estudiante</h1>

<?php
$flujo=$_GET["flujo"];//recibe el parametro "nombre" de los datos enviados
$proceso=$_GET["proceso"];
$rol=$_GET["rol"];
$ci=$_GET["ci"];
$usuario=$_GET["nombrec"];

include "conexion.inc.php"; // actualizar proceso de usuario
	$sqluser="select * from alumnos where ci='$ci'";// SABER NOMBRE USUARIO DEL CI INFORMATICA
		$resultadouser=mysqli_query($conn,$sqluser);
		$filauser=mysqli_fetch_array($resultadouser);
		$usuarioSEG=$filauser['nombre'];

		$sql2="UPDATE `seguimiento` SET `proceso`='P9' WHERE usuario='$usuarioSEG'";
		$resultado2=mysqli_query($conn,$sql2);
		echo "Alumno Actual:".$usuarioSEG;
?>
<table border=2>
 <tr>
    <td>Sigla</td>
    <td>Nombre Materia</td>
	<td>Horario</td>

 </tr>

 <?php
		$sqlmat1="select * from inf111 where ci='$ci'";
		$resultadomat1=mysqli_query($conn,$sqlmat1);
		$fila1=mysqli_fetch_array($resultadomat1);
		if($fila1['ci']!=null){
			echo "<tr><td>Inf-111</td>";
			echo "<td>Introduccion a la Informatica</td>";
			echo "<td>Lunes-Miercoles</td>";
			echo "<td>10:00 - 12:00</td></tr>";
		}
		$sqlmat2="select * from lab111 where ci='$ci'";
		$resultadomat2=mysqli_query($conn,$sqlmat2);
		$fila2=mysqli_fetch_array($resultadomat2);
		if($fila2['ci']!=null){
			echo "<tr><td>Lab-111</td>";
			echo "<td>Laboratorio de Inf-111</td>";
			echo "<td>Martes-Jueves</td>";
			echo "<td>10:00 - 12:00</td></tr>";
		}
		$sqlmat3="select * from inf112 where ci='$ci'";
		$resultadomat3=mysqli_query($conn,$sqlmat3);
		$fila3=mysqli_fetch_array($resultadomat3);
		if($fila3['ci']!=null){
			echo "<tr><td>Inf-112</td>";
			echo "<td>Organizacion de computadoras</td>";
			echo "<td>Lunes-Miercoles</td>";
			echo "<td>10:00 - 12:00</td></tr>";
		}
		$sqlmat4="select * from inf113 where ci='$ci'";
		$resultadomat4=mysqli_query($conn,$sqlmat4);
		$fila4=mysqli_fetch_array($resultadomat4);
		if($fila4['ci']!=null){
			echo "<tr><td>Inf-113</td>";
			echo "<td>Laboratorio de computacion</td>";
			echo "<td>Martes-Jueves</td>";
			echo "<td>10:00 - 12:00</td></tr>";
		}
		$sqlmat5="select * from mat114 where ci='$ci'";
		$resultadomat5=mysqli_query($conn,$sqlmat5);
		$fila5=mysqli_fetch_array($resultadomat5);
		if($fila5['ci']!=null){
			echo "<tr><td>Mat-114</td>";
			echo "<td>Matematica Discreta I</td>";
			echo "<td>Lunes-Miercoles</td>";
			echo "<td>10:00 - 12:00</td></tr>";
		}
		$sqlmat6="select * from mat115 where ci='$ci'";
		$resultadomat6=mysqli_query($conn,$sqlmat6);
		$fila6=mysqli_fetch_array($resultadomat6);
		if($fila6['ci']!=null){
			echo "<tr><td>Mat-115</td>";
			echo "<td>Analisis Matematico I</td>";
			echo "<td>Martes-Jueves</td>";
			echo "<td>10:00 - 12:00</td></tr>";
		}
		$sqlmat7="select * from lin116 where ci='$ci'";
		$resultadomat7=mysqli_query($conn,$sqlmat7);
		$fila7=mysqli_fetch_array($resultadomat7);
		if($fila7['ci']!=null){
			echo "<tr><td>Lin-116</td>";
			echo "<td>Gramatica Española</td>";
			echo "<td>Lunes-Miercoles</td>";
			echo "<td>10:00 - 12:00</td></tr>";
		}
		if($rol=='K'){
?>
</table>
<input type="submit" value="Reasignar" name="reasignar">
<input type="hidden" value="K" name="rol">
<?php
			
		
		}
		?>
</table>




