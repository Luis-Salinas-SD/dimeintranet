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
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body ">
                                    <div class="row">
                                        <!-- Column 1 -->
                                        <div class="col-lg-6">
                                            <form>
                                                <div class="mb-3">
                                                    <label for="simpleinput" class="form-label">Nombre del Paquete Web</label>
                                                    <input type="text" id="simpleinput" class="form-control" placeholder="Nombre del Paquete Web">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="simpleinput" class="form-label">Precio</label>
                                                    <input type="text" id="simpleinput" class="form-control" placeholder="Precio">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="simpleinput" class="form-label">Precio de Renovacion</label>
                                                    <input type="text" id="simpleinput" class="form-control" placeholder="Precio de Renovacion">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="simpleinput" class="form-label">Tiempo de Soporte en Minutos</label>
                                                    <input type="text" id="simpleinput" class="form-control" placeholder="Tiempo de Soporte en Minutos">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="simpleinput" class="form-label">Número de Secciones</label>
                                                    <input type="text" id="simpleinput" class="form-control" placeholder="Número de Secciones">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="simpleinput" class="form-label">Número de Correos Electrónicos</label>
                                                    <input type="text" id="simpleinput" class="form-control" placeholder="Número de Correos Electrónicos">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="simpleinput" class="form-label">Espacio en Disco</label>
                                                    <input type="text" id="simpleinput" class="form-control" placeholder="Espacio en Disco">
                                                </div>
                                            </form>
                                        </div> <!-- end col -->
                                        <!-- Column 2 -->
                                        <div class="col-lg-6">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="dropdown float-end">
                                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="mdi mdi-dots-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-end" style="">
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

                                                        <h4 class="header-title mt-0 mb-3"><i class="mdi mdi-notification-clear-all me-1"></i> Paquetes agregados recientemente</h4>

                                                        <ul class="list-group mb-0 user-list">
                                                            <li class="list-group-item">
                                                                <a href="#" class="user-list-item">
                                                                    <div class="user float-start me-3">
                                                                        <i class="mdi mdi-circle text-primary"></i>
                                                                    </div>
                                                                    <div class="user-desc overflow-hidden">
                                                                        <h5 class="name mt-0 mb-1">Hosting</h5>
                                                                        <span class="desc text-muted font-12 text-truncate d-block">Precio: 1,160.00/span>
                                                                            <span class="desc text-muted font-12 text-truncate d-block">Precio de Renovación: 1,000.00</span>
                                                                            <span class="desc text-primary font-12 text-truncate d-block">Hace 2 años</span>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li class="list-group-item">
                                                                <a href="#" class="user-list-item">
                                                                    <div class="user float-start me-3">
                                                                        <i class="mdi mdi-circle text-success"></i>
                                                                    </div>
                                                                    <div class="user-desc overflow-hidden">
                                                                        <h5 class="name mt-0 mb-1">Hosting</h5>
                                                                        <span class="desc text-muted font-12 text-truncate d-block">Precio: 1,160.00/span>
                                                                            <span class="desc text-muted font-12 text-truncate d-block">Precio de Renovación: 1,000.00</span>
                                                                            <span class="desc text-primary font-12 text-truncate d-block">Hace 2 años</span>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li class="list-group-item">
                                                                <a href="#" class="user-list-item">
                                                                    <div class="user float-start me-3">
                                                                        <i class="mdi mdi-circle text-pink"></i>
                                                                    </div>
                                                                    <div class="user-desc overflow-hidden">
                                                                        <h5 class="name mt-0 mb-1">Meet Manager</h5>
                                                                        <span class="desc text-muted font-12 text-truncate d-block">February 26, 2019 - 10:30am to 12:45pm</span>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li class="list-group-item">
                                                                <a href="#" class="user-list-item">
                                                                    <div class="user float-start me-3">
                                                                        <i class="mdi mdi-circle text-muted"></i>
                                                                    </div>
                                                                    <div class="user-desc overflow-hidden">
                                                                        <h5 class="name mt-0 mb-1">Hosting</h5>
                                                                        <span class="desc text-muted font-12 text-truncate d-block">Precio: 1,160.00/span>
                                                                            <span class="desc text-muted font-12 text-truncate d-block">Precio de Renovación: 1,000.00</span>
                                                                            <span class="desc text-primary font-12 text-truncate d-block">Hace 2 años</span>
                                                                    </div>
                                                                </a>
                                                            </li>

                                                            <li class="list-group-item">
                                                                <a href="#" class="user-list-item">
                                                                    <div class="user float-start me-3">
                                                                        <i class="mdi mdi-circle text-danger"></i>
                                                                    </div>
                                                                    <div class="user-desc overflow-hidden">
                                                                        <h5 class="name mt-0 mb-1">Hosting</h5>
                                                                        <span class="desc text-muted font-12 text-truncate d-block">Precio: 1,160.00/span>
                                                                            <span class="desc text-muted font-12 text-truncate d-block">Precio de Renovación: 1,000.00</span>
                                                                            <span class="desc text-primary font-12 text-truncate d-block">Hace 2 años</span>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end col -->
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
</body>

</html>