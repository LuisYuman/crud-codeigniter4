<!DOCTYPE html>
<html>
<head>
    <title>Editar Alumno</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
    <h4>Editar Alumno</h4>
    <form method="post" action="<?= site_url('alumnos/update/' . $alumno['alumno']) ?>">
        <div class="input-field">
            <input type="text" id="nombre" name="nombre" value="<?= $alumno['nombre'] ?>" required>
            <label class="active" for="nombre">Nombre</label>
        </div>
        <div class="input-field">
            <input type="text" id="apellido" name="apellido" value="<?= $alumno['apellido'] ?>" required>
            <label class="active" for="apellido">Apellido</label>
        </div>
        <div class="input-field">
            <input type="text" id="direccion" name="direccion" value="<?= $alumno['direccion'] ?>">
            <label class="active" for="direccion">Dirección</label>
        </div>
        <div class="input-field">
            <input type="text" id="movil" name="movil" value="<?= $alumno['movil'] ?>">
            <label class="active" for="movil">Móvil</label>
        </div>
        <div class="input-field">
            <input type="email" id="email" name="email" value="<?= $alumno['email'] ?>">
            <label class="active" for="email">Email</label>
        </div>
        <p>
            <label>
                <input type="checkbox" name="inactivo" value="1" <?= $alumno['inactivo'] ? 'checked' : '' ?>>
                <span>Inactivo</span>
            </label>
        </p>
        <button class="btn waves-effect" type="submit">Actualizar</button>
        <a class="btn-flat" href="<?= site_url('alumnos') ?>">⬅️ Volver</a>
    </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() { M.updateTextFields(); });
    </script>
</body>
</html>
