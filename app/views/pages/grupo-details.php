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
                        <h1>Acciones Generales</h1>

                        <!-- Filtros search init-->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="col-12 table-responsive">
                                        <h4>Nombre del Grupo : Acciones Generales</h4>
                                        <br>
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Nombre del Permiso</th>
                                                    <th>Valor</th>
                                                    <th>Descripción</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Permite Enviar Datos Bancarios</td>
                                                    <td>clientes.datosbancarios</td>
                                                    <td>Permite Enviar Datos Bancarios</td>
                                                </tr>
                                                <tr>
                                                    <td>Enviar Mensaje Rapido</td>
                                                    <td>clientes.quickemail</td>
                                                    <td>Enviar Mensaje Rapido</td>
                                                </tr>
                                                <tr>
                                                    <td>Detalle de un Pedido</td>
                                                    <td>pedidos.show</td>
                                                    <td>Detalle de un Pedido</td>
                                                </tr>
                                                <tr>
                                                    <td>Calendario de Actividades</td>
                                                    <td>calendario</td>
                                                    <td>Calendario de Actividades</td>
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