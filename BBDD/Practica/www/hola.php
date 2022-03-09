<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
$id_votante = $_REQUEST['id']; 
$enlace = mysqli_connect( "db", "user" , "test", "myDb", 3306);

$Consulta = "SELECT * FROM Alumno WHERE Candidato = 1";

$resultado = mysqli_query($enlace, $Consulta);

while ($Fila = mysqli_fetch_array($resultado)){
	echo $Fila['nombre'].' '.$Fila['apellido1'].' '.$Fila['apellido2'];
	
	?>
	<form action="votar.php" method="GET">
 <input type="hidden" value="<?php echo $Fila['id']; ?>" name="id">
 <input type="hidden" value="<?php echo $id_votante; ?>" name="id2">
 <input type="submit" value="votar">
</form>
<?php
}

mysqli_close($enlace);
?>


</body>
</html>
