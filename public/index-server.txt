<!DOCTYPE html>
<html lang="es">
<!-- App css -->
<link href="https://suwebexpress.com.mx/dimetest/public/css/config/default/bootstrap.min.css" rel="stylesheet" type="text/css" id="bs-default-stylesheet" />
<link href="https://suwebexpress.com.mx/dimetest/public/css/config/default/app.min.css" rel="stylesheet" type="text/css" id="app-default-stylesheet" />
<link href="https://suwebexpress.com.mx/dimetest/public/css/config/default/bootstrap-dark.min.css" rel="stylesheet" type="text/css" id="bs-dark-stylesheet" disabled="disabled" />
<link href="https://suwebexpress.com.mx/dimetest/public/css/config/default/app-dark.min.css" rel="stylesheet" type="text/css" id="app-dark-stylesheet" disabled="disabled" />

<body class="loading authentication-bg authentication-bg-pattern">
    <div class="account-pages my-5">
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

                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p>
                                <a href="pages-recoverpw.html" class="text-muted ms-1"><i class="fa fa-lock me-1"></i>¿Olvidó su contraseña?</a>
                            </p>
                            <p class="text-muted">
                                Sistema de Gestión interno, cual quier problema con el sistema favor de notificarlo al
                                area de desarrollo Intranet Dime V0.00001
                                <!-- <a href="pages-register.html" class="text-dark ms-1"><b>Sign Up</b></a> -->
                            </p>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->
    <script src="https://suwebexpress.com.mx/dimetest/public/js/vendor.min.js"></script>
    <script src="https://suwebexpress.com.mx/dimetest/public/js/app.min.js"></script>
</body>

</html>