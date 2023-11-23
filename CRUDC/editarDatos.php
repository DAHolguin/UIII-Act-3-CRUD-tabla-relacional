<?php
include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id_ventas = $_POST['id_ventas'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $id_empl = $_POST['id_empl'];
    $id_prod = $_POST['id_prod'];
    $id_cli = $_POST['id_cli'];
    $total = $_POST['total'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];

    // Actualizar los datos en la base de datos
    $consulta = "UPDATE ventas SET fecha = '$fecha', hora = '$hora', id_empl = '$id_empl', id_prod = '$id_prod', id_cli = '$id_cli', total = '$total', cantidad = '$cantidad', precio = '$precio' WHERE id_ventas = $id_ventas";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/categorias/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
?>
