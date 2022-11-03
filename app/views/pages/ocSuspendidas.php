<!DOCTYPE html>
<html lang="en">
<?php include('../includes/headDashboard.php') ?>

<!-- body start -->

<body class="loading"
    data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": true}, "topbar": {"color": "light"}, "showRightSidebarOnPageLoad": true}'>

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
                <h1>O.C Suspendidas</h1>
                <a href="../pages/nuevaOrden.php" class="btn btn-success waves-effect waves-light mb-2"><span
                        class="btn-label"><i class="fe-file-plus"></i></span>Generar una nueva orden</a>

                <!-- Tabla  -->
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead class="table-dark">
                                        <tr>
                                            <th># Orden</th>
                                            <th>Proveedor</th>
                                            <th>Comprador</th>
                                            <th>Importe</th>
                                            <th>T. Adeudo</th>
                                            <th>Detalles</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>666</td>
                                            <td>Facebook</td>
                                            <td> DIME ESTUDIO DE DISEÑO, S.A. DE C.V.</td>
                                            <td>$11,020.00</td>
                                            <td>$5,700.00 </td>
                                            <th>
                                                <a data-bs-toggle="tooltip" title="" href="#" class="btn btn-info"
                                                    data-bs-original-title="Detalles">
                                                    <i class="fa fa-eye mx-2"></i> Detalles
                                                </a>
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
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