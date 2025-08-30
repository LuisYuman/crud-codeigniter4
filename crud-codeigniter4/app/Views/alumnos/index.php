<!DOCTYPE html>
<html>
<head>
    <title>Lista de Alumnos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body>
    <div class="container">
    <h4>Alumnos</h4>
    <a class="btn waves-effect" href="<?= site_url('alumnos/create') ?>">➕ Nuevo Alumno</a>
    <table class="striped highlight responsive-table">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Dirección</th>
            <th>Móvil</th>
            <th>Email</th>
            <th>Detalle</th>
            <th>Inactivo</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($alumnos as $alumno): ?>
        <tr>
            <td><?= $alumno['alumno'] ?></td>
            <td><?= $alumno['nombre'] ?></td>
            <td><?= $alumno['apellido'] ?></td>
            <td><?= $alumno['direccion'] ?></td>
            <td><?= $alumno['movil'] ?></td>
            <td><?= $alumno['email'] ?></td>
            <td><i class="material-icons">list</i></td>
            <td><?= $alumno['inactivo'] ? 'Sí' : 'No' ?></td>
            <td>
                <a class="btn-small blue" href="<?= site_url('alumnos/edit/' . $alumno['alumno']) ?>">✏️ Editar</a>
                <a class="btn-small red" href="<?= site_url('alumnos/delete/' . $alumno['alumno']) ?>" onclick="return confirm('¿Seguro que quieres eliminar?')">🗑️ Eliminar</a>
                <a class="btn-small modal-trigger" href="<?= site_url('alumnos/asignarCursos/' . $alumno['alumno']) ?>">
                    <i class="material-icons <?= $alumno['tiene_cursos'] ? 'green-text' : 'grey-text' ?>">assignment</i>
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
