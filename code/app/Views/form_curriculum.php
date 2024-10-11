<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Currículum Vitae</title>
    <!-- Agregamos el enlace a Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="text-center">
        <a href="<?= base_url('/') ?>" class="btn btn-dark px-4 m-4">Regresar al Inicio</a>
    </div>

    <div class="container mt-3 w-50 alert alert-light p-5">
        <h1>Datos del Currículum Vitae</h1>

        <!-- Mensajes de validación -->
        <?php if (isset($validation)): ?>
            <div class="alert alert-danger">
                <?= $validation->listErrors() ?>
            </div>
        <?php endif; ?>

        <!-- Formulario de currículum -->
        <form action="curriculum/store" method="post" class="mt-4">
            <?= csrf_field() ?>

            <div class="mb-3">
                <label for="nombre_completo" class="form-label">Nombre completo:</label>
                <input type="text" class="form-control" name="nombre_completo" id="nombre_completo" required>
            </div>

            <div class="mb-3">
                <label for="correo" class="form-label">Correo electrónico:</label>
                <input type="email" class="form-control" name="correo" id="correo" required>
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono:</label>
                <input type="number" class="form-control" name="telefono" id="telefono" required>
            </div>

            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección:</label>
                <input type="text" class="form-control" name="direccion" id="direccion" required>
            </div>

            <div class="mb-3">
                <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento:</label>
                <input type="date" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" required>
            </div>

            <div class="mb-3">
                <label for="titulo" class="form-label">Título profesional:</label>
                <input type="text" class="form-control" name="titulo" id="titulo" required>
            </div>

            <div class="mb-3">
                <label for="experiencia" class="form-label">Experiencia laboral:</label>
                <textarea class="form-control" name="experiencia" id="experiencia" rows="4" required></textarea>
            </div>

            <div class="mb-3">
                <label for="habilidades" class="form-label">Habilidades:</label>
                <textarea class="form-control" name="habilidades" id="habilidades" rows="4" required></textarea>
            </div>

            <div class="mb-3">
                <label for="educacion" class="form-label">Educación:</label>
                <textarea class="form-control" name="educacion" id="educacion" rows="4" required></textarea>
            </div>

            <div class="mb-3">
                <label for="idiomas" class="form-label">Idiomas:</label>
                <textarea class="form-control" name="idiomas" id="idiomas" rows="4" required></textarea>
            </div>
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-lg btn-primary px-4 py-2">Enviar</button>
            </div>
        </form>
    </div>

    <!-- Agregamos los scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>