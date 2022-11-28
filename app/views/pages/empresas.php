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
                    <div class="row">
                        <h1>Empresas</h1>
                        <button type="button" class="btn btn-success waves-effect waves-light col-4  col-md-2 col-sm-4 m-2" data-bs-toggle="modal" data-bs-target="#con-close-modal">
                            Nueva Empresa
                        </button>
                        <!-- Filtros search init-->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>Razón Social</th>
                                                    <th>RFC</th>
                                                    <th>Email</th>
                                                    <th>Teléfono</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>ROBERTO MEJIA CAMPIRAN </th>
                                                    <td>MECR860327P61</td>
                                                    <td>facturas@dime.pro </td>
                                                    <td>7222145513</td>
                                                    <th>
                                                        <a data-bs-toggle="tooltip" title="Detalles" class="btn btn-success" href="./rfc-details.php">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                        <a data-bs-toggle="tooltip" title="Editar" class="btn btn-info" href="./rfc-edit.php">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <a data-bs-toggle="tooltip" title="Desactivar" href="#" class="btn btn-danger">
                                                            <i class="fa fa-ban"></i>
                                                        </a>
                                                    </th>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

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