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
                                <h2>Reporte de Cotizaciones</h2>

                                <div class="panel-body">
                                    <form method="POST" action="" accept-charset="UTF-8" autocomplete="off" id="searchReportes">
                                        <input name="_token" type="hidden" value="">
                                        <div class="row input-daterange">
                                            <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
                                                <label form="fechainicial">Fecha Inicial</label>
                                                <input type="date" class="form-control" name="fechainicial" id="fechainicial">
                                            </div>
                                            <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
                                                <label form="fechafinal">Fecha Final</label>
                                                <input type="date" class="form-control" name="fechafinal" id="fechafinal">
                                            </div>
                                            <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
                                                <br>
                                                <label class="">
                                                    <div class="icheckbox_flat-red" aria-checked="false">
                                                        <input class="form-check-input rounded-circle" type="checkbox" value="" id="" checked="">
                                                    </div>
                                                    Cotización Aceptada
                                                </label>
                                            </div>
                                            <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
                                                <br>
                                                <label>
                                                    <div class="d-flex">
                                                        <input class="form-check-input rounded-circle" type="checkbox" value="" id="" checked="">
                                                    </div>
                                                    Recordatorio
                                                </label>
                                            </div>
                                            <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
                                                <br>
                                                <label>
                                                    <div class="icheckbox_flat-red" aria-checked="false">
                                                        <input class="form-check-input rounded-circle" type="checkbox" value="" id="" checked="">
                                                    </div>
                                                    Seguimiento Teléfonico
                                                </label>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <br>
                                            <button class="btn btn-primary">
                                                <i class="fa fa-pdf-o"></i> Generar Reporte
                                            </button>
                                        </div>
                                    </form>
                                    <br>
                                    <div class="render">
                                        <!-- <canvas id="grafica" width="500"></canvas> -->
                                        <h2>Grafica</h2>
                                    </div>
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
    <!-- Chartsjs -->
    <script src="./script.js"></script>

</body>

</html>