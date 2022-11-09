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
                                <h2>Información del Servidor dime.pro</h2>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-condensed table-hover table-striped">
                                        <tbody>
                                            <tr>
                                                <th>Nombre del Servidor</th>
                                                <td>dime.pro</td>
                                                <th>Dirección IP</th>
                                                <td>198.1.94.228</td>
                                            </tr>
                                            <tr>
                                                <th>DNS</th>
                                                <td>
                                                    ns1.dime.pro &nbsp; &nbsp; &nbsp; 198.1.94.228<br>
                                                    ns2.dime.pro &nbsp; &nbsp; &nbsp; 198.1.94.228<br>
                                                </td>
                                                <th>Estatus</th>
                                                <td>Activo</td>
                                            </tr>
                                            <tr>
                                                <th>Nombre de Usuario</th>
                                                <td><a href="#" class="btn btn-default" onclick="javascript:servidor.solicitar_contrasenia(); return false;"><i class="fa fa-eye"></i> Ver Datos del Servidor</a></td>
                                                <th>Contraseña</th>
                                                <td>
                                                    <input name="_token" type="hidden" value="">
                                                    <input type="hidden" value="" id="check_password">
                                                    <input type="hidden" value="" id="id_servicio">
                                                    <a href="#" class="btn btn-default" onclick="javascript:servidor.solicitar_contrasenia(); return false;">
                                                        <i class="fa fa-eye"></i> Ver Datos del Servidor
                                                    </a>
                                                    <button type="button" class="btn btn-info btn-xs" id="ajax-alert">
                                                        Lanzar Sweet
                                                    </button>
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