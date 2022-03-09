<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$enlace = mysqli_connect( "db", "user" , "test", "myDb", 3306);
$Consulta = "SELECT * FROM Alumno";

$resultado = mysqli_query($enlace, $Consulta);

while ($Fila = mysqli_fetch_array($resultado)){	
?>
<form action="hola.php" method="GET">
 <input type="hidden" value="<?php echo $Fila['id']; ?>" name="id">
 <input type="submit" value="<?php echo $Fila['nombre'].' '.$Fila['apellido1'].' '.$Fila['apellido2']; ?>">
</form>
<?php
}
mysqli_close($enlace);
?>

</body>
</html>
