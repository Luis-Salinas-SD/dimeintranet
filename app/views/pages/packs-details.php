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
                                <h2>Detalles de paquetes</h2>
                                <div class="box-body table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <tbody>
                                            <tr>
                                                <th>Precio : </th>
                                                <td>$4,960.00</td>
                                            </tr>
                                            <tr>
                                                <th>Precio de Renovación : </th>
                                                <td>$1,200.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!--! Segunta tabla  -->
                                <div class="box box-primary">
                                    <div class="box-header d-flex justify-content-between align-items-center">
                                        <h2 class="box-title">Dominios Registrados</h2>
                                        <div class="box-tools pull-right">

                                            <div class="btn-group dropdown">
                                                <button type="button" class="btn btn-primary">Mostrar</button>
                                                <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="mdi mdi-chevron-down"></i>
                                                </button>
                                                <div class="dropdown-menu" style="">
                                                    <a class="dropdown-item" href="#">Hace 1 semana</a>
                                                    <a class="dropdown-item" href="#">Hace 1 mes</a>
                                                    <a class="dropdown-item" href="#">Hace 3 meses</a>
                                                    <a class="dropdown-item" href="#">Hace 6 meses</a>
                                                    <a class="dropdown-item" href="#">Hace 1 año</a>

                                                </div>
                                            </div>
                                            <a href="#" title="Ver Todos" class="btn btn-success "><i class="fa fa-check"></i></a>
                                            <a href="#" title="Ver Inactivos" class="btn btn-danger "><i class="fa fa-ban"></i></a>

                                        </div>
                                    </div>
                                    <div class="box-body table-responsive my-3">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover dataTable">
                                                <thead>
                                                    <tr>
                                                        <th>Nombre del Dominio</th>
                                                        <th>Cliente</th>
                                                        <th>Fecha de Registro</th>
                                                        <th>Fecha de Vigencia</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <td><a href="https://midime.com.mx/carwashecogreen.com" target="_blank">carwashecogreen.com</a></td>
                                                        <td>( Ciao Capelli ) Body Center</td>
                                                        <td>2013-10-23 14:23:18</td>
                                                        <td>2014-10-22 14:23:23</td>
                                                    </tr>

                                                    <tr>
                                                        <td><a href="https://midime.com.mx/farmaciadcecilia.com" target="_blank">farmaciadcecilia.com</a></td>
                                                        <td>Farmacia de Cecilia </td>
                                                        <td>2014-01-05 15:49:05</td>
                                                        <td>2015-01-04 15:48:46</td>
                                                    </tr>

                                                    <tr>
                                                        <td><a href="https://midime.com.mx/ciaocapelli.com.mx" target="_blank">ciaocapelli.com.mx</a></td>
                                                        <td>( Ciao Capelli ) Body Center</td>
                                                        <td>2014-02-04 16:51:58</td>
                                                        <td>2015-02-03 16:51:49</td>
                                                    </tr>

                                                    <tr>
                                                        <td><a href="https://midime.com.mx/fotografiacampiran.com" target="_blank">fotografiacampiran.com</a></td>
                                                        <td>Vídeo y Fotografía Campiran </td>
                                                        <td>2014-09-01 18:11:00</td>
                                                        <td>2015-08-31 18:11:00</td>
                                                    </tr>

                                                    <tr>
                                                        <td><a href="https://midime.com.mx/mdeventos.com.mx" target="_blank">mdeventos.com.mx</a></td>
                                                        <td>MD Eventos</td>
                                                        <td>2015-10-26 13:40:07</td>
                                                        <td>2016-10-16 13:40:28</td>
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