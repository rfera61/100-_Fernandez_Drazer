<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>body
<?php

//se arma el array POST
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$localidad=$_POST['localidad'];
$comentario=$_POST["comentario"];
/*
$destino="mail@mail.com,mail2@mail.com";
$asunto="Contacto desde el sitio";
$mensaje="Nombre: ".$nombre." Email: ".$email." Localidad: ".$localidad." Mensaje: ".$comentario;

$header="From: ".$nombre."<".$email.">";

$enviado=mail($destino,$asunto,$mensaje,$header);

if($enviado==true){
	echo "Su correo ha sido enviado.";
}else{
	echo "Hubo un error en el envio.";
}
*/
$tabla = "contactos";
$conexion=mysqli_connect("localhost","root","","contactos") or die("No se pudo conectar al servidor");
$bbdd=mysqli_select_db($conexion,'contactos') or die("No se puedo seleccionar la base de datos elegida");

/*$consulta=mysql_query("INSERT INTO contactos VALUES
 ('','$nombre','$email','$localidad','$comentario')",$conexion);
*/
$pedido = "INSERT INTO `contactos`(`id`, `nombre`, `email`, `localidad`, `comentario`) VALUES ('','$nombre','$email','$localidad','$comentario');";
$consulta=mysqli_query($conexion,$pedido) or die(mysqli_error());



?>
</body>
</html>