<!DOCTYPE html>
<html lang="en">

<head>
    <title>Administrador</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
        .custom-button {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            background: none;
            border: none;
            padding: 0;
        }
        .custom-button:hover {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="py-1 bg-primary">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                            <span class="text">+ 1235 2355 98</span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                            <span class="text">youremail@email.com</span>
                        </div>
                        <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                            <span class="text">3-5 Business days delivery &amp; Free Returns</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light">
        <div class="container">
            <a class="navbar-brand" href="index.html"></a>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="{{ route('administrador_categoria.index') }}" class="nav-link">Administrar categoría</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Administrar platos</a></li>
                    <li class="nav-item active"><a href="about.html" class="nav-link">Suscripciones</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Listado de clientes</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>About us</span></p>
                    <h1 class="mb-0 bread">About us</h1>
                </div>
            </div>
        </div>
    </div>

    @if (session('mensaje'))
    <div class="col-md-6 order-md-last align-items-stretch d-flex">
        <div class="alert alert-info" role="alert">
            <h1>Mensaje</h1>
            <p>{{ session('mensaje') }}</p>
        </div>
    </div>
    @endif

    <button type="button" class="btn btn-primary mb-4">
        <a href="{{ route('plato.create') }}" style="color: white; text-decoration: none;">agregar plato</a>
    </button>

    <div class="container">
        <div class="row">
            @foreach($platos as $plato)
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="product">
                    <a href="#" class="img-prod"><img class="img-fluid" src="{{ $plato->foto_plato}}" alt="Plantilla Colorlib">
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="#">{{ $plato->nombre_plato}}</a></h3>
                        <div class="d-flex">
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">
                                <a href="{{ route('plato.edit', $plato->id )}}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                    <span><i class="bi bi-pencil-square"></i></span>
                                </a>
                                <a href="#exampleModal{{$plato->id}}" class="custom-button heart d-flex justify-content-center align-items-center mx-1" data-bs-toggle="modal">
                                    <span><i class="bi bi-trash3"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal{{$plato->id}}" tabindex="-1" aria-labelledby="exampleModalLabel{{$plato->id}}" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel{{$plato->id}}">Confirmación de eliminación</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ¿Estás seguro de que deseas eliminar esta categoría? <strong>{{ $plato->nombre_plato}}</strong>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <form action="{{ route('plato.destroy', $plato->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>
