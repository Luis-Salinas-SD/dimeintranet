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
                                <h2>Editar Banner Promocional</h2>
                                <div class="col-md-12">
                                    <form action="">
                                        <div class="mb-3">
                                            <label for="simpleinput" class="form-label">URL de promoción</label>
                                            <input type="text" id="simpleinput" class="form-control" placeholder="url de promoción">
                                        </div>
                                        <div class="mb-3">
                                            <label for="simpleinput" class="form-label">Descripción</label>
                                            <input type="text" id="simpleinput" class="form-control" placeholder="Descripción">
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-fileinput" class="form-label">Archivo</label>
                                            <input type="file" id="example-fileinput" class="form-control">
                                            <br>
                                            <button type="button" class="btn btn-success rounded-pill waves-effect waves-light">
                                                <span class="btn-label"><i class="mdi mdi-upload"></i></span>
                                                Subir Archivo
                                            </button>
                                            <button type="button" class="btn btn-danger rounded-pill waves-effect waves-light">
                                                <span class="btn-label"><i class="mdi mdi-delete"></i></span>
                                                Eliminar Archivo
                                            </button>
                                        </div>
                                    </form>
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