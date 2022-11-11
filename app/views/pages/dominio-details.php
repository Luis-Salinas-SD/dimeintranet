<!DOCTYPE html>
<html lang="en">
<?php include('../includes/headDashboard.php') ?>

<!-- body start -->

<body class="loading" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": true}, "topbar": {"color": "light"}, "showRightSidebarOnPageLoad": true}'>

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
                <!--! Empresa 1 -->
                <div class="container-fluid">
                    <div class="row">
                        <h1>Dominio <a href="http://google.com">Google</a></h1>

                        <!-- Contenido-->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-condensed table-hover">
                                            <thead>
                                                <tr>
                                                    <th colspan="4" class="text-center">Información del Dominio</th>
                                                </tr>
                                                <tr>
                                                    <th>Nombre del Cliente</th>
                                                    <th>¿Externo?</th>
                                                    <th>Estatus</th>
                                                    <th>Fecha de Registro</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>RENE ALVAREZ </td>
                                                    <td>
                                                        <a data-toggle="tooltip" data-placement="top" data-original-title="Cambiar a Externo" class="btn btn-sm btn-danger" href="">No</a>
                                                    </td>
                                                    <td>
                                                        <a data-toggle="tooltip" data-placement="top" data-original-title="Desactivar" href="" class="btn btn-success">
                                                            <i class="fa fa-check"></i></a>
                                                    </td>
                                                    <td>16 DE OCTUBRE DE 2017</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <br>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-condensed table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th colspan="7" class="text-center">Servicios Adicionales</th>
                                                </tr>
                                                <tr>
                                                    <th>Servicio</th>
                                                    <th>Servidor</th>
                                                    <th>Refrendo</th>
                                                    <th>Fecha de Registro</th>
                                                    <th>Fecha de Renovación</th>
                                                    <th>Estatus</th>
                                                    <th>
                                                        <a href="" data-toggle="tooltip" data-placement="top" data-original-title="Agregar Servicio" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i></a>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="" target="_blank">Web Standard</a></td>
                                                    <td><a href="" target="_blank">dimenet.com.mx</a></td>
                                                    <td>$2,668.00</td>
                                                    <td>10 DE NOVIEMBRE DE 2014</td>
                                                    <td>10 DE NOVIEMBRE DE 2022</td>
                                                    <td>
                                                        <label class="pre-off"><i class="fa fa-warning"></i> Por Vencer en 0 día(s)</label>
                                                    </td>
                                                    <td>
                                                        <a data-toggle="tooltip" data-placement="top" data-original-title="Suspender Sitio Web" href="" class="btn btn-danger">
                                                            <i class="fa fa-ban"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" data-placement="top" data-original-title="Editar" href="" class="btn btn-info">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" data-placement="top" data-original-title="Desactivar" href="" class="btn btn-success">
                                                            <i class="fa fa-check"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" data-placement="top" data-original-title="Enviar Notificación" href="" class="btn btn-outline-secondary waves-effect">
                                                            <i class="fa fa-envelope"></i>
                                                            Enviar Notificación
                                                        </a>
                                                        <a data-toggle="tooltip" data-placement="top" data-original-title="Renovar Paquete Web" href="" class="btn btn-primary update_refresh">
                                                            <i class="mdi mdi-reload"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" data-placement="top" data-original-title="Descargar PDF" href="" class="btn btn-outline-secondary waves-effect">
                                                            <i class="fa fa-download"></i>
                                                        </a>
                                                        <a href="" onclick="" class="btn btn-danger">
                                                            <i class="mdi mdi-file-document"></i>
                                                            Contrato Web
                                                        </a>

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <strong>Total de Espacio en Disco:</strong> 1200MB. <strong>Total de Espacio Utilizado:</strong> 877.53MB Utilizado.
                                                </div>
                                                <a href="" class="btn btn-primary btn-sm pull-right">
                                                    <i class="mdi mdi-update"></i> Actualizar
                                                </a>
                                            </div>
                                            <!--! Barra de Progresso -->
                                            <div class="progress mb-3 progress-md">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover table-condensed">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" colspan="4">Correos Electrónicos Disponibles 11/8</th>
                                                </tr>
                                                <tr>
                                                    <th>Correo Electrónico</th>
                                                    <th>
                                                        <a href="" data-toggle="tooltip" data-placement="top" data-original-title="Ver Cuentas de Correo" class="btn btn-sm btn-primary">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>onder.cerda@aeroclass.com.mx</td>
                                                    <td>
                                                        <a data-email="onder.cerda@aeroclass.com.mx" href="" data-toggle="tooltip" data-placement="top" data-original-title="Cambiar Contraseña" data-element="3" class="btn btn-info btn-sm">
                                                            <i class="fa fa-key"></i>
                                                        </a>
                                                        <a href="" data-toggle="tooltip" data-placement="top" data-original-title="Suspender Cuenta" data-element="1" class="btn btn-warning btn-sm">
                                                            <i class="fa fa-ban"></i>
                                                        </a>
                                                        <a href="" data-toggle="tooltip" data-placement="top" data-original-title="Eliminar Cuenta" data-element="2" class="btn btn-danger btn-sm">
                                                            <i class="mdi mdi-delete"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>gmacias@aeroclass.com.mx</td>
                                                    <td>
                                                        <a data-email="gmacias@aeroclass.com.mx" href="" data-toggle="tooltip" data-placement="top" data-original-title="Cambiar Contraseña" data-element="3" class="btn btn-info btn-sm">
                                                            <i class="fa fa-key"></i>
                                                        </a>
                                                        <a href="" data-toggle="tooltip" data-placement="top" data-original-title="Suspender Cuenta" data-element="1" class="btn btn-warning btn-sm">
                                                            <i class="fa fa-ban"></i>
                                                        </a>
                                                        <a href="" data-toggle="tooltip" data-placement="top" data-original-title="Eliminar Cuenta" data-element="2" class="btn btn-danger btn-sm">
                                                            <i class="mdi mdi-delete"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <section class="d-flex justify-content-between">
                                        <div class="col-md-3 m-2">
                                            <div class="card">
                                                <h5 class="card-header">Featured</h5>
                                                <div class="card-body">
                                                    <h5 class="card-title">Special title treatment</h5>
                                                    <p class="card-text">With supporting text below as a natural lead-in to
                                                        additional content.</p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 m-2">
                                            <div class="card">
                                                <h5 class="card-header">Featured</h5>
                                                <div class="card-body">
                                                    <h5 class="card-title">Special title treatment</h5>
                                                    <p class="card-text">With supporting text below as a natural lead-in to
                                                        additional content.</p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 m-2">
                                            <div class="card">
                                                <h5 class="card-header">Featured</h5>
                                                <div class="card-body">
                                                    <h5 class="card-title">Special title treatment</h5>
                                                    <p class="card-text">With supporting text below as a natural lead-in to
                                                        additional content.</p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                            </div>
                                        </div>
                                    </section>

                                </div>
                            </div>


                        </div>
                        <!-- Filtros search fin-->
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