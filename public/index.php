<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Incio de Sesión</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico">
    <!-- App css -->
    <link href="./css/config/default/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
    <link href="./css/config/default/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />

    <link href="./css/config/default/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled="disabled" />
    <link href="./css/config/default/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" disabled="disabled" />

    <!-- icons -->
    <link href="./css/icons.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="loading authentication-bg authentication-bg-pattern">

    <div class="account-pages mt-5 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="text-center">
                        <a href="index.html">
                            <img src="img/familiadime.png" alt="" height="66" class="mx-auto" />
                        </a>
                        <p class="text-muted mt-2 mb-4">Bienvenido al Administrador</p>
                    </div>
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="text-center mb-4">
                                <h4 class="text-uppercase mt-0">Iniciar sesión</h4>
                            </div>
                            <!--$ Formulario - Login -->
                            <form action="../app/controller/validate.php" method="POST" class="needs-validation" novalidate>
                                <div class="position-relative mb-4">
                                    <label for="emailaddress" class="form-label">Correo:</label>
                                    <input class="form-control" type="email" id="emailaddress" name="email" required placeholder="ingresa tu email" />
                                    <div class="valid-tooltip"> Correcto </div>
                                    <div class="invalid-tooltip"> Campo requerido </div>
                                </div>
                                <div class="position-relative mb-4">
                                    <label for="password" class="form-label">Contraseña:</label>
                                    <input class="form-control" type="password" required id="password" name="password" placeholder="ingresa tu contraseña" />
                                    <div class="valid-tooltip"> Correcto </div>
                                    <div class="invalid-tooltip"> Campo requerido </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkbox-signin" checked />
                                        <label class="form-check-label" for="checkbox-signin">Recordarme</label>
                                    </div>
                                </div>
                                <div class="mb-3 d-grid text-center">
                                    <button class="btn rounded-pill btn-outline-primary" type="submit">
                                        Iniciar sesión
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <!-- Vendor js -->
    <script src="./js/vendor.min.js"></script>

    <!-- App js -->
    <script src="./js/app.min.js"></script>

</body>

</html>