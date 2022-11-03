<!DOCTYPE html>
<html lang="en">
<?php include('../includes/headDashboard.php') ?>

<!-- body start -->

<body class="loading"
    data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "size": "default", "showuser": true}, "topbar": {"color": "light"}, "showRightSidebarOnPageLoad": true}'>

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
                        <h1>Renovación de Dominios Web</h1>

                        <!-- Filtros search init-->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Listar Facturas</h4>
                                    <form class="app-search col-4 mt-3 mb-3 col-4 col-lg-4">
                                        <div class="app-search-box">
                                            <div class="input-group">
                                                <select class="form-select me-2" aria-label="Default select example">
                                                    <option selected>Seleccionar</option>
                                                    <option value="1">Ordenes de Pago Sin Facturar</option>
                                                    <option value="2">Ordenes de Pago Facturadas</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>

                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead class="table-dark">
                                                <tr class="text-center">
                                                    <th># De Orden</th>
                                                    <th>Descripción</th>
                                                    <th>Precio Sin IVA</th>
                                                    <th>Fecha de Vencimiento</th>
                                                    <th>Estatus</th>
                                                    <th>Forma Pago</th>
                                                    <th>Estatus Factura	</th>
                                                    <th>Factura</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="text-center">    
                                                    <th scope="row">DOPDOP34032424</th>
                                                    <td>Web Elite (buroarquitectura.mx)</td>
                                                    <td>$4,800.00</td>
                                                    <td>20 DE AGOSTO DE 2022</td>
                                                    <td>Pagado</td>
                                                    <td>Tarjeta de Crédito / Débito	</td>
                                                    <td>Activa</td>
                                                    <td><button type="button" class="btn btn-primary rounded-pill waves-effect waves-light">Generar Factura</button></td>
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