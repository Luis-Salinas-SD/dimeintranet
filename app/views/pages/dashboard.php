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
                <!-- Empresa 1 -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <h1> Dime Estudio de diseño. </h1>
                                <section class="d-flex flex-wrap">
                                    <!-- Clientes -->
                                    <div class="col-xl-3 col-12 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="dropdown float-end">
                                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                                    </div>
                                                </div>

                                                <h4 class="header-title mt-0 mb-3">Clientes</h4>

                                                <div class="widget-box-2">
                                                    <div class="widget-detail-2 text-end">
                                                        <span class="badge bg-info rounded-pill float-start mt-3">32% <i class="mdi mdi-trending-up"></i>
                                                        </span>
                                                        <h2 class="fw-normal mb-1"> 1118 </h2>
                                                        <p class="text-muted mb-3">Revenue today</p>
                                                    </div>
                                                    <div class="progress progress-bar-alt-info progress-sm">
                                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;">
                                                            <span class="visually-hidden">77% Complete</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Prospectos -->
                                    <div class="col-xl-3 col-12 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="dropdown float-end">
                                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                                    </div>
                                                </div>

                                                <h4 class="header-title mt-0 mb-3">Prospectos</h4>

                                                <div class="widget-box-2">
                                                    <div class="widget-detail-2 text-end">
                                                        <span class="badge bg-success rounded-pill float-start mt-3">32% <i class="mdi mdi-trending-up"></i>
                                                        </span>
                                                        <h2 class="fw-normal mb-1"> 1118 </h2>
                                                        <p class="text-muted mb-3">Revenue today</p>
                                                    </div>
                                                    <div class="progress progress-bar-alt-success progress-sm">
                                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 57%;">
                                                            <span class="visually-hidden">57% Complete</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Pedidos Mes -->
                                    <div class="col-xl-3 col-12 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="dropdown float-end">
                                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                                    </div>
                                                </div>

                                                <h4 class="header-title mt-0 mb-4">Pedidos mes de:</h4>

                                                <div class="widget-chart-1">
                                                    <div class="widget-chart-box-1 float-start" dir="ltr">
                                                        <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#ffbd4a" data-bgColor="#FFE6BA" value="80" data-skin="tron" data-angleOffset="90" data-readOnly=true data-thickness=".15" />
                                                    </div>
                                                    <div class="widget-detail-1 text-end">
                                                        <h2 class="fw-normal pt-2 mb-1"> 4569 </h2>
                                                        <p class="text-black mb-3">Octubre</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Entregas Mes -->
                                    <div class="col-xl-3 col-12 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="dropdown float-end">
                                                    <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="mdi mdi-dots-vertical"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                                    </div>
                                                </div>

                                                <h4 class="header-title mt-0 mb-3">Entregas de mes:</h4>

                                                <div class="widget-box-2">
                                                    <div class="widget-detail-2 text-end">
                                                        <h2 class="fw-normal mb-1"> 1118 </h2>
                                                        <p class="text-black mb-3">Octubre</p>
                                                    </div>
                                                    <div class="progress progress-bar-alt-danger progress-sm">
                                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: 77%;">
                                                            <span class="visually-hidden">77% Complete</span>
                                                        </div>
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