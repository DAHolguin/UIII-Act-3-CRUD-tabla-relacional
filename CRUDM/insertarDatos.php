<?php
include "../config/conexion.php";

$nombre = $_POST['nombre'];
$apellidoP = $_POST['apellidoP'];
$apellidoM = $_POST['apellidoM'];
$curp = $_POST['curp'];
$edad = $_POST['edad'];
$metodo_de_pago = $_POST['metodo_de_pago'];
$domicilio = $_POST['domicilio'];
$telefono = $_POST['telefono'];

$sql = "INSERT INTO cliente (nombre, apellidoP, apellidoM, curp, edad, metodo_de_pago, domicilio, telefono)
    VALUES ('$nombre', '$apellidoP', '$apellidoM', '$curp', $edad, '$metodo_de_pago', '$domicilio', '$telefono')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/marcas/index.php");
} else {
    echo "Datos no insertados";
}
?>
