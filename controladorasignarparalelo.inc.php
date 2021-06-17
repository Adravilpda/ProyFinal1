<?php
$flujo=$_GET["flujo"];//recibe el parametro "nombre" de los datos enviados
$proceso=$_GET["proceso"];
$cialumno=$_GET["cialumno"];
$alumno=$_GET["alumno"];
$nombre=$_GET["nombrec"];
$fecha=date("Y").date("m").date("d");
	include "conexion.inc.php";
	//reducir carga de trabajo
	$sql="select * from cargatrabajo where nombre='$nombre'";
		$resultado=mysqli_query($conn,$sql);
		$fila=mysqli_fetch_array($resultado);
		$valor=$fila['p8'];
		if($valor<=0){
			//no se reducira nada
		}else{
			//reducir carga de trabajo gradualmente
			$sql="UPDATE cargatrabajo SET p8=p8-1 where nombre='$nombre'";
			$resultado=mysqli_query($conn,$sql);
		}
	//
	//NOTIFICAR AL ESTUDIANTE
		//$sqlnot="insert into bandejaalumno values('','$ci','$nombre','Materia Asignada','$fecha','no')";
		//$resultadonot=mysqli_query($conn,$sqlnot);
	
	
$sigla1=$_GET["sigla1"];
$materia1=$_GET["materia1"];

$sigla2=$_GET["sigla2"];
$materia2=$_GET["materia2"];

$sigla3=$_GET["sigla3"];
$materia3=$_GET["materia3"];

$sigla4=$_GET["sigla4"];
$materia4=$_GET["materia4"];

$sigla5=$_GET["sigla5"];
$materia5=$_GET["materia5"];

$sigla6=$_GET["sigla6"];
$materia6=$_GET["materia6"];

