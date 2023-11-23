<?php
include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id_cliente = $_POST['id_cliente'];
    $nombre = $_POST['nombre'];
    $apellidoP = $_POST['apellidoP'];
    $apellidoM = $_POST['apellidoM'];
    $curp = $_POST['curp'];
    $edad = $_POST['edad'];
    $metodo_de_pago = $_POST['metodo_de_pago'];
    $domicilio = $_POST['domicilio'];
    $telefono = $_POST['telefono'];

    // Actualizar los datos en la base de datos
    $consulta = "UPDATE cliente SET 
                nombre = '$nombre',
                apellidoP = '$apellidoP',
                apellidoM = '$apellidoM',
                curp = '$curp',
                edad = '$edad',
                metodo_de_pago = '$metodo_de_pago',
                domicilio = '$domicilio',
                telefono = '$telefono'
                WHERE id_cliente = $id_cliente";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/marcas/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
?>
