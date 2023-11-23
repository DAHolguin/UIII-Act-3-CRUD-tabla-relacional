<?php
include "../config/conexion.php";

$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$id_empl = $_POST['id_empl'];
$id_prod = $_POST['id_prod'];
$id_cli = $_POST['id_cli'];
$total = $_POST['total'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];

$sql = "INSERT INTO ventas (fecha, hora, id_empl, id_prod, id_cli, total, cantidad, precio)
    VALUES ('$fecha', '$hora', '$id_empl', '$id_prod', '$id_cli', '$total', '$cantidad', '$precio')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/categorias/index.php");
} else {
    echo "Datos no insertados";
}
?>
