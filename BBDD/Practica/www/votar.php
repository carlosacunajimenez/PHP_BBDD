<?php
$id_votante = $_REQUEST['id2'];
$id_votado = $_REQUEST['id'];

$enlace = mysqli_connect( "db", "root" , "test", "myDb", 3306);

$Consulta = "INSERT INTO votos (votante,votado, IP, fecha_horas) VALUES (".$id_votante.", ".$id_votado.", '".$_SERVER['REMOTE_ADDR']."' , now())";

$resultado = mysqli_query($enlace, $Consulta);

header('Location: resultado.php');
?>