$sigla7=$_GET["sigla7"];
$materia7=$_GET["materia7"];

	include "conexion.inc.php";
	if(isset($_GET["asignar1"]) or isset($_GET["asignar2"]) or isset($_GET["asignar3"]) or isset($_GET["asignar4"])or isset($_GET["asignar5"])or isset($_GET["asignar6"])or isset($_GET["asignar7"]))
	{
		$sqlmat="UPDATE alumnosinformatica SET materias='si' where ci='$cialumno'";
		$resultadomat=mysqli_query($conn,$sqlmat);
	}

	if(isset($_GET["asignar1"])){
		$sqlval="select * from $materia1 where ci='$cialumno' and nombre='$alumno'";
		$resultadoval=mysqli_query($conn,$sqlval);
		$filaval=mysqli_fetch_Array($resultadoval);
		
		if($filaval['ci']== NULL && $filaval['nombre']==NULL){
			$sql="insert into $materia1 values ('$cialumno','$alumno')";
			$resultado=mysqli_query($conn,$sql);
			
		$sql2="select * from materias where sigla='$sigla1'";
		$resultado2=mysqli_query($conn,$sql2);
		$fila2=mysqli_fetch_Array($resultado2);
		$ninscritos=$fila2['inscritos'];
		$ncupos=$fila2['cupos'];
		$ninscritos=$ninscritos+1;
		$ncupos=$ncupos-1;
		
		$sql3="UPDATE `materias` SET `cupos`='$ncupos',`inscritos`='$ninscritos' WHERE sigla='$sigla1'";
		$resultado3=mysqli_query($conn,$sql3);
		
		$sqlnot="insert into bandejaalumno values('','$ci','$nombre','Materia $sigla1 Asignada','$fecha','no')";
		$resultadonot=mysqli_query($conn,$sqlnot);
		
		header("Location:http://localhost/workflow2/motor.php?flujo=F1&proceso=P8&nombrec=$nombre&rol=K&ci=$cialumno");
		exit;
		}
		else{
			header("Location:http://localhost/workflow2/errores.inc.php");
			exit;
		}
		
		
		
	//$sql="select * from materias";
	//$resultado=mysqli_query($conn,$sql);
	//$fila=mysqli_fetch_array($resultado);
	}
	if(isset($_GET["retirar1"])){
		$sqlval="select * from $materia1 where ci='$cialumno' and nombre='$alumno'";
		$resultadoval=mysqli_query($conn,$sqlval);
		$filaval=mysqli_fetch_Array($resultadoval);
		
		if($filaval['ci']!= NULL && $filaval['nombre']!=NULL){
			$sql="delete from $materia1 where ci='$cialumno'";
			$resultado=mysqli_query($conn,$sql);
			
		$sql2="select * from materias where sigla='$sigla1'";
		$resultado2=mysqli_query($conn,$sql2);
		$fila2=mysqli_fetch_Array($resultado2);
		$ninscritos=$fila2['inscritos'];
		$ncupos=$fila2['cupos'];
		$ninscritos=$ninscritos-1;
		$ncupos=$ncupos+1;
		
		$sql3="UPDATE `materias` SET `cupos`='$ncupos',`inscritos`='$ninscritos' WHERE sigla='$sigla1'";
		$resultado3=mysqli_query($conn,$sql3);
		
		$sqlnot="insert into bandejaalumno values('','$ci','$nombre','Materia $sigla1 Retirada','$fecha','no')";
		$resultadonot=mysqli_query($conn,$sqlnot);
		
		header("Location:http://localhost/workflow2/motor.php?flujo=F1&proceso=P8&nombrec=$nombre&rol=K&ci=$cialumno");
		exit;
		}
		else{
			header("Location:http://localhost/workflow2/errores.inc.php");
			exit;
		}
		
		
		
	//$sql="select * from materias";
	//$resultado=mysqli_query($conn,$sql);
	//$fila=mysqli_fetch_array($resultado);
	}
	if(isset($_GET["asignar2"])){
		$sqlval="select * from $materia2 where ci='$cialumno' and nombre='$alumno'";
		$resultadoval=mysqli_query($conn,$sqlval);
		$filaval=mysqli_fetch_Array($resultadoval);
		
		if($filaval['ci']== NULL && $filaval['nombre']==NULL){
			$sql="insert into $materia2 values ('$cialumno','$alumno')";
			$resultado=mysqli_query($conn,$sql);
			
		$sql2="select * from materias where sigla='$sigla2'";
		$resultado2=mysqli_query($conn,$sql2);
		$fila2=mysqli_fetch_Array($resultado2);
		$ninscritos=$fila2['inscritos'];
		$ncupos=$fila2['cupos'];
		$ninscritos=$ninscritos+1;
		$ncupos=$ncupos-1;
		
		$sql3="UPDATE `materias` SET `cupos`='$ncupos',`inscritos`='$ninscritos' WHERE sigla='$sigla2'";
		$resultado3=mysqli_query($conn,$sql3);
		$sqlnot="insert into bandejaalumno values('','$ci','$nombre','Materia $sigla2 Asignada','$fecha','no')";
		$resultadonot=mysqli_query($conn,$sqlnot);
		header("Location:http://localhost/workflow2/motor.php?flujo=F1&proceso=P8&nombrec=$nombre&rol=K&ci=$cialumno");
		exit;
		}
		else{
			header("Location:http://localhost/workflow2/errores.inc.php");
			exit;
		}
		
		
		
	//$sql="select * from materias";
	//$resultado=mysqli_query($conn,$sql);
	//$fila=mysqli_fetch_array($resultado);
	}
	if(isset($_GET["asignar3"])){
		$sqlval="select * from $materia3 where ci='$cialumno' and nombre='$alumno'";
		$resultadoval=mysqli_query($conn,$sqlval);
		$filaval=mysqli_fetch_Array($resultadoval);
		
		if($filaval['ci']== NULL && $filaval['nombre']==NULL){
			$sql="insert into $materia3 values ('$cialumno','$alumno')";
			$resultado=mysqli_query($conn,$sql);
			
		$sql2="select * from materias where sigla='$sigla3'";
		$resultado2=mysqli_query($conn,$sql2);
		$fila2=mysqli_fetch_Array($resultado2);
		$ninscritos=$fila2['inscritos'];
		$ncupos=$fila2['cupos'];
		$ninscritos=$ninscritos+1;
		$ncupos=$ncupos-1;
		
		$sql3="UPDATE `materias` SET `cupos`='$ncupos',`inscritos`='$ninscritos' WHERE sigla='$sigla3'";
		$resultado3=mysqli_query($conn,$sql3);
		$sqlnot="insert into bandejaalumno values('','$ci','$nombre','Materia $sigla3 Asignada','$fecha','no')";
		$resultadonot=mysqli_query($conn,$sqlnot);
		header("Location:http://localhost/workflow2/motor.php?flujo=F1&proceso=P8&nombrec=$nombre&rol=K&ci=$cialumno");
		exit;
		}
		else{
			header("Location:http://localhost/workflow2/errores.inc.php");
			exit;
		}
		
		
		
	//$sql="select * from materias";
	//$resultado=mysqli_query($conn,$sql);
	//$fila=mysqli_fetch_array($resultado);
	}
	if(isset($_GET["asignar4"])){
		$sqlval="select * from $materia4 where ci='$cialumno' and nombre='$alumno'";
		$resultadoval=mysqli_query($conn,$sqlval);
		$filaval=mysqli_fetch_Array($resultadoval);
		
		if($filaval['ci']== NULL && $filaval['nombre']==NULL){
			$sql="insert into $materia4 values ('$cialumno','$alumno')";
			$resultado=mysqli_query($conn,$sql);
			
		$sql2="select * from materias where sigla='$sigla4'";
		$resultado2=mysqli_query($conn,$sql2);
		$fila2=mysqli_fetch_Array($resultado2);
		$ninscritos=$fila2['inscritos'];
		$ncupos=$fila2['cupos'];
		$ninscritos=$ninscritos+1;
		$ncupos=$ncupos-1;
		
		$sql3="UPDATE `materias` SET `cupos`='$ncupos',`inscritos`='$ninscritos' WHERE sigla='$sigla4'";
		$resultado3=mysqli_query($conn,$sql3);
		$sqlnot="insert into bandejaalumno values('','$ci','$nombre','Materia $sigla4 Asignada','$fecha','no')";
		$resultadonot=mysqli_query($conn,$sqlnot);
		header("Location:http://localhost/workflow2/motor.php?flujo=F1&proceso=P8&nombrec=$nombre&rol=K&ci=$cialumno");
		exit;
		}
		else{
			header("Location:http://localhost/workflow2/errores.inc.php");
			exit;
		}
		
		
		
	//$sql="select * from materias";
	//$resultado=mysqli_query($conn,$sql);
	//$fila=mysqli_fetch_array($resultado);
	}
	if(isset($_GET["asignar5"])){
		$sqlval="select * from $materia5 where ci='$cialumno' and nombre='$alumno'";
		$resultadoval=mysqli_query($conn,$sqlval);
		$filaval=mysqli_fetch_Array($resultadoval);
		
		if($filaval['ci']== NULL && $filaval['nombre']==NULL){
			$sql="insert into $materia5 values ('$cialumno','$alumno')";
			$resultado=mysqli_query($conn,$sql);
			
		$sql2="select * from materias where sigla='$sigla5'";
		$resultado2=mysqli_query($conn,$sql2);
		$fila2=mysqli_fetch_Array($resultado2);
		$ninscritos=$fila2['inscritos'];
		$ncupos=$fila2['cupos'];
		$ninscritos=$ninscritos+1;
		$ncupos=$ncupos-1;
		
		$sql3="UPDATE `materias` SET `cupos`='$ncupos',`inscritos`='$ninscritos' WHERE sigla='$sigla5'";
		$resultado3=mysqli_query($conn,$sql3);
		$sqlnot="insert into bandejaalumno values('','$ci','$nombre','Materia $sigla5 Asignada','$fecha','no')";
		$resultadonot=mysqli_query($conn,$sqlnot);
		header("Location:http://localhost/workflow2/motor.php?flujo=F1&proceso=P8&nombrec=$nombre&rol=K&ci=$cialumno");
		exit;
		}
		else{
			header("Location:http://localhost/workflow2/errores.inc.php");
			exit;
		}
		
		
		
	//$sql="select * from materias";
	//$resultado=mysqli_query($conn,$sql);
	//$fila=mysqli_fetch_array($resultado);
	}
	if(isset($_GET["asignar6"])){
		$sqlval="select * from $materia6 where ci='$cialumno' and nombre='$alumno'";
		$resultadoval=mysqli_query($conn,$sqlval);
		$filaval=mysqli_fetch_Array($resultadoval);
		
		if($filaval['ci']== NULL && $filaval['nombre']==NULL){
			$sql="insert into $materia6 values ('$cialumno','$alumno')";
			$resultado=mysqli_query($conn,$sql);
			
		$sql2="select * from materias where sigla='$sigla6'";
		$resultado2=mysqli_query($conn,$sql2);
		$fila2=mysqli_fetch_Array($resultado2);
		$ninscritos=$fila2['inscritos'];
		$ncupos=$fila2['cupos'];
		$ninscritos=$ninscritos+1;
		$ncupos=$ncupos-1;
		
		$sql3="UPDATE `materias` SET `cupos`='$ncupos',`inscritos`='$ninscritos' WHERE sigla='$sigla6'";
		$resultado3=mysqli_query($conn,$sql3);
		$sqlnot="insert into bandejaalumno values('','$ci','$nombre','Materia $sigla6 Asignada','$fecha','no')";
		$resultadonot=mysqli_query($conn,$sqlnot);
		header("Location:http://localhost/workflow2/motor.php?flujo=F1&proceso=P8&nombrec=$nombre&rol=K&ci=$cialumno");
		exit;
		}
		else{
			header("Location:http://localhost/workflow2/errores.inc.php");
			exit;
		}
		
		
		
	//$sql="select * from materias";
	//$resultado=mysqli_query($conn,$sql);
	//$fila=mysqli_fetch_array($resultado);
	}
	if(isset($_GET["asignar7"])){
		$sqlval="select * from $materia7 where ci='$cialumno' and nombre='$alumno'";
		$resultadoval=mysqli_query($conn,$sqlval);
		$filaval=mysqli_fetch_Array($resultadoval);
		
		if($filaval['ci']== NULL && $filaval['nombre']==NULL){
			$sql="insert into $materia7 values ('$cialumno','$alumno')";
			$resultado=mysqli_query($conn,$sql);
			
		$sql2="select * from materias where sigla='$sigla7'";
		$resultado2=mysqli_query($conn,$sql2);
		$fila2=mysqli_fetch_Array($resultado2);
		$ninscritos=$fila2['inscritos'];
		$ncupos=$fila2['cupos'];
		$ninscritos=$ninscritos+1;
		$ncupos=$ncupos-1;
		
		$sql3="UPDATE `materias` SET `cupos`='$ncupos',`inscritos`='$ninscritos' WHERE sigla='$sigla7'";
		$resultado3=mysqli_query($conn,$sql3);
		$sqlnot="insert into bandejaalumno values('','$ci','$nombre','Materia $sigla7 Asignada','$fecha','no')";
		$resultadonot=mysqli_query($conn,$sqlnot);
		header("Location:http://localhost/workflow2/motor.php?flujo=F1&proceso=P8&nombrec=$nombre&rol=K&ci=$cialumno");
		exit;
		}
		else{
			header("Location:http://localhost/workflow2/errores.inc.php");
			exit;
		}
		
		
		
	//$sql="select * from materias";
	//$resultado=mysqli_query($conn,$sql);
	//$fila=mysqli_fetch_array($resultado);
	
	}
	
if(isset($_GET["Anterior"]))
	{//F1    P4   IF
	$sql="select * from flujoproceso where flujo='$flujo' and proceso='P7'";
	}
	if(isset($_GET["Siguiente"]))
	{
	$sql="select * from flujoproceso where flujo='$flujo' and proceso='P9'";
	}
	

?>