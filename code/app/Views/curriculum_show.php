<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle Currículum</title>
    <!-- Agregamos el enlace a Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Detalle Curriculum</h1>

        <table class="table table-bordered table-striped">
            <tbody>
                <?php if (!empty($curriculum)): ?>
                    <tr>
                        <td>Nombre Completo</td>
                        <td><?= esc($curriculum['nombre_completo']) ?></td>
                    </tr>
                    <tr>
                        <td>Correo</td>
                        <td><?= esc($curriculum['correo']) ?></td>
                    </tr>
                    <tr>
                        <td>Teléfono</td>
                        <td><?= esc($curriculum['telefono']) ?></td>
                    </tr>
                    <tr>
                        <td>Dirección</td>
                        <td><?= esc($curriculum['direccion']) ?></td>
                    </tr>
                    <tr>
                        <td>Fecha de Nacimiento</td>
                        <td><?= esc($curriculum['fecha_nacimiento']) ?></td>
                    </tr>
                    <tr>
                        <td>Titulo</td>
                        <td><?= esc($curriculum['titulo']) ?></td>
                    </tr>
                    <tr>
                        <td>Experiencia</td>
                        <td><?= esc($curriculum['experiencia']) ?></td>
                    </tr>
                    <tr>
                        <td>Habilidades</td>
                        <td><?= esc($curriculum['habilidades']) ?></td>
                    </tr>
                    <tr>
                        <td>Educación</td>
                        <td><?= esc($curriculum['educacion']) ?></td>
                    </tr>
                    <tr>
                        <td>Idiomas</td>
                        <td><?= esc($curriculum['idiomas']) ?></td>
                    </tr>

                <?php else: ?>
                    <tr>
                        <td colspan="4" class="text-center">No hay currículums con el ID solicitado</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center gap-3 mt-4">
        <a href="<?= base_url('/curriculum/lista') ?>" class="btn btn-dark px-4">Lista Curriculums</a>
        <a href="<?= base_url('/') ?>" class="btn btn-outline-dark px-4">Regresar al Inicio</a>
    </div>

    <!-- Agregamos los scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>