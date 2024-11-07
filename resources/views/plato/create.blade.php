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
                    <form method="post" action="{{ route('plato.store') }}">
                        <div class="mb-3">
                            @csrf
                            <label  class="form-label">Nombre del plato</label>
                            <input type="text" class="form-control" id="nombre_plato" name="nombre_plato"  aria-describedby="usuarioHelp" required>
                            <div class="text-danger">{{ $errors->first('Nombre_categoria') }}</div>
        

                            <label for="usuario" class="form-label">categoria del plato</label>
                            <select  class="form-control" name="id_categoria" required>
                                @foreach($categorias as $categoria)
                                <option value="{{ $categoria->id }}">{{$categoria->Nombre_categoria}}</option>
                                @endforeach
                            </select>

                            <label  class="form-label">Descripcion </label>
                            <input type="text" class="form-control" id="descripcion_plato" name="descripcion_plato"  aria-describedby="usuarioHelp" required>
                            <div class="text-danger">{{ $errors->first('Nombre_categoria') }}</div>

                            <label  class="form-label">Foto  </label>
                            <input type="url" class="form-control" id="foto_plato" name="foto_plato"  aria-describedby="usuarioHelp" required>
                            <div class="text-danger">{{ $errors->first('Nombre_categoria') }}</div>
                            
                            <label  class="form-label">precio  </label>
                            <input type="number" class="form-control" id="precio_plato" name="precio_plato" step="0.01" aria-describedby="usuarioHelp" required>
                            <div class="text-danger">{{ $errors->first('Nombre_categoria') }}</div>
                            
                            <label  class="form-label"> Correo  </label>
                            <select type="number" class="form-control" id="id_usuario" name="id_usuario" step="0.01" aria-describedby="usuarioHelp" required>
                            @foreach( $correo as $email)
                                <option value="{{$email->id}}">{{$email->correo}}</option>
                                @endforeach
                            </select>
                            <div class="text-danger">{{ $errors->first('Nombre_categoria') }}</div>

                            <button type="submit" class="btn btn-primary">Crear</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </body>