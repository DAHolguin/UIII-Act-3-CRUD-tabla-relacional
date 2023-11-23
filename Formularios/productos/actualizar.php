<?php
include_once("../../config/conexion.php");

// Verificar si se recibió un ID válido
if (isset($_REQUEST['id_autos']) && is_numeric($_REQUEST['id_autos'])) {
    $id_autos = $_REQUEST['id_autos'];

    // Obtener datos del auto por ID
    $sql = "SELECT * FROM autos WHERE id_autos = $id_autos";
    $resultado = $conexion->query($sql);

    // Verificar si se encontraron resultados
    if ($resultado->num_rows > 0) {
        $row = $resultado->fetch_assoc();
    } else {
        // Manejar el caso en el que no se encuentren resultados
        echo "Auto no encontrado";
        exit;
    }
} else {
    // Manejar el caso en el que no se proporcionó un ID válido
    echo "ID de auto no válido";
    exit;
}
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar</title>
    <link rel="stylesheet" href="<?php echo base_url; ?>css/bootstrap.min.css">
</head>

<body>

    <!-- CODIGO DE NAVBAR RESPONSIVA -->
    <header>
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand" href="<?php echo base_url; ?>">
                    <img src="<?php echo base_url; ?>img/logo.png" alt="logo" height="55" width="115">
                </a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mi-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mi-menu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/productos/index.php">AUTOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                                href="<?php echo base_url; ?>Formularios/categorias/index.php">VENTAS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/marcas/index.php">CLIENTES</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- FIN CODIGO DE NAVBAR RESPONSIVA -->

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">ACTUALIZAR AUTO</h5>
                        <form action="../../CRUDP/editarDatos.php" method="post">
                            <input type="hidden" class="form-control" name="id_autos" id="id_autos"
                                value="<?php echo $row['id_autos'] ?>">

                            <div class="mb-3">
                                <label for="modelo" class="form-label">Modelo del Auto</label>
                                <input type="text" class="form-control" id="modelo" name="modelo"
                                    placeholder="Modelo del auto" value="<?php echo $row['modelo'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="años" class="form-label">Años</label>
                                <input type="text" class="form-control" id="año" name="año"
                                    placeholder="Año de fabricación" value="<?php echo $row['año'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="color" class="form-label">Color</label>
                                <input type="text" class="form-control" name="color" id="color"
                                    placeholder="Color del auto" value="<?php echo $row['color'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="pasajeros" class="form-label">Pasajeros</label>
                                <input type="number" class="form-control" name="pasajeros" id="pasajeros"
                                    placeholder="Número de pasajeros" value="<?php echo $row['pasajeros'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="cilindros" class="form-label">Cilindros</label>
                                <input type="number" class="form-control" name="cilindros" id="cilindros"
                                    placeholder="Número de cilindros" value="<?php echo $row['cilindros'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="transmicion" class="form-label">Transmisión</label>
                                <input type="text" class="form-control" name="transmicion" id="transmicion"
                                    placeholder="Tipo de transmisión" value="<?php echo $row['transmicion'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="velocidad" class="form-label">Velocidad</label>
                                <input type="text" class="form-control" name="velocidad" id="velocidad"
                                    placeholder="Velocidad máxima" value="<?php echo $row['velocidad'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="m_serie" class="form-label">Número de Serie</label>
                                <input type="text" class="form-control" name="m_serie" id="m_serie"
                                    placeholder="Número de serie del auto" value="<?php echo $row['m_serie'] ?>">
                            </div>
                            <div class="text-center">
                                <a href="../autos/index.php" type="submit"
                                    class="btn btn-outline-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-outline-primary">Actualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url; ?>js/bootstrap.min.js"></script>
    <script src="../../js/fontawesome.js"></script>

</body>

</html>