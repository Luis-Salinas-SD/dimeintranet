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
                        <div class="card">
                            <div class="card-body">
                                <h2>Pedidos</h2>
                                <div>
                                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Selecciona el mes del reporte:</label>
                                            <select class="form-control" data-link="">
                                                <option value="0">Selecciona un mes</option>
                                                <option value="1">Enero 2022</option>
                                                <option value="2">Febrero 2022</option>
                                                <option value="3">Marzo 2022</option>
                                                <option value="4">Abril 2022</option>
                                                <option value="5">Mayo 2022</option>
                                                <option value="6">Junio 2022</option>
                                                <option value="7">Julio 2022</option>
                                                <option value="8">Agosto 2022</option>
                                                <option value="9">Septiembre 2022</option>
                                                <option value="10">Octubre 2022</option>
                                                <option value="11">Noviembre 2022</option>
                                                <option value="12">Diciembre 2022</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h3>Grafica</h3>
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
    <?php include('../includes/scripts.php'); ?>
</body>

</html>