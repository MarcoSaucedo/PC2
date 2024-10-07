<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos</title>
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Archivo CSS -->   
    <link rel="stylesheet" href="{{ asset('css/alumnos.css') }}">     
    <!-- Incluye el JavaScript de Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
   
<body>
    <div class="container mt-2" id="caja">
        <h2 class="text-center">CATÁLOGO DE ALUMNOS</h2><br><br>
        <div class="d-flex gap-4 mb-3">
            <button type="button" class="btn btn-primary" onclick="Buscar()">Buscar</button>
            <button type="button" class="btn btn-primary">Agregar Nuevo</button>
        </div>
        <form>
            <div class="mb-4">
                <input type="text" class="form-control" id="input1" placeholder="No Registro" disabled>
            </div>
            <div class="mb-4">
                <input type="text" class="form-control" id="input2" placeholder="Clave Unica">
            </div>
            <div class="mb-4">
                <input type="text" class="form-control" id="input3" placeholder="Nombre del Alumno">
            </div>
            <div class="mb-4">
                <input type="text" class="form-control" id="input3" placeholder="Apellido Paterno">
            </div>
            <div class="mb-4">
                <input type="text" class="form-control" id="input3" placeholder="Apellido Materno">
            </div>
            <div class="mb-4">
                <input type="text" class="form-control" id="input4" placeholder="Correo">
            </div>
            <div class="mb-4">
                <input type="text" class="form-control" id="input5" placeholder="Clave Carrera">
            </div>
            <div class="mb-4">
                <input type="number" class="form-control" id="input5" placeholder="Telefono">
            </div>
            <div class="mb-4">
                <input type="date" class="form-control" id="input5" placeholder="Fecha de Ingreso">
            </div>

        </form>
    </div>
</body>
</html>
