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
                                <h2>Landing Pages</h2>
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <input type="hidden" id="_token" name="_token" value="">
                                        <table class="table table-bordered table-condensed table-hover table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Correo Electrónico</th>
                                                    <th>Teléfono</th>
                                                    <th>Plan</th>
                                                    <th>Sitio Web</th>
                                                    <th>Visto</th>
                                                    <th>Seguimiento</th>
                                                    <th>Solucionado</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-center">
                                                <tr>
                                                    <td>CRISTIAN</td>
                                                    <td>CRISTIAN@GMAIL.COM</td>
                                                    <td>5566778899</td>
                                                    <td>PRO</td>
                                                    <td>Suweb</td>
                                                    <td>
                                                        <input class="form-check-input" type="checkbox" value="" id="customckeck2" checked>
                                                    </td>
                                                    <td>
                                                        <input class="form-check-input" type="checkbox" value="" id="customckeck2">
                                                    </td>
                                                    <td>
                                                        <input class="form-check-input" type="checkbox" value="" id="customckeck2">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
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