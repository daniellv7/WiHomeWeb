<?php  

// Llamando a los campos
$nombre = $_POST['fullname'];
$correo = $_POST['email'];
$telefono = $_POST['tel'];
$mensaje = $_POST['subject'];

// Datos para el correo
$destinatario = "daniellv1992@gmail.com";
$asunto = "Contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje: $mensaje";

// Enviando Mensaje
mail($destinatario, $asunto, $carta);
//header('Location:mensaje-de-envio.html');

?>