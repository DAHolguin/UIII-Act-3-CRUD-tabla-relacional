<?php
include_once("../../config/conexion.php");
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Autos</title>
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
    <div class="container-lg mt-5">
        <a href="crear.php" type="button" class="btn btn-outline-primary mb-3">
            <i class="fa-solid fa-cart-plus fa-beat"></i>
            NUEVO
        </a>
        <h1 class="text-center bg-danger text-light">LISTADO DE AUTOS</h1>
        <div class="table-responsive-sm">
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">MODELO</th>
                        <th scope="col">AÑO</th>
                        <th scope="col">COLOR</th>
                        <th scope="col">PASAJEROS</th>
                        <th scope="col">CILINDROS</th>
                        <th scope="col">TRANSMICION</th>
                        <th scope="col">VELOCIDAD</th>
                        <th scope="col">NUM. SERIE</th>
                        <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = $conexion->query("SELECT * FROM autos");
                    while ($resultado = $sql->fetch_assoc()) {
                        ?>
                        <tr>
                            <th scope="row">
                                <?php echo $resultado['id_autos']; ?>
                            </th>
                            <td>
                                <?php echo $resultado['modelo']; ?>
                            </td>
                            <td>
                                <?php echo $resultado['año']; ?>
                            </td>
                            <td>
                                <?php echo $resultado['color']; ?>
                            </td>
                            <td>
                                <?php echo $resultado['pasajeros']; ?>
                            </td>
                            <td>
                                <?php echo $resultado['cilindros']; ?>
                            </td>
                            <td>
                                <?php echo $resultado['transmicion']; ?>
                            </td>
                            <td>
                                <?php echo $resultado['velocidad']; ?>
                            </td>
                            <td>
                                <?php echo $resultado['m_serie']; ?>
                            </td>
                            <td>
                                <a href="<?php echo base_url; ?>Formularios/productos/actualizar.php?id_autos=<?php echo $resultado['id_autos']; ?>"
                                    class="btn btn-outline-warning">
                                    <i class="fa-solid fa-pen-to-square fa-beat"></i>
                                </a>
                                <a href="<?php echo base_url; ?>CRUDP/eliminarDatos.php?id_autos=<?php echo $resultado['id_autos']; ?>"
                                    class="btn btn-outline-danger">
                                    <i class="fa-solid fa-trash fa-beat"></i>
                                </a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="<?php echo base_url; ?>js/bootstrap.min.js"></script>
    <script src="<?php echo base_url; ?>js/all.min.js"></script>

</body>

</html>