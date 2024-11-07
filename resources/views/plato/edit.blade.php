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
            justify-content: center;
            /* Centra horizontalmente */
            align-items: center;
            /* Centra verticalmente */
        }

        .form-label {
            color: #fff;
            /* Cambia el color de las etiquetas a blanco */
        }
    </style>

    @include('nav')

    <div class="fondo-compartido">
        <form method="post" action="{{ route('plato.update', $plato->id) }}">
            <div class="mb-3">
                @csrf
                @method('PUT')

                <label for="nombre_plato" class="form-label">Nombre del plato</label>
                <input type="text" class="form-control" id="nombre_plato" name="nombre_plato" value="{{ $plato->nombre_plato }}" aria-describedby="nombreHelp" required>
                <div class="text-danger">{{ $errors->first('nombre_plato') }}</div>

                <label for="id_categoria">Categoría</label>
                <select class="form-control" id="id_categoria" name="id_categoria" required>
                @foreach($categorias as $categoria)
                    <option value ='{{ $categoria->id }}'  @if(old('id_categoria', $plato->id_categoria) == $categoria->id) selected @endif>
                        {{ $categoria->Nombre_categoria }}
                    </option>
                @endforeach
                </select>

                <div class="text-danger">{{ $errors->first('id_categoria') }}</div>

                <label for="descripcion_plato" class="form-label">Descripción</label>
                <input type="text" class="form-control" id="descripcion_plato" name="descripcion_plato" value="{{ $plato->descripcion_plato }}" aria-describedby="descripcionHelp" required>
                <div class="text-danger">{{ $errors->first('descripcion_plato') }}</div>

                <label for="foto_plato" class="form-label">Foto</label>
                <input type="url" class="form-control" id="foto_plato" name="foto_plato" value="{{ $plato->foto_plato }}" aria-describedby="fotoHelp" required>
                <div class="text-danger">{{ $errors->first('foto_plato') }}</div>

                <label for="precio_plato" class="form-label">Precio</label>
                <input type="number" class="form-control" id="precio_plato" name="precio_plato" value="{{ $plato->precio_plato }}" step="0.01" aria-describedby="precioHelp" required>
                <div class="text-danger">{{ $errors->first('precio_plato') }}</div>

                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>