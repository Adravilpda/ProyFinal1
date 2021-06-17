<?php
include "conexion.inc.php";
$ci=$_GET["ci"];
$nombre=$_GET["nombre"];
$apellido=$_GET["apellido"];
include "conexion.inc.php";
$sql="insert into flujoproceso.alumnos values ('$ci','$nombre','$apellido')";
$resultado=mysqli_query($conn,$sql);
?>