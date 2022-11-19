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
                        <h1> Pedidos Archivados</h1>
                        <!-- Filtros search init-->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Filtros</h4>
                                    <form class="app-search col-4 mt-3 mb-3 col-10 col-lg-3">
                                        <div class="app-search-box">
                                            <div class="input-group">
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
                                                    <th>Cliente</th>
                                                    <th># Pedido</th>
                                                    <th>Descripción</th>
                                                    <th>Importe</th>
                                                    <th>Anticipo</th>
                                                    <th>Resta</th>
                                                    <th>Fincado</th>
                                                    <th>Entrega</th>
                                                    <th>Acción</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Sergio Sanabria </td>
                                                    <td>556</td>
                                                    <td>Página Web Standard</td>
                                                    <td>$6,500.00</td>
                                                    <td>$0.00</td>
                                                    <td>$6,500.00 </td>
                                                    <td>09/01/2019 </td>
                                                    <td>31/01/2019</td>
                                                    <th>
                                                        <a data-bs-toggle="tooltip" title="Editar" data-original-title="Detalles" href="./pedido-edit.php" class="btn btn-info">
                                                            <i class="fa fa-edit"></i>
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