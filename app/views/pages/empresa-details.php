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
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <h1>Detalles del pedido</h1>
                                <!-- Filtros search init-->
                                <div class="table-responsive">
                                    <table class="table table-bordered table-condensed table-hover table-striped">
                                        <tbody>
                                            <tr>
                                                <td>Razón Social</td>
                                                <td>ROBERTO MEJIA CAMPIRAN</td>
                                                <td>R.F.C.</td>
                                                <td>MECR860327P61</td>
                                                <td>Email</td>
                                                <td>facturas@dime.pro</td>
                                            </tr>
                                            <tr>
                                                <td>Telefóno</td>
                                                <td>7222145513</td>
                                                <td>Dirección</td>
                                                <td colspan="3">JUAN ALDAMA SUR N. Exterior: 2 N. Interior705, Col. FRANCISCO MURGUIA EL RANCHITO,
                                                    Municipio. TOLUCA ESTADO DE MÉXICO 50130
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="6" class="text-center">Datos de Factura</td>
                                            </tr>
                                            <tr>
                                                <td>ApiKey</td>
                                                <td colspan="5">JDJ5JDEwJE1halFNSVVPcG9TRXJ4WWZFb2FKSC5CN0s1c0cvODJkajIxaHdLVFVGM0R5ZmpCNS96WGtl</td>
                                            </tr>
                                            <tr>
                                                <td>Secret Key</td>
                                                <td colspan="5">JDJ5JDEwJGdxZmo3MkduWmt5UlhHVWNqTWI2b09pbDJ0VS9pdHRxY1hwRjFiUFBOdVkwQWNZRWd6WmJL</td>
                                            </tr>
                                            <tr>
                                                <td>Serie A Utilizar</td>
                                                <td colspan="5">M</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Filtros search fin-->
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