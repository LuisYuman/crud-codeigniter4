<?php
<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Alumno</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navbar de navegación -->
    <nav>
        <div class="nav-wrapper blue">
            <a href="#" class="brand-logo" style="margin-left: 15px;">Gestión</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="<?= site_url('alumnos') ?>">Alumnos</a></li>
                <li><a href="<?= site_url('cursos') ?>">Cursos</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
    <h4>Agregar Alumno</h4>
    <form method="post" action="<?= site_url('alumnos/store') ?>">
        <div class="input-field">
            <input type="text" id="nombre" name="nombre" required>
            <label for="nombre">Nombre</label>
        </div>
        <div class="input-field">
            <input type="text" id="apellido" name="apellido" required>
            <label for="apellido">Apellido</label>
        </div>
        <div class="input-field">
            <input type="text" id="direccion" name="direccion">
            <label for="direccion">Dirección</label>
        </div>
        <div class="input-field">
            <input type="text" id="movil" name="movil">
            <label for="movil">Móvil</label>
        </div>
        <div class="input-field">
            <input type="email" id="email" name="email">
            <label for="email">Email</label>
        </div>
        <button class="btn waves-effect" type="submit">Guardar</button>
        <a class="btn-flat" href="<?= site_url('alumnos') ?>">⬅️ Volver</a>
    </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() { M.updateTextFields(); });
    </script>
</body>
</html>
