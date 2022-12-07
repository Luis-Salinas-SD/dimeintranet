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
                <!-- Empresa 1 -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <h1> Dime Estudio de diseño. </h1>
                                <section class="d-flex flex-wrap my-2">
                                    <!-- Clientes -->
                                    <div class="col-xl-3 col-12 col-md-6 p-2">
                                        <div class="card">
                                            <div class="card-body border border-primary rounded-3">
                                                <h4 class="header-title mt-0 mb-3">Clientes</h4>
                                                <div class="widget-box-2">
                                                    <div class="widget-detail-2 text-end">
                                                        <span class="badge bg-info rounded-pill float-start mt-3">
                                                            32% <i class="mdi mdi-trending-up"></i>
                                                        </span>
                                                        <h2 class="fw-normal mb-1"> 1234 </h2>
                                                        <p class="text-muted mb-3">Clientes del Mes</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Prospectos -->
                                    <div class="col-xl-3 col-12 col-md-6 p-2">
                                        <div class="card">
                                            <div class="card-body border border-warning rounded-3">
                                                <h4 class="header-title mt-0 mb-3">Prospectos</h4>
                                                <div class="widget-box-2">
                                                    <div class="widget-detail-2 text-end">
                                                        <span class="badge bg-warning rounded-pill float-start mt-3">
                                                            46% <i class="mdi mdi-trending-up"></i>
                                                        </span>
                                                        <h2 class="fw-normal mb-1"> 1234 </h2>
                                                        <p class="text-muted mb-3">Prospectos del Mes</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Pedidos -->
                                    <div class="col-xl-3 col-12 col-md-6 p-2">
                                        <div class="card">
                                            <div class="card-body border border-danger rounded-3">
                                                <h4 class="header-title mt-0 mb-3">Pedidos mes de:</h4>
                                                <div class="widget-box-2">
                                                    <div class="widget-detail-2 text-end">
                                                        <span class="badge bg-danger rounded-pill float-start mt-3">
                                                            28% <i class="mdi mdi-trending-up"></i>
                                                        </span>
                                                        <h2 class="fw-normal mb-1"> 3200 </h2>
                                                        <p class="text-muted mb-3">Diciembre</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Pedidos -->
                                    <div class="col-xl-3 col-12 col-md-6 p-2">
                                        <div class="card">
                                            <div class="card-body border border-success rounded-3">
                                                <h4 class="header-title mt-0 mb-3">Entregas mes de:</h4>
                                                <div class="widget-box-2">
                                                    <div class="widget-detail-2 text-end">
                                                        <span class="badge bg-success rounded-pill float-start mt-3">
                                                            56% <i class="mdi mdi-trending-up"></i>
                                                        </span>
                                                        <h2 class="fw-normal mb-1"> 3190 </h2>
                                                        <p class="text-muted mb-3">Diciembre</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section class="d-flex flex-wrap">
                                    <!-- Suweb -->
                                    <div class="col-xl-3 col-12 col-md-6 px-2">
                                        <h3>Suweb</h3>
                                        <hr>
                                        <div class="border-start border-success border-4 px-2">
                                            <h4>Dominios Activos (125)</h4>
                                            <h4>Dominios por Vencer (2)</h4>
                                            <h4> Dominios Vencidos ( 14 )</h4>
                                            <h3 class="text-center">$33,431.20</h3>
                                        </div>
                                    </div>
                                    <!-- Cotizaciones -->
                                    <div class="col-xl-3 col-12 col-md-6 px-2">
                                        <h3>Cotizaciones</h3>
                                        <hr>
                                        <div class="border-start border-success border-4 px-2">
                                            <h4>Dominios Activos (125)</h4>
                                            <h4>Dominios por Vencer (2)</h4>
                                            <h4> Dominios Vencidos ( 14 )</h4>
                                        </div>
                                    </div>
                                    <!-- Solicitudes -->
                                    <div class="col-xl-3 col-12 col-md-6 px-2">
                                        <h3>Solicitudes</h3>
                                        <hr>
                                        <div class="border-start border-success border-4 px-2">
                                            <h4>Dominios Activos (125)</h4>
                                            <h4>Dominios por Vencer (2)</h4>
                                            <h4> Dominios Vencidos ( 14 )</h4>
                                        </div>
                                    </div>
                                </section>
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

    <?php include('../includes/rightbar.php') ?>

    <!--Scripts  -->
    <?php include('../includes/scriptsDashboard.php'); ?>

</body>

</html>