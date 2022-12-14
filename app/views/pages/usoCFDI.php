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
                        <h1>Uso de CFDI</h1>
                        <button type="button" class="btn btn-success waves-effect waves-light col-4  col-md-2 col-sm-4 m-2" data-bs-toggle="modal" data-bs-target="#con-close-modal">
                            <i class="mdi mdi-update"></i>
                            Actualiza la información
                        </button>

                        <!-- Filtros search init-->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">

                                    <div class="col-12">
                                        <table id="datatable" class="table table-bordered dt-responsive table-responsive nowrap dataTable no-footer dtr-inline" aria-describedby="datatable_info">
                                            <thead>
                                                <tr>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 390.4px;" aria-label="key: activate to sort column ascending">key</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 202.4px;" aria-label="Nombre: activate to sort column ascending">Nombre</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 102.4px;" aria-label="Uso: activate to sort column ascending">Uso</th>
                                                </tr>
                                            </thead>

                                            <tbody class="text-center">

                                                <tr>
                                                    <td>D01</td>
                                                    <td>Honorarios médicos, dentales y gastos hospitalarios </td>
                                                    <td>fisica</td>
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