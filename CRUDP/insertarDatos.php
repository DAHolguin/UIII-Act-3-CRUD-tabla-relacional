<?php
include "../config/conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $modelo = $_POST['modelo'];
    $año = $_POST['año'];
    $color = $_POST['color'];
    $pasajeros = $_POST['pasajeros'];
    $cilindros = $_POST['cilindros'];
    $transmicion = $_POST['transmicion'];
    $velocidad = $_POST['velocidad'];
    $m_serie = $_POST['m_serie'];

    // Consulta SQL para insertar datos en la tabla 'autos'
    $sql = "INSERT INTO autos (modelo, año, color, pasajeros, cilindros, transmicion, velocidad, m_serie)
            VALUES ('$modelo', '$año', '$color', '$pasajeros', '$cilindros', '$transmicion', '$velocidad', '$m_serie')";

    // Ejecutar la consulta
    $resultado = mysqli_query($conexion, $sql);

    // Verificar si la inserción fue exitosa
    if ($resultado) {
        header("location:../Formularios/productos/index.php");
    } else {
        echo "Error al insertar datos: " . mysqli_error($conexion);
    }
}

include "../config/conexion.php";
?>
