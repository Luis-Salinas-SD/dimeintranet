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
                        <h1>Cuentas por Cobrar</h1>
                        <h3>Pasivo: $568,529.28</h3>
                        <!-- Filtros search init-->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Filtros</h4>
                                    <form class="app-search mt-3 mb-3 col-12">
                                        <div class="row m-3 d-flex justify-content-end">
                                            <div class="col-3 d-flex">
                                                <h4>Buscar</h4>
                                                <input type="text" class="form-control mx-1">
                                            </div>
                                        </div>
                                    </form>

                                    <div class="col-sm-12">
                                        <table id="datatable" class="table table-bordered dt-responsive table-responsive nowrap dataTable no-footer dtr-inline" aria-describedby="datatable_info">
                                            <thead>
                                                <tr>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 390.4px;">ID</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 202.4px;">Pedido</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 102.4px;">Cliente</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 181.4px;">Importe</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 160.4px;">Total Pagado</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 160.4px;">Adeudo</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 160.4px;">Fecha del Pedido</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 160.4px;">Estatus de Pago</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 160.4px;">Estatus de pedido</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 160.4px;">Detalles</th>
                                                </tr>
                                            </thead>

                                            <tbody>

                                                <tr>
                                                    <td>1</td>
                                                    <td>85</td>
                                                    <td>Cliente</td>
                                                    <td>$6,449.60</td>
                                                    <td>$3,870.00</td>
                                                    <td>$2,579.60</td>
                                                    <td>27 DE DICIEMBRE DE 2017</td>
                                                    <td>Pendiente de Pago</td>
                                                    <td>Abandonado</td>
                                                    <td>
                                                        <a data-bs-toggle="tooltip" title="Canecelar" class="btn btn-danger" href="">
                                                            <i class="mdi mdi-delete"></i>
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