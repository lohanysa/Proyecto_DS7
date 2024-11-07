<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>crear usuario</title>

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

    <body>

        <section>
            <div class="fondo-compartido">
                <div class="mb-3">
                    <form method="post" action="{{ route('administrador_categoria.store') }}">
                        <div class="mb-3">
                            @csrf
                            <label for="usuario" class="form-label">Seleccione su Gmail</label>
                            <select  class="form-control" name="id_usuario" required>
                                @foreach($usuarios as $usuario)
                                <option value="{{$usuario->id}}">{{$usuario->correo}}</option>
                                @endforeach
                            </select>
                            <label  class="form-label">Nombre categoria</label>
                            <input type="text" class="form-control" id="Nombre_categoria" name="Nombre_categoria"  aria-describedby="usuarioHelp" required>
                            <div class="text-danger">{{ $errors->first('Nombre_categoria') }}</div>
                            <button type="submit" class="btn btn-primary">Crear</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </body>