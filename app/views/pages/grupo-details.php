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
                                        <hr>
                                        <h4>Usuarios Registrados en Este Grupo</h4>
                                        <br>

                                        <table class="table table-bordered table-hover table-striped text-center">
                                            <thead>
                                                <tr>
                                                    <th>Nombre</th>
                                                    <th>Email</th>
                                                    <th>Acción</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Julio Gallarza</td>
                                                    <td>no@estaactivoparasiempre.com</td>
                                                    <td>
                                                        <a data-toggle="tooltip" data-placement="top" data-original-title="Eliminar Usuario de Este Grupo" href="" class="btn btn-danger delete">
                                                            <i class="mdi mdi-delete"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Luis Angel</td>
                                                    <td>operacionesdelete@dime.pro</td>
                                                    <td>
                                                        <a data-toggle="tooltip" data-placement="top" data-original-title="Eliminar Usuario de Este Grupo" href="" class="btn btn-danger delete">
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
    <?php include('../includes/scripts.php'); ?>


</body>

</html>