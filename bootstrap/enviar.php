<?php 
	sleep(1);
	$cadenanom=array();
	$cadenaval=array();
	$nombrescampos="";
	$valorescampos="";
	foreach ($_POST as $name => $valores) {
		$cadenanom[]=$name;
		$cadenaval[]="'".$valores."'";
	}
	// var_dump($cadenanom);
	// var_dump($cadenaval);
	$nombrescampos=implode($cadenanom,",");
	$valorescampos=implode($cadenaval,",");
	$consulta="INSERT into persona(".$nombrescampos.")values(".$valorescampos.")";
	// $conectar=new mysqli(,,,"base");
	// $conectar->query($consulta)or die(mysqli_error());
	echo "$consulta";
 
 ?>