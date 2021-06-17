<?php
$flujo=$_GET["flujo"];
$proceso=$_GET["proceso"];
$usuario=$_GET["nombrec"];
$ci=$_GET["ci"];

include "conexion.inc.php";
	$sql="UPDATE `seguimiento` SET `proceso`='P4' WHERE ci='$ci'";
	$resultado=mysqli_query($conn,$sql);
?>
<center><h2> INGRESAR DOCUMENTOS Y BOLETA de DEPOSITO</h2>
<table border=1>	
<tr><td>
   CI <td><input name="ci" value="<?php echo $ci;?>" readonly/>
</td></tr>
<tr><td>
   Nombre <td><input name="nombre" type="text" />
   </td></tr>
<tr><td>   
   Paterno<td><input name="paterno" type="text" />
   </td></tr>
<tr><td>   
   Materno<td> <input name="materno" type="text" />
   </td></tr>
<tr><td>   
   Boleta de deposito<td><input name="boleta" type="file" />
   </td></tr>
<tr><td>   
   Foto<td><input name="foto" type="file" id="foto" />
   </td></tr>
 </table>
<h4>Si lleno correctamente, pulse siguiente:</h4></center>
<?php

