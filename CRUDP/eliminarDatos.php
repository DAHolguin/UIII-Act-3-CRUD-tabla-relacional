<?php
include_once("../config/conexion.php");

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id_autos'])) {
    $id_autos = $_GET['id_autos'];

    // Consulta para eliminar el registro de la base de datos
    $consulta = "DELETE FROM autos WHERE id_autos = $id_autos";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la eliminación exitosa
        header("Location: ../Formularios/productos/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la eliminación falla
        echo "Error al eliminar el registro: " . mysqli_error($conexion);
    }
} else {
    // Redireccionar a alguna página si el ID no está definido o la solicitud no es GET
    header("Location: ../Formularios/proveedores/index.php");
    exit();
}

mysqli_close($conexion);
?>
