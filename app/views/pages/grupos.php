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
                        <h1>Grupos</h1>
                        <a href="./addGrupo.php" class="btn btn-success waves-effect waves-light col-4  col-md-2 col-sm-4 m-2">
                            <i class="mdi mdi-layers-plus"></i>
                            Agregar Grupo
                        </a>

                        <!-- Filtros search init-->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="col-12 table-responsive">
                                        <table id="datatable" class="table table-bordered dt-responsive table-responsive nowrap dataTable no-footer dtr-inline" aria-describedby="datatable_info">
                                            <thead>
                                                <tr>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 390.4px;" aria-label="Nombre: activate to sort column ascending">Nombre</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 202.4px;" aria-label="Fecha de Registro: activate to sort column ascending">Fecha de Registro</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 181.4px;" aria-label="Accion: activate to sort column ascending">Accion</th>
                                                </tr>
                                            </thead>

                                            <tbody class="text-center">
                                                <tr>
                                                    <td>Dime</td>
                                                    <td>2017-01-03 14:11:53 </td>
                                                    <td>
                                                        <a href="./grupo-details.php" title="Detalles" class="btn btn-success" data-bs-toggle="tooltip">
                                                            <i class="mdi mdi-eye-outline"></i>
                                                        </a>
                                                        <a href="./addGrupo.php" title="Editar" class="btn btn-info" data-bs-toggle="tooltip">
                                                            <i class="mdi mdi-lead-pencil"></i>
                                                        </a>
                                                        <a title="Desactivar" class="btn btn-danger" data-bs-toggle="tooltip">
                                                            <i class="mdi mdi-block-helper"></i>
                                                        </a>
                                                    </td>
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
    <?php include('../includes/scripts.php'); ?>


</body>

</html>