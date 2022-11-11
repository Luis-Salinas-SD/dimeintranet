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
                <!--! Empresa 1 -->
                <div class="container-fluid">
                    <div class="row">
                        <h1>Dominios</h1>
                        <!--# Button - Add client -->
                        <button type="button" class="btn btn-success waves-effect waves-light col-4  col-md-2 col-sm-4 m-2" data-bs-toggle="modal" data-bs-target="#con-close-modal">
                            <i class="mdi mdi-server-plus"></i>
                            Nuevo Dominio
                        </button>
                        <!--! Modal Formulario init -->
                        <div id="con-close-modal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                            <?php include('../includes/modals/addDomain.php') ?>
                        </div>

                        <!-- Modal Formulario fin -->
                        <!-- Filtros search init-->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Filtros</h4>
                                    <form class="app-search col-11 mb-2">
                                        <div class="app-search-box">
                                            <div class="input-group">
                                                <div class="col-8 d-flex me-3">
                                                    <input type="text" class="form-control" placeholder="Buscar aqui" id="top-search">
                                                    <button class="btn btn-info input-group-text" type="submit">
                                                        <i class="fe-search"></i>
                                                    </button>
                                                </div>
                                                <div class="col-3">
                                                    <select class="form-select me-2" aria-label="Default select example">
                                                        <option selected="">Seleccionar un servidor</option>
                                                        <option value="1">dimenet.com.mx</option>
                                                        <option value="2">suwebnet.com.mx</option>
                                                        <option value="3">dime.pro</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </form>

                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead class="table-dark">
                                                <tr class="text-center">
                                                    <th>Dominio</th>
                                                    <th>Cliente</th>
                                                    <th>Servidor</th>
                                                    <th>Contrato</th>
                                                    <th>Servicios</th>
                                                    <th>Detalles</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="text-center">
                                                    <td>http://revistamexiconoce.com</td>
                                                    <td>ABRIL ESTEVEZ</td>
                                                    <td>dimenet.com.mx</td>
                                                    <td>Pendiente</td>
                                                    <td>
                                                        <label style="background: orange; color: white; padding: 5px;">
                                                            <i class="mdi mdi-alert"></i>
                                                            Web Standard Por Vencer en 10 día(s)
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <a data-bs-toggle="tooltip" title="Detalles" href="./dominio-details.php" class="btn btn-info">
                                                            <i class="fa fa-eye"></i>
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