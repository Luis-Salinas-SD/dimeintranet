<!DOCTYPE html>
<html lang="en">
<?php include('../includes/headDashboard.php') ?>

<!-- body start -->

<body class="loading" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": true}, "topbar": {"color": "light"}, "showRightSidebarOnPageLoad": true}'>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->
        <div class="card">
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row text-center">
                        <h1> Empresas </h1>
                        <div class="d-flex justify-content-around flex-wrap">
                            <!-- Empresa 1 -->
                            <div class="col-md-6 col-xl-3 p-3">
                                <!-- Card Dime -->
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="../../../public/img/gallery/1.jpg" alt="imagen Dime">
                                    <div class="card-body text-center">
                                        <h4 class="card-title">Dime Estudio de diseño</h4>
                                        <a href="../pages/dashboard.php" class="btn btn-primary">Acceder</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Empresa 2 -->
                            <div class="col-md-6 col-xl-3 p-3">
                                <!-- Card Imprenta -->
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="../../../public/img/gallery/1.jpg" alt="imagen Tu imprenta">
                                    <div class="card-body text-center">
                                        <h4 class="card-title">Tu Imprenta</h4>
                                        <a href="#" class="btn btn-success">Acceder</a>
                                    </div>
                                </div>
                            </div>
                            <!-- Empresa 3 -->
                            <div class="col-md-6 col-xl-3 p-3">
                                <!-- Card Imprenta -->
                                <div class="card">
                                    <img class="card-img-top img-fluid" src="../../../public/img/gallery/1.jpg" alt="imagen Tu imprenta">
                                    <div class="card-body text-center">
                                        <h4 class="card-title">Estética</h4>
                                        <a href="#" class="btn btn-warning">Acceder</a>
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

    <?php include('../includes/rightbar.php') ?>

    <!--Scripts  -->
    <?php include('../includes/scriptsDashboard.php'); ?>

</body>

</html>