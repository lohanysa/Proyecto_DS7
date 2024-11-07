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

    @include('nav')

    <div class="fondo-compartido ">
        <form method="post" action="{{ route('usuario.store') }}">
            @csrf

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario (nombre para iniciar sesión)</label>
                <input type="text" class="form-control" id="usuario" name="usuario" value="{{ old('usuario') }}" aria-describedby="usuarioHelp" required>
                <div id="usuarioHelp" class="form-text"></div>
                @if ($errors->has('usuario'))
                <div class="text-danger">{{ $errors->first('usuario') }}</div>
                @endif
            </div>

            <div class="mb-3">
                <label for="correo" class="form-label">Correo</label>
                <input type="text" class="form-control" id="correo" name="correo" value="{{ old('correo') }}" aria-describedby="correoHelp" required>
                <div id="correoHelp" class="form-text"></div>
                @if ($errors->has('correo'))
                <div class="text-danger">{{ $errors->first('correo') }}</div>
                @endif
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" aria-describedby="passwordHelp" required>
                <div id="passwordHelp" class="form-text"></div>
                @if ($errors->has('password'))
                <div class="text-danger">{{ $errors->first('password') }}</div>
                @endif
            </div>

            <div class="mb-3">
                <label for="nombre_contacto" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre_contacto" name="nombre_contacto" value="{{ old('nombre_contacto') }}" aria-describedby="nombreHelp" required>
                <div id="nombreHelp" class="form-text"></div>
                @if ($errors->has('nombre_contacto'))
                <div class="text-danger">{{ $errors->first('nombre_contacto') }}</div>
                @endif
            </div>

            <div class="mb-3">
                <label for="nombre_restaurante" class="form-label">Restaurante</label>
                <input type="text" class="form-control" id="nombre_restaurante" name="nombre_restaurante" value="{{ old('nombre_restaurante') }}" aria-describedby="restauranteHelp" required>
                <div id="restauranteHelp" class="form-text"></div>
                @if ($errors->has('nombre_restaurante'))
                <div class="text-danger">{{ $errors->first('nombre_restaurante') }}</div>
                @endif
            </div>

            <div class="mb-3">
                <label for="imagen_fondo" class="form-label">Imagen de fondo</label>
                <input type="url" class="form-control" id="imagen_fondo" name="imagen_fondo" value="{{ old('imagen_fondo') }}" aria-describedby="imagenFondoHelp" required>
                <div id="imagenFondoHelp" class="form-text"></div>
                @if ($errors->has('imagen_fondo'))
                <div class="text-danger">{{ $errors->first('imagen_fondo') }}</div>
                @endif
            </div>

            <div class="mb-3">
                <label for="logo_empresa" class="form-label">Logo empresa</label>
                <input type="url" class="form-control" id="logo_empresa" name="logo_empresa" value="{{ old('logo_empresa') }}" aria-describedby="logoHelp" required>
                <div id="logoHelp" class="form-text"></div>
                @if ($errors->has('logo_empresa'))
                <div class="text-danger">{{ $errors->first('logo_empresa') }}</div>
                @endif
            </div>

            <div class="mb-3">
                <label for="tipo_usuario" class="form-label">Tipo de usuario</label>
                <select class="form-control" id="tipo_usuario" name="tipo_usuario" aria-describedby="tipoUsuarioHelp" required>
                    <option value="" disabled selected>Escoja una opción</option>
                    <option value="1" {{ old('tipo_usuario') == '1' ? 'selected' : '' }}>Administrador</option>
                    <option value="2" {{ old('tipo_usuario') == '2' ? 'selected' : '' }}>Cliente</option>
                </select>
                @if ($errors->has('tipo_usuario'))
                <div class="text-danger">{{ $errors->first('tipo_usuario') }}</div>
                @endif
            </div>

            <div class="mb-3" hidden>
                <label for="status" class="form-label">Status</label>
                <input type="hidden" class="form-control" id="status" name="status" value="2" required>
                @if ($errors->has('status'))
                <div class="text-danger">{{ $errors->first('status') }}</div>
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

    </div>


    <div class="container-fluid fondo-comaprtido"></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>