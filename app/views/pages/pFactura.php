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
                <div class="container-fluid">
                    <div class="row">
                        <div class="card col-12">
                            <div class="card-body">
                                <h1>Pagos no Facturados</h1>
                                <br>
                                <p>Facturas Pendientes de Renovaciones de Dominios</p>
                                <div class="table-responsive mt-4">
                                    <table id="renovaciones_pendientes" class="table table-bordered table-condensed table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th># De Orden</th>
                                                <th>Descripción</th>
                                                <th>Precio Sin IVA</th>
                                                <th>Fecha de Vencimiento</th>
                                                <th>Estatus</th>
                                                <th>Forma Pago</th>
                                                <th>Estatus Factura</th>
                                                <th>Factura</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>DOPDOP78232601</td>
                                                <td>Web Standard (saludalmil.com)</td>
                                                <td>$2,300.00</td>
                                                <td>25 DE NOVIEMBRE DE 2022</td>
                                                <td>Pagado</td>
                                                <td>Tarjeta de Crédito / Débito</td>
                                                <td>Activa</td>
                                                <td>
                                                    <a href="./pGenerar-Factura.php" class="btn btn-primary btn-sm">Generar Factura</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>DOPDOP03142603</td>
                                                <td>Web Basic (wtmanufacturas.com)</td>
                                                <td>$1,200.00</td>
                                                <td>27 DE NOVIEMBRE DE 2022</td>
                                                <td>Pagado</td>
                                                <td>Tarjeta de Crédito / Débito</td>
                                                <td>Activa</td>
                                                <td>
                                                    <a href="./pGenerar-Factura.php" class="btn btn-primary btn-sm">Generar Factura</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
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