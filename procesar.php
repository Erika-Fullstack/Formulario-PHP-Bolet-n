<?php

$nombre = $_POST['name'];
$apellidos = $_POST['apellidos'];
$mail = $_POST['mail'];
$contraseña = $_POST['contrase�1a'];
$sexo = $_POST['sexo'];
$nivel = $_POST['nivel'];
$intereses = $_POST['intereses'];
$dia = $_POST['dia'];
$mensaje = $_POST['mensaje'];

echo "<h2>Tus Datos de suscripción:</h2>";
echo "<p>Estos son los datos que nos has enviado:</p>";
echo "<p><u><b>Nombre:</b></u> $nombre </p>";
echo "<p><u><b>Apellidos:</b></u> $apellidos </p>";
echo "<p><u><b>E-mail:</b></u> $mail </p>";
echo "<p><u><b>contraseña:</b></u> $contraseña </p>";
echo "<p><u><b>Sexo:</b></u> $sexo </p>";
echo "<p><u><b>Estudios:</b></u> $nivel </p>";
echo "<p><u><b>Aficiones:</b></u> </p>";

echo "<ul>";
foreach ($intereses as $interes) {
    echo "<li>$interes</li>";
}
echo "</ul>";

echo "<p><u><b>Día de la semana:</b></u> $dia </p>";
echo "<p><u><b>Tu comentario:</b></u> $mensaje </p>";

echo "Comprueba tus datos antes de enviarlos, si no están bien vuelve a escribirlos. <br>";

echo 'Los datos son correctos: <a href="http://localhost:8080/erika/ejercicioformulario/procesar.php">Enviar</a> <br>';

echo 'Los datos no son correctos: <a href="http://localhost:8080/erika/ejercicioformulario/ejformulario.html">Volver a escribirlos</a> <br>';

?>