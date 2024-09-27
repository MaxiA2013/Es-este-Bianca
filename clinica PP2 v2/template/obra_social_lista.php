<?php
require_once "../modelos/obra_social.php";

$con = new Obra_Social();
$lista = $con->consultarVariasObrasSociales();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modulo Obra Social</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="mt-4 p-5 bg-primary text-white rounded">
        <h1>Bienvenido al Modulo Obra Social</h1>
        <p>Gestioná las obras sociales del sistema agregando, eliminando o modificando.</p>
    </div>
    <a href="../index.php">Regresar al Inicio</a> <!-- Link para la página -->

    <div class="container-fluid">
        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($lista as $obra) { ?>
                                <tr>
                                    <td><?php echo $obra['id_obra_social'] ?></td>
                                    <td><?php echo $obra['nombre_obra_social'] ?></td>
                                    <td><?php echo $obra['detalle'] ?></td>
                                    <td>
                                        <form class="needs-validation" action="../controladores/obra_social_controlador.php" method="post">
                                            <input type="hidden" name="id_obra" value="<?= $obra['id_obra_social'] ?>"> <!-- toma el id de la obra social-->
                                            <input type="hidden" name="accion" value="baja"> <!-- se le da un valor -->
                                            <button type="submit" class="btn btn-danger">Borrar</button> <!-- se envían mediante el botón hacia el controlador -->
                                        </form>
                                    </td>
                                    <td>
                                        <!-- Botón para abrir el modal y modificar -->
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modificarModal" 
                                            data-id="<?php echo $obra['id_obra_social']; ?>" 
                                            data-nombre="<?php echo $obra['nombre_obra_social']; ?>" 
                                            data-descripcion="<?php echo $obra['detalle']; ?>">
                                            Modificar
                                        </button>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <div class="col">
                <form method="POST" action="../controladores/obra_social_controlador">
                    <input type="hidden" name="action" value="registro" /> 
                    <div class="mb-3 mt-3">
                        <label for="nombre_obra_social" class="form-label">nombre de la obra social</label>
                        <input type="text" class="form-control" id="nombre_obra_social" placeholder="Ingrese el Nombre de la obra social" name="nombre_obra_social">
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="descripcion_obra" class="form-label">Descripción</label>
                        <input type="text" class="form-control" id="descripcion_obra" placeholder="Ingresar una descripcion" name="descripcion_obra">
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal para modificar -->
    <div class="modal fade" id="modificarModal" tabindex="-1" aria-labelledby="modificarModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modificarModalLabel">Modificar Obra Social</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="formModificar" action="../controladores/obra_social_controlador.php" method="post">
                        <input type="hidden" id="id_obra" name="id_obra"> <!-- Campo oculto para el ID de la obra -->
                        <div class="mb-3">
                            <label for="nombre_obra" class="form-label">Nombre de la Obra Social</label>
                            <input type="text" class="form-control" id="nombre_obra" name="nombre_obra" required>
                        </div>
                        <div class="mb-3">
                            <label for="detalle" class="form-label">Descripción</label>
                            <input type="text" class="form-control" id="detalle" name="detalle" required>
                        </div>
                        <input type="hidden" name="accion" value="actualizacion">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary" form="formModificar">Guardar cambios</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script>
        // Cuando se abre el modal, cargamos los datos en los campos
        const modificarModal = document.getElementById('modificarModal');
        modificarModal.addEventListener('show.bs.modal', event => {
            // Botón que disparó el modal
            const button = event.relatedTarget;
            
            // Extraemos la información de los atributos data-
            const id = button.getAttribute('data-id');
            const nombre = button.getAttribute('data-nombre');
            const descripcion = button.getAttribute('data-descripcion');

            // Cargamos los valores en los inputs del modal
            document.getElementById('id_obra').value = id;
            document.getElementById('nombre_obra_social').value = nombre;
            document.getElementById('detalle').value = descripcion;
        });
    </script>
</body>

</html>
