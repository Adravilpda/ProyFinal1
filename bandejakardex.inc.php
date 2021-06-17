<link href="css/principal.css" rel="stylesheet" type="text/css" />

<?php include "includes/cabecera2.php";
		include "conexion.inc.php";
?>

<?PHP
SESSION_START();
$ci=$_POST["ci"];
$usuario=$_POST["nombrec"];
$rol=$_POST["rol"];
$Usuariog=$_SESSION['usuariog'];
$rolg=$_SESSION['rolg'];
$cig=$_SESSION['cig'];
if($rolg=='U'){
	echo "<h3>Univ: ".$Usuariog."</br>";
	echo "C.I.: ".$cig."</br>";
	
}else{
	echo "<h3>Kardixta:".$Usuariog."</br>";
	
}
	$sqlcarga="select * from cargatrabajo where ci='$cig'";
	$resultadocarga=mysqli_query($conn,$sqlcarga);
	$filacarga=mysqli_fetch_Array($resultadocarga);
	$cargap5=$filacarga['p5'];
	$cargap7=$filacarga['p7'];
	$cargap8=$filacarga['p8'];
	$cargap9=$filacarga['p9'];

	
$entrada='si';
$salida='no';

	include "conexion.inc.php";
?>

<table border=3 width=150>	
<tr><td><a href="entradakardex.inc.php" target="cuerpoK">ENTRADA</a></td></tr></br>
<tr><td><a href="salidakardex.inc.php" target="cuerpoK">SALIDA</a></td></tr>
<tr><td>...</td></tr>
<tr><td>...</td></tr>
<tr><td>...</td></tr>
<tr><td>...</td></tr>
<tr><td>...</td></tr>
<tr><td>...</td></tr>
<?php
	if($rolg=='K'){
?>
<tr><td><a href="procesosAlumnos.inc.php" target="cuerpoK">PROCESOS PENDIENTES</a></td></tr>
		
	<h4>Carga Trabajo</h4>

<?php	
	echo "P5 :".$cargap5."</br>";
	echo "P7 :".$cargap7."</br>";
	echo "P8 :".$cargap8."</br>";
	echo "P9 :".$cargap9."</br>";
	echo "</br>";
	}
?>

<tr><td>...</td></tr>
<tr><td>...</td></tr>
</table>	
<div class="cuerpoKardex">
      <h4>Actividad</h4>
	  <iframe  name="cuerpoK" src="entradakardex.inc.php" width=750 height=400 >
	  </iframe>	  	  
	</div>

<center>
      <h1>................................</h1>
	  

      <p>LSM - Comunidad  © 2020 - 2021
Página creada por Marcelo Nio | Todos los derechos reservados</p>
    </center>
  