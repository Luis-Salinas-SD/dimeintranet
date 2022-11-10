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
                        <h1>Editar Server</h1>
                        <!-- Filtros search init-->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Modificar Servidor</h4>
                                    <form class="m-2">
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="server" class="form-label">
                                                            Nombre del Servidor
                                                        </label>
                                                        <input type="text" class="form-control" id="server" placeholder="Servidor" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <div class="table-responsive">
                                                            <table class="table mb-0">
                                                                <thead class="table-dark">
                                                                    <tr class="text-center">
                                                                        <th>DNS</th>
                                                                        <th>IP DNS</th>
                                                                        <th>
                                                                            <button type="button" class="btn btn-success" onclick="agregarFila()">
                                                                                <i class="mdi mdi-server-remove"></i>
                                                                            </button>
                                                                        </th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="tablaprueba">
                                                                    <tr>
                                                                        <td><input type="text" name="" id="" placeholder="DNS"></td>
                                                                        <td><input type="text" name="" id="" placeholder="IP DNS"></td>
                                                                        <td></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="server" class="form-label">
                                                            Dirección IP
                                                        </label>
                                                        <input type="text" class="form-control" id="server" placeholder="ip" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="server" class="form-label">
                                                            Nombre de usuario
                                                        </label>
                                                        <input type="text" class="form-control" id="server" placeholder="user" required="">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="server" class="form-label">
                                                            Contraseña
                                                        </label>
                                                        <input type="password" class="form-control" id="server" placeholder="password" required="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Guardar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Filtros search fin-->
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