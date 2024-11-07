<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Crear Usuario</title>
</head>

<body>
    <style>
        .fondo-compartido {
            min-height: 100vh;
            background: linear-gradient(rgba(5, 7, 12, 0.75), rgba(5, 7, 12, 0.75)), 
                        url('../images/image_5.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center; /* Centra horizontalmente */
            align-items: center; /* Centra verticalmente */
        }

        .form-label {
            color: #fff; /* Cambia el color de las etiquetas a blanco */
        }
    </style>

    @include('nav')

    <div class="fondo-compartido">
        <form action="{{ route('administrador_categoria.update', $administrador_categorium->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="Nombre_categoria" class="form-label">Categoría</label>
                <input type="text" class="form-control" id="Nombre_categoria" name="Nombre_categoria" value="{{ $administrador_categorium->Nombre_categoria }}" required>
                <div id="Nombre_categoriaHelp" class="form-text"></div>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>
