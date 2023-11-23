<?php
include_once("../../config/conexion.php");
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar Auto</title>
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
                        <h5 class="card-title text-center">REGISTRAR AUTO</h5>
                        <form action="../../CRUDP/insertarDatos.php" method="POST">
                            <div class="mb-3">
                                <label for="modelo" class="form-label">Modelo</label>
                                <input type="text" class="form-control" id="modelo" name="modelo"
                                    placeholder="Modelo del auto" required>
                            </div>
                            <div class="mb-3">
                                <label for="años" class="form-label">Año</label>
                                <input type="text" class="form-control" id="año" name="año"
                                    placeholder="Año de fabricación" required>
                            </div>
                            <div class="mb-3">
                                <label for="color" class="form-label">Color</label>
                                <input type="text" class="form-control" name="color" id="color"
                                    placeholder="Color del auto" required>
                            </div>
                            <div class="mb-3">
                                <label for="pasajeros" class="form-label">Pasajeros</label>
                                <input type="number" class="form-control" name="pasajeros" id="pasajeros"
                                    placeholder="Número de pasajeros" required>
                            </div>
                            <div class="mb-3">
                                <label for="cilindros" class="form-label">Cilindros</label>
                                <input type="number" class="form-control" name="cilindros" id="cilindros"
                                    placeholder="Número de cilindros" required>
                            </div>
                            <div class="mb-3">
                                <label for="transmicion" class="form-label">Transmisión</label>
                                <input type="text" class="form-control" name="transmicion" id="transmicion"
                                    placeholder="Tipo de transmisión" required>
                            </div>
                            <div class="mb-3">
                                <label for="velocidad" class="form-label">Velocidad</label>
                                <input type="text" class="form-control" name="velocidad" id="velocidad"
                                    placeholder="Velocidad máxima" required>
                            </div>
                            <div class="mb-3">
                                <label for="m_serie" class="form-label">Número de Serie</label>
                                <input type="text" class="form-control" name="m_serie" id="m_serie"
                                    placeholder="Número de serie del auto" required>
                            </div>
                            <div class="text-center">
                                <a href="../autos/index.php" type="submit"
                                    class="btn btn-outline-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-outline-primary">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/fontawesome.js"></script>

</body>

</html>