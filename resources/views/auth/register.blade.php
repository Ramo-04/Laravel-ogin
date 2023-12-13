<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registro FC Barcelona by Juan Sanchez</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        .gradient-form {
            background: #004d98; 
            height: 100vh !important;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .gradient-custom-2 {
            background: #a50044; 
            border-top-right-radius: .3rem;
            border-bottom-right-radius: .3rem;
        }

        .card {
            background-color: #fff; 
        }

        .text-white {
            color: #fff !important; 
        }

        .btn-primary {
            background-color: #a50044; 
            border-color: #a50044; 
        }

        @media (min-width: 768px) {
            .gradient-form {
                height: 100vh !important;
            }
        }

        .section-bg {
            background-color: #eee;
        }
    </style>
</head>

<body>
    <section class="h-100 gradient-form section-bg">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">
                                    <div class="text-center">
                                        <img src="https://as01.epimg.net/img/comunes/fotos/fichas/equipos/large/3.png"
                                            style="width: 185px;" alt="logo">
                                        <h4 class="mt-1 mb-5 pb-1">REGISTRO DE USUARIO</h4>
                                    </div>
                                    <form action="{{ route('register') }}" method="post">
                                        @csrf
                                        <p>Por favor, complete el formulario para registrarse</p>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example11">Nombre</label>
                                            <input type="text" name="name" id="form2Example11" class="form-control"
                                                placeholder="Ingresar nombre" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example12">Correo</label>
                                            <input type="email" name="email" id="form2Example12" class="form-control"
                                                placeholder="Ingresar dirección de correo electrónico" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example22">Contraseña</label>
                                            <input type="password" name="password" id="form2Example22"
                                                class="form-control" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label" for="form2Example23">Confirmar Contraseña</label>
                                            <input type="password" name="password_confirmation" id="form2Example23"
                                                class="form-control" />
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                                type="submit">Registrar</button>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2">¿Ya tiene una cuenta?</p>
                                            <a href="{{ route('login') }}" class="btn btn-outline-danger">Login</a>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
</body>

</html>
<a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>