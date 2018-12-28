<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Víctor Moreno Marchal" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="En esta página se releva los actos institucionales que ofrecen y tienen la UOC, así como reflejar sus respectivas misiones." />
	<meta name="keywords" content="UOC, Organizaciones, instituciones, articulo, diseño, web, honoris, causa, doctorado, pec, Internet, academia, postgrado, lecciones, inagural, iangurales, digital, " />
	<title>Actos de graduación</title>
</head>

<body>
<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$para = 'vicmormar2@uoc.edu';
$titulo = 'Asunto:';
$header = 'From: ' . $email;
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";
  
if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript'>
alert('Mensaje enviado, muchas gracias.');
window.location.href = 'http://filmrebirth.hol.es/contacto.html';
</script>";
} else {
echo 'Falló el envio';
}
}
?>

</body>
</html>