<?php
$ci=$_GET["ci"];
$nombre=$_GET["nombre"];
$apellido=$_GET["apellido"];
$rol='U';
$bandeja='no';
$notif=0;
if($ci==NULL || $nombre==NULL || $apellido==NULL){
	echo "<script>alert('No se guardan datos vacios');</script>";
	header("Location:crearcuenta.inc.php");
}
else{
	include "conexion.inc.php";
	$sql="insert into alumnos values ('$ci','$rol','$nombre','$apellido','$bandeja','$notif')";
	$resultado=mysqli_query($conn,$sql);
}
header("Location:acceso.inc.php");


?>