<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Currículums</title>
    <!-- Agregamos el enlace a Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Lista de Currículums</h1>

        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr class="text-center">
                    <th>Nombre</th>
                    <th>Título Profesional</th>
                    <th>Ver Detalle</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($curriculums) && is_array($curriculums)): ?>
                    <?php foreach ($curriculums as $curriculum): ?>
                        <tr>
                            <td style="line-height: 38px;"><?= esc($curriculum['nombre_completo']) ?></td>
                            <td style="line-height: 38px;"><?= esc($curriculum['titulo']) ?></td>
                            <td class="text-center">
                                <a href="<?= base_url('curriculum/detalle/'.$curriculum['id']); ?>" class="btn btn-primary px-4">Ver</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="text-center">No se encontraron currículums</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    
    <div class="d-flex justify-content-center gap-3 mt-lg-5">
        <a href="<?= base_url('/curriculum') ?>" class="btn btn-dark px-4">Nuevo Curriculum</a>
        <a href="<?= base_url('/') ?>" class="btn btn-outline-dark px-4">Regresar al Inicio</a>
    </div>

    <!-- Agregamos los scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>