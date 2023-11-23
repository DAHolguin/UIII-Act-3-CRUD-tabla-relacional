<?php
include_once("../config/conexion.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id_autos = $_POST['id_autos'];
    $modelo = $_POST['modelo'];
    $año = $_POST['año'];
    $color = $_POST['color'];
    $pasajeros = $_POST['pasajeros'];
    $cilindros = $_POST['cilindros'];
    $transmicion = $_POST['transmicion'];
    $velocidad = $_POST['velocidad'];
    $m_serie = $_POST['m_serie'];

    // Actualizar los datos en la base de datos
    $consulta = "UPDATE autos SET 
                modelo = '$modelo',
                año = '$año',
                color = '$color',
                pasajeros = '$pasajeros',
                cilindros = '$cilindros',
                transmicion = '$transmicion',
                velocidad = '$velocidad',
                m_serie = '$m_serie'
                WHERE id_autos = $id_autos";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("Location: ../Formularios/productos/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
} else {
    // Redireccionar a alguna página si la solicitud no es POST
    header("Location: ../Formularios/autos/index.php");
    exit();
}

mysqli_close($conexion);
?>
