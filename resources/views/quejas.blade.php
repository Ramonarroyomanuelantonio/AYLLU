<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Reclamaciones</title>
    <link rel="stylesheet" href="quejas.css">
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=TU_API_KEY"></script>
</head>
<body>
<div class="container">
<h1>Libro de Reclamaciones</h1>
    <form action="procesar_reclamacion.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Datos del Cliente</legend>
            <label for="nombre_cliente">Nombre del Cliente:</label>
            <input type="text" id="nombre_cliente" name="nombre_cliente" required><br>

            <label for="dni_cliente">DNI / NIF del Cliente:</label>
            <input type="text" id="dni_cliente" name="dni_cliente" required><br>

            <label for="direccion_cliente">Dirección del Cliente:</label>
            <input type="text" id="direccion_cliente" name="direccion_cliente" required><br>

            <label for="telefono_cliente">Teléfono del Cliente:</label>
            <input type="tel" id="telefono_cliente" name="telefono_cliente" required><br>

            <label for="correo_cliente">Correo Electrónico del Cliente:</label>
            <input type="email" id="correo_cliente" name="correo_cliente" required><br>

            <label for="archivo_adjunto">Archivo Adjunto:</label>
            <input type="file" id="archivo_adjunto" name="archivo_adjunto" required><br>
        </fieldset>

        <fieldset>
            <legend>Descripción de la Reclamación</legend>
            <label for="descripcion_reclamacion">Descripción detallada de la reclamación:</label><br>
            <textarea id="descripcion_reclamacion" name="descripcion_reclamacion" rows="4" cols="50" required></textarea>
        </fieldset>

        <input type="submit" value="Enviar Reclamación">
    </form>
</div>
</body>
</html>