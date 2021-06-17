

<?php
$ci=$_GET["ci"];
$flujo=$_GET["flujo"];
$proceso=$_GET["proceso"];	
$nombre=$_GET["nombrec"];
$rol=$_GET["rol"];
if(isset($_GET["reasignar"]))
	{//F1    P4   IF
	$sql="select * from flujoproceso where flujo='$flujo' and proceso='P8'";
	}
	


//	$dir_subida = '/var/www/uploads/';
//$imagenRuta = $dir_subida . basename($_FILES['imagen']['name']);
//$imagenNombre = $_FILES['imagen']['name'];
//$imagenValida = false;

//if (move_uploaded_file($_FILES['imagen']['tmp_name'], $imagenRuta)) {
 //    $imagenValida = true;
//}

// Si la imagen se cargo de forma correcta, entonces insertas en tu base de datos.

//if($imagenValida) {
  // $query = "INSERT INTO imagenes VALUES ('$nombre', '$descripcion', '$imagenNombre')"; 

   // Colocar codigo para insertar el registro en la base de datos
//}

//if(is_uploaded_file($_FILES['fleimagen']['tmp_name'])) { // verifica haya sido cargado el archivo
 //   $ruta= "../Tienda/objetosTienda/".$_FILES['fleimagen']['name'];
 //   move_uploaded_file($_FILES['fleimagen']['tmp_name'], $ruta);
   // }
?>
