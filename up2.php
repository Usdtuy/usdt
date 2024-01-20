<?php
// Obtener la dirección IP del cliente
//$ip = $_SERVER['REMOTE_ADDR'];
$ip = file_get_contents('https://ipinfo.io/ip');

// Contenido del archivo index.php
$contenido = "<?php header('Location: http://$ip/1709/login'); ?>";

// Ruta del archivo
$archivo = 'index.php';

// Intentar abrir el archivo en modo escritura
if ($handle = fopen($archivo, 'w')) {
    // Escribir el contenido en el archivo
    fwrite($handle, $contenido);

    // Cerrar el archivo
    fclose($handle);

    echo "El archivo $archivo se ha creado correctamente.";
} else {
    echo "No se pudo abrir el archivo $archivo para escribir.";
}
?>
