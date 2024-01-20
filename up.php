<?php
// Verificar la autenticación y autorización aquí

// Ruta del archivo a eliminar
$archivo_a_eliminar = 'index.php';

// Verificar si el archivo existe antes de intentar eliminarlo
if (file_exists($archivo_a_eliminar)) {
    // Intentar eliminar el archivo
    if (unlink($archivo_a_eliminar)) {
        echo 'Archivo eliminado con éxito.';
        header('Location: up2.php');
    } else {
        echo 'Error al intentar eliminar el archivo.';
    }
} else {
    echo 'El archivo no existe.';
}
?>
