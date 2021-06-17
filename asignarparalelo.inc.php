<center>
<?php
$flujo=$_GET["flujo"];//recibe el parametro "nombre" de los datos enviados
$proceso=$_GET["proceso"];
$nombre=$_GET["nombrec"];
$rol=$_GET["rol"];
$ci=$_GET["ci"];
//include "conexion.inc.php"; // actualizar proceso de usuario
	//$sql="UPDATE `seguimiento` SET `proceso`='P8' WHERE usuario='$usuario'";
	//$resultado=mysqli_query($conn,$sql);
if($rol=='U'){
	echo "Solo los kardixtas pueden ver esta seccion";
}
else{
	echo "Nombre Kardixta: ".$nombre."</br>";

	$sqlalumno="select * from alumnosinformatica where ci='$ci'";
	$resultadoalumno=mysqli_query($conn,$sqlalumno);
	$filaalumno=mysqli_fetch_array($resultadoalumno);
	$alumno=$filaalumno['nombre'];
echo "Alumno Actual: ".$alumno;
include "conexion.inc.php";
	$sqlk="select * from materias where sigla='inf-111'";
	$resultadok=mysqli_query($conn,$sqlk);
	$fila=mysqli_fetch_array($resultadok);
	$inscritos=$fila['inscritos'];
	$cupos=$fila['cupos'];
		
?>
<h1>ASIGNAR PARALELO</h1>

<h3>Lista de Materias</h3>
<table border=1 width=400 height=50>
<tr>
	<td>Asignatura</td>
	<td>Inscritos</td>
	<td>Cupos</td>
	<td>Alumno Actual: <?php echo $alumno?></td>
	
</tr>
<tr>
	<td>Inf 111</td>
	<td><?php echo $inscritos?></td>
	<td><?php echo $cupos?></td>
	<td>
	
	<input type="hidden" value="<?php echo $filaalumno['ci'];?>" name="cialumno"/>
	<input type="hidden" value="<?php echo $filaalumno['paterno']." ".$filaalumno['materno']." ".$filaalumno['nombre'];?>" name="alumno"/>
	<input type="hidden" value="P9" name="proceso"/>
	<input type="hidden" value="inf-111" name="sigla1"/>
	<input type="hidden" value="inf111" name="materia1"/>
<?php
	//validacion alumno
	$sqlal="select * from inf111 where ci='$ci'";
	$resultadoal=mysqli_query($conn,$sqlal);
	$filaal=mysqli_fetch_array($resultadoal);
	$valci=$filaal['ci'];
	if($valci==NULL){
?>

		<input type='submit' value='Asignar' name='asignar1'/>
		<input type='submit' value='Retirar' name='retirar1' disabled/>
<?php

	}else{
?>
		<input type='submit' value='Asignar' name='asignar1' disabled/>
		<input type='submit' value='Retirar' name='retirar1'/>
<?php
	}
?>	

	
	</td>
	
</tr>
<?php
	$sqlk="select * from materias where sigla='lab-111'";
	$resultadok=mysqli_query($conn,$sqlk);
	$fila=mysqli_fetch_array($resultadok);
	$inscritos=$fila['inscritos'];
	$cupos=$fila['cupos'];
?>
<tr>
	<td>Lab 111</td>
	<td><?php echo $inscritos?></td>
	<td><?php echo $cupos?></td>
	<td>
	<input type="hidden" value="<?php echo $filaalumno['ci'];?>" name="cialumno"/>
	<input type="hidden" value="<?php echo $filaalumno['paterno']." ".$filaalumno['materno']." ".$filaalumno['nombre'];?>" name="alumno"/>
	<input type="hidden" value="P9" name="proceso"/>
	<input type="hidden" value="lab-111" name="sigla2"/>
	<input type="hidden" value="lab111" name="materia2"/>
	<?php
	//validacion alumno
	$sqlal="select * from lab111 where ci='$ci'";
	$resultadoal=mysqli_query($conn,$sqlal);
	$filaal=mysqli_fetch_array($resultadoal);
	$valci=$filaal['ci'];
	if($valci==NULL){
?>

		<input type='submit' value='Asignar' name='asignar2'/>
		<input type='submit' value='Retirar' name='retirar2' disabled/>
<?php

	}else{
?>
		<input type='submit' value='Asignar' name='asignar2' disabled/>
		<input type='submit' value='Retirar' name='retirar2'/>
<?php
	}
?>	
	</td>
	
</tr>
<?php
	$sqlk="select * from materias where sigla='inf-112'";
	$resultadok=mysqli_query($conn,$sqlk);
	$fila=mysqli_fetch_array($resultadok);
	$inscritos=$fila['inscritos'];
	$cupos=$fila['cupos'];
?>
<tr>
	<td>Inf 112</td>
	<td><?php echo $inscritos?></td>
	<td><?php echo $cupos?></td>
	<td>
	<input type="hidden" value="<?php echo $filaalumno['ci'];?>" name="cialumno"/>
	<input type="hidden" value="<?php echo $filaalumno['paterno']." ".$filaalumno['materno']." ".$filaalumno['nombre'];?>" name="alumno"/>
	<input type="hidden" value="P9" name="proceso"/>
	<input type="hidden" value="inf-112" name="sigla3"/>
	<input type="hidden" value="inf112" name="materia3"/>
	<?php
	//validacion alumno
	$sqlal="select * from inf111 where ci='$ci'";
	$resultadoal=mysqli_query($conn,$sqlal);
	$filaal=mysqli_fetch_array($resultadoal);
	$valci=$filaal['ci'];
	if($valci==NULL){
?>

		<input type='submit' value='Asignar' name='asignar3'/>
		<input type='submit' value='Retirar' name='retirar3' disabled/>
<?php

	}else{
?>
		<input type='submit' value='Asignar' name='asignar3' disabled/>
		<input type='submit' value='Retirar' name='retirar3'/>
<?php
	}
?>	
	</td>
</tr>
<?php
	$sqlk="select * from materias where sigla='inf-113'";
	$resultadok=mysqli_query($conn,$sqlk);
	$fila=mysqli_fetch_array($resultadok);
	$inscritos=$fila['inscritos'];
	$cupos=$fila['cupos'];
?>
<tr>
	<td>Inf 113</td>
	<td><?php echo $inscritos?></td>
	<td><?php echo $cupos?></td>
	<td>
	<input type="hidden" value="<?php echo $filaalumno['ci'];?>" name="cialumno"/>
	<input type="hidden" value="<?php echo $filaalumno['paterno']." ".$filaalumno['materno']." ".$filaalumno['nombre'];?>" name="alumno"/>
	<input type="hidden" value="P9" name="proceso"/>
	<input type="hidden" value="inf-113" name="sigla4"/>
	<input type="hidden" value="inf113" name="materia4"/>
	<?php
	//validacion alumno
	$sqlal="select * from inf111 where ci='$ci'";
	$resultadoal=mysqli_query($conn,$sqlal);
	$filaal=mysqli_fetch_array($resultadoal);
	$valci=$filaal['ci'];
	if($valci==NULL){
?>

		<input type='submit' value='Asignar' name='asignar4'/>
		<input type='submit' value='Retirar' name='retirar4' disabled/>
<?php

	}else{
?>
		<input type='submit' value='Asignar' name='asignar4' disabled/>
		<input type='submit' value='Retirar' name='retirar4'/>
<?php
	}
?>	
	</td>
</tr>
<?php
	$sqlk="select * from materias where sigla='mat-114'";
	$resultadok=mysqli_query($conn,$sqlk);
	$fila=mysqli_fetch_array($resultadok);
	$inscritos=$fila['inscritos'];
	$cupos=$fila['cupos'];
?>
<tr>
	<td>Mat 114</td>
	<td><?php echo $inscritos?></td>
	<td><?php echo $cupos?></td>
	<td>
	<input type="hidden" value="<?php echo $filaalumno['ci'];?>" name="cialumno"/>
	<input type="hidden" value="<?php echo $filaalumno['paterno']." ".$filaalumno['materno']." ".$filaalumno['nombre'];?>" name="alumno"/>
	<input type="hidden" value="P9" name="proceso"/>
	<input type="hidden" value="mat-114" name="sigla5"/>
	<input type="hidden" value="mat114" name="materia5"/>
	<?php
	//validacion alumno
	$sqlal="select * from inf111 where ci='$ci'";
	$resultadoal=mysqli_query($conn,$sqlal);
	$filaal=mysqli_fetch_array($resultadoal);
	$valci=$filaal['ci'];
	if($valci==NULL){
?>

		<input type='submit' value='Asignar' name='asignar5'/>
		<input type='submit' value='Retirar' name='retirar5' disabled/>
<?php

	}else{
?>
		<input type='submit' value='Asignar' name='asignar5' disabled/>
		<input type='submit' value='Retirar' name='retirar5'/>
<?php
	}
?>	
	</td>
</tr>
<?php
	$sqlk="select * from materias where sigla='mat-115'";
	$resultadok=mysqli_query($conn,$sqlk);
	$fila=mysqli_fetch_array($resultadok);
	$inscritos=$fila['inscritos'];
	$cupos=$fila['cupos'];
?>
<tr>
	<td>Mat 115</td>
	<td><?php echo $inscritos?></td>
	<td><?php echo $cupos?></td>
	<td>
	<input type="hidden" value="<?php echo $filaalumno['ci'];?>" name="cialumno"/>
	<input type="hidden" value="<?php echo $filaalumno['paterno']." ".$filaalumno['materno']." ".$filaalumno['nombre'];?>" name="alumno"/>
	<input type="hidden" value="P9" name="proceso"/>
	<input type="hidden" value="mat-115" name="sigla6"/>
	<input type="hidden" value="mat115" name="materia6"/>
	<?php
	//validacion alumno
	$sqlal="select * from inf111 where ci='$ci'";
	$resultadoal=mysqli_query($conn,$sqlal);
	$filaal=mysqli_fetch_array($resultadoal);
	$valci=$filaal['ci'];
	if($valci==NULL){
?>

		<input type='submit' value='Asignar' name='asignar6'/>
		<input type='submit' value='Retirar' name='retirar6' disabled/>
<?php

	}else{
?>
		<input type='submit' value='Asignar' name='asignar6' disabled/>
		<input type='submit' value='Retirar' name='retirar6'/>
<?php
	}
?>	
	
	</td>
</tr>
<?php
	$sqlk="select * from materias where sigla='lin-116'";
	$resultadok=mysqli_query($conn,$sqlk);
	$fila=mysqli_fetch_array($resultadok);
	$inscritos=$fila['inscritos'];
	$cupos=$fila['cupos'];
?>
<tr>
	<td>Lin 116</td>
	<td><?php echo $inscritos?></td>
	<td><?php echo $cupos?></td>
	<td>
	<input type="hidden" value="<?php echo $filaalumno['ci'];?>" name="cialumno"/>
	<input type="hidden" value="<?php echo $filaalumno['paterno']." ".$filaalumno['materno']." ".$filaalumno['nombre'];?>" name="alumno"/>
	<input type="hidden" value="P9" name="proceso"/>
	<input type="hidden" value="lin-116" name="sigla7"/>
	<input type="hidden" value="lin116" name="materia7"/>
	<?php
	//validacion alumno
	$sqlal="select * from inf111 where ci='$ci'";
	$resultadoal=mysqli_query($conn,$sqlal);
	$filaal=mysqli_fetch_array($resultadoal);
	$valci=$filaal['ci'];
	if($valci==NULL){
?>

		<input type='submit' value='Asignar' name='asignar7'/>
		<input type='submit' value='Retirar' name='retirar7' disabled/>
<?php

	}else{
?>
		<input type='submit' value='Asignar' name='asignar7' disabled/>
		<input type='submit' value='Retirar' name='retirar7'/>
<?php
	}
?>	
	</td>
</tr>
</table>
<?php
}
?>
