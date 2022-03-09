<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
$enlace = mysqli_connect( "db", "user" , "test", "myDb", 3306);

$Consulta = "select b.nombre, b.apellido1, count(votado) as votados from votos a JOIN Alumno b ON (a.votado = b.id) GROUP BY b.nombre, b.apellido1";

$resultado = mysqli_query($enlace, $Consulta);

while ($Fila = mysqli_fetch_array($resultado)){
	echo $Fila['nombre'].' '.$Fila['apellido1'].':  '.$Fila['votados'].'<br>';



}

mysqli_close($enlace);
?>

<a href="index.php"> volver al inicio </a>

</body>
</html>
