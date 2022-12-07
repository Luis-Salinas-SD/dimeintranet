<!DOCTYPE html>
<html lang="en">
<?php include('../includes/headDashboard.php') ?>

<!-- body start -->

<body class="loading" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "dark", "size": "default", "showuser": true}, "topbar": {"color": "light"}, "showRightSidebarOnPageLoad": true}'>

    <!-- Begin page -->
    <div id="wrapper">
        <!-- Topbar Start -->
        <?php include('../includes/topbar.php') ?>

        <!-- ========== Left Sidebar Start ========== -->
        <?php include('../includes/leftSidebar.php') ?>

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <div class="content">
                <div class="container-fluid">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <h1>Nuevo Permiso</h1>
                                    <section class="d-flex justify-content-around">
                                        <div class="col-5">
                                            <form action="">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Nombre del Permiso</label>
                                                    <input type="text" name="" id="" class="form-control" placeholder="Nombre del Permiso">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Valor del Permiso</label>
                                                    <input type="text" name="" id="" class="form-control" placeholder="Valor del Permiso">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Descripcion del Permiso</label>
                                                    <input type="text" name="" id="" class="form-control" placeholder="Descripcion del Permiso">
                                                </div>
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-success waves-effect waves-light col-4  col-md-2 col-sm-4 m-2">
                                                        Enviar
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-5">
                                            <div class="accordion custom-accordion" id="custom-accordion-one">
                                                <div class="card mb-0">
                                                    <div class="card-header bg-success" id="headingNine">
                                                        <h4 class="m-0 position-relative text-white">
                                                            <a class="custom-accordion-title text-reset d-block collapsed" data-bs-toggle="collapse" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                                                Divisiones Agregadas Recientemente
                                                            </a>
                                                        </h4>
                                                    </div>

                                                    <div id="collapseNine" class="collapse show" aria-labelledby="headingFour" data-bs-parent="#custom-accordion-one" style="">
                                                        <div class="card-body">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered table-hover table-striped animated fadeInUp">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td> <strong>Permiso :</strong> Permite Guardar Los Tiempos Trabajados En Una Pagina Web</td>
                                                                            <td> <strong>Valor :</strong> dominios.timeworked</td>
                                                                            <td> <strong><abbr class="timeago" title="2016-08-12 09:44:53">Hace 6 años</abbr></strong></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td> <strong>Permiso :</strong> Vista Del Proveedor A La Cotizacion A Travez De Una Solicitud</td>
                                                                            <td> <strong>Valor :</strong> proveedores.cotizacion</td>
                                                                            <td> <strong><abbr class="timeago" title="2016-08-05 19:11:59">Hace 6 años</abbr></strong></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td> <strong>Permiso :</strong> Guarda La Informacion De Una Cotizacion</td>
                                                                            <td> <strong>Valor :</strong> proveedores.cotizacionstore</td>
                                                                            <td> <strong><abbr class="timeago" title="2016-08-05 18:49:20">Hace 6 años</abbr></strong></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td> <strong>Permiso :</strong> Detalle De Una Cotizacion A Proveedor Por Medio De Un Solicitud</td>
                                                                            <td> <strong>Valor :</strong> solicitudes.detalleseguimientocotizacion</td>
                                                                            <td> <strong><abbr class="timeago" title="2016-08-05 18:28:21">Hace 6 años</abbr></strong></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td> <strong>Permiso :</strong> Permite Activar/Inactivar Un Banner Promocional</td>
                                                                            <td> <strong>Valor :</strong> mercadotecnia.bannerdestroy</td>
                                                                            <td> <strong><abbr class="timeago" title="2016-08-01 15:01:12">Hace 6 años</abbr></strong></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->
    <!-- Rightbar Start -->
    <?php include('../includes/rightbar.php') ?>
    <!--Scripts  -->
    <?php include('../includes/scriptsDashboard.php'); ?>
</body>

</html>