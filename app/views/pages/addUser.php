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
                                <div class="card-body">
                                    <h1>Agregar Usuario</h1>
                                    <div class="row">
                                        <form action="">
                                            <section class="d-flex">
                                                <!-- Column 1 -->
                                                <div class="col-12 p-3">
                                                    <form>
                                                        <div class="mb-3">
                                                            <label for="simpleinput" class="form-label">Nombre</label>
                                                            <input type="text" id="simpleinput" class="form-control" placeholder="Nombre">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="simpleinput" class="form-label">Apellido</label>
                                                            <input type="text" id="simpleinput" class="form-control" placeholder="Apellido">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="simpleinput" class="form-label">Correo Electrónico</label>
                                                            <input type="mail" id="simpleinput" class="form-control" placeholder="Correo Electrónico">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="simpleinput" class="form-label">Contraseña</label>
                                                            <input type="password" id="simpleinput" class="form-control" placeholder="Contraseña">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="simpleinput" class="form-label">Selecciona un Grupo de Usuario</label>
                                                            <select name="" id="" class="form-control">
                                                                <option value="" selected disabled> - Selecciona un Grupo de Usuario - </option>
                                                                <option value="">Op 1</option>
                                                                <option value="">Op 2</option>
                                                                <option value="">Op 3</option>
                                                            </select>
                                                        </div>
                                                    </form>
                                                </div>
                                            </section>
                                            <!-- end col -->
                                            <div class="col-12 text-center">
                                                <button type="submit" class="btn btn-success waves-effect waves-light col-4  col-md-2 col-sm-4 m-2">Agregar Usuario</button>
                                            </div>
                                        </form>
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