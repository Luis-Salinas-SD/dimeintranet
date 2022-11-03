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
                        <h1> Servidores</h1>
                        <button type="button" class="btn btn-success waves-effect waves-light col-4  col-md-2 col-sm-4 m-2" data-bs-toggle="modal" data-bs-target="#con-close-modal">
                            Añadir Servidor
                        </button>
                        <!--! Modal Formulario init -->
                        <div id="con-close-modal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                            <?php include('../includes/modals/addserver.php') ?>
                        </div>
                        <!-- Modal Formulario fin -->
                        <!-- Filtros search init-->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Filtros</h4>
                                    <form class="app-search col-4 mt-3 mb-3 col-10 col-lg-3">
                                        <div class="app-search-box">
                                            <div class="input-group">
                                                <select class="form-select me-2" aria-label="Default select example">
                                                    <option selected>Seleccionar</option>
                                                    <option value="1">Servidor 1</option>
                                                    <option value="2">Servidor 2</option>
                                                    <option value="3">Servidor 3</option>
                                                </select>
                                                <input type="text" class="form-control" placeholder="Buscar aqui" id="top-search">
                                                <button class="btn input-group-text" type="submit">
                                                    <i class="fe-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>#</th>
                                                    <th>Servidor</th>
                                                    <th>DNS</th>
                                                    <th>IP</th>
                                                    <th>Estatus</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>dime.net</td>
                                                    <td>["ns1.dime.pro","ns2.dime.pro"]</td>
                                                    <td>8.8.8.8</td>
                                                    <td>
                                                        <a data-bs-toggle="tooltip" title="Detalles" href="#" class="btn btn-success">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                        <a data-bs-toggle="tooltip" title="Editar" data-original-title="Detalles" href="#" class="btn btn-info">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <a data-bs-toggle="tooltip" title="Desactivar" data-original-title="Detalles" href="#" class="btn btn-danger">
                                                            <i class="fa fa-ban"></i>
                                                        </a>
                                                        <a data-bs-toggle="tooltip" title="Correo" data-original-title="Detalles" href="#" class="btn btn-success">
                                                            <i class="fa far fa-envelope-open"></i>
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

</body>

</html>