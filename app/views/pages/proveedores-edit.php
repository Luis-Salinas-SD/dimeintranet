<!DOCTYPE html>
<html lang="es">
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
                <div class="container-fluid">
                    <div class="row">
                        <h1>Modificar Proveedor</h1>
                        <!-- Contenido -->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <h3>Proveedor</h3>
                                        <table class="table table-bordered table-hover table-striped">
                                            <tbody>
                                                <tr>
                                                    <th colspan="4">
                                                        <div class="d-flex bd-highlight">
                                                            <div class="p-1 w-100 bd-highlight text-center">
                                                                Información Personal
                                                            </div>
                                                            <div class="p-1 flex-shrink-2 bd-highlight">
                                                                <a class="pull-right btn btn-primary" href="#">
                                                                    <i class="fa fa-edit"></i>
                                                                    Editar
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Razón Social</th>
                                                    <td> AGUA PURIFICADA POLARIS, S.A. DE C.V. </td>
                                                    <th>Representante</th>
                                                    <td> QUÍM. NICOLÁS SOTO VEGA </td>
                                                </tr>
                                                <tr>
                                                    <th>Contacto</th>
                                                    <td> LOURDES RAMOS ANAYA </td>
                                                    <th>Tipo Persona</th>
                                                    <td> PERSONA MORAL </td>
                                                </tr>
                                                <tr>
                                                    <th>Teléfono Contacto</th>
                                                    <td> 7222266132 </td>
                                                    <th>Email</th>
                                                    <td> <a href="mailto:nikolaymx@yahoo.com">nikolaymx@yahoo.com</a> </td>
                                                </tr>
                                                <tr>
                                                    <th>RFC:</th>
                                                    <td>APP060404JD2</td>
                                                    <th>Sitio Web</th>
                                                    <td>www.aguapolaris.com</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-center" colspan="4">Información Bancaria</th>
                                                </tr>
                                                <tr>
                                                    <th>Beneficiario</th>
                                                    <td>AGUA PURIFICADA POLARIS, S.A. DE C.V.</td>
                                                    <th>Banco</th>
                                                    <td>BANCO DEL BAJÍO, S.A. (BANBAJÍO)</td>
                                                </tr>
                                                <tr>
                                                    <th>Plaza</th>
                                                    <td>SANTÍN</td>
                                                    <th>Sucursal</th>
                                                    <td>PLAZA SANTÍN</td>
                                                </tr>
                                                <tr>
                                                    <th>Número de Cuenta</th>
                                                    <td>0148801240201</td>
                                                    <th>Clabe Interbancaria</th>
                                                    <td>030420900006589204</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="d-flex justify-content-between">
                                            <h3>Ordenes de Compra</h3>
                                            <button type="button" class="btn btn-info waves-effect waves-light my-2">
                                                <span class="btn-label"><i class="mdi mdi-printer"></i></span>
                                                Re-enviar Cotización
                                            </button>
                                        </div>
                                        <table class="table table-bordered table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Comprador</th>
                                                    <th>RFC Comprador</th>
                                                    <th>Importe</th>
                                                    <th>Generador</th>
                                                    <th>&nbsp;</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>DIME ESTUDIO DE DISEÑO, S.A. DE C.V.</td>
                                                    <td>DED171206927</td>
                                                    <td>$603.20</td>
                                                    <td>ROBERTO CAMPIRAN</td>
                                                    <td>
                                                        <a class="btn btn-primary btn-sm" href="https://midime.com.mx/dime/proveedores/detalleordencompra/eyJpdiI6IlFDcUlGM3ZGVmpiMHlBNHVFXC8yMHZ3PT0iLCJ2YWx1ZSI6IittMFZKMnNQRjBjcTM2cG9GZlBhN2c9PSIsIm1hYyI6ImVkNzA1MTQ0MDZiNWNiNzE5NTA0ZjcwZjE3NzU1YjhkNWVjYjg1NmZjODhmOTNhYzI4NGEyNGUxNzg1MTk4MzMifQ=="><i class="fa fa-eye"></i> Detalles</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>DIME ESTUDIO DE DISEÑO, S.A. DE C.V.</td>
                                                    <td>DED171206927</td>
                                                    <td>$400.00</td>
                                                    <td>FRANCISCO SORIANO</td>
                                                    <td>
                                                        <a class="btn btn-primary btn-sm" href="#"><i class="fa fa-eye"></i> Detalles</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>DIME ESTUDIO DE DISEÑO, S.A. DE C.V.</td>
                                                    <td>DED171206927</td>
                                                    <td>$795.00</td>
                                                    <td>ROBERTO CAMPIRAN</td>
                                                    <td>
                                                        <a class="btn btn-primary btn-sm" href="#"><i class="fa fa-eye"></i> Detalles</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>DIME ESTUDIO DE DISEÑO, S.A. DE C.V.</td>
                                                    <td>DED171206927</td>
                                                    <td>$400.00</td>
                                                    <td>FRANCISCO SORIANO</td>
                                                    <td>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>DIME ESTUDIO DE DISEÑO, S.A. DE C.V.</td>
                                                    <td>DED171206927</td>
                                                    <td>$464.00</td>
                                                    <td>FRANCISCO SORIANO</td>
                                                    <td>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
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