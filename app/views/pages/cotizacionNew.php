<!DOCTYPE html>
<html lang="es">
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
                        <h1>Nueva Cotización: Dime Estudio de Diseño</h1>
                        <!-- Filtros search init-->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="mt-0 header-title">Cotización : INSTITUTO TECOMENSE DE ESTUDIOS SUPERIORES LIC. BENITO JUÁREZ, A.C.</h3>
                                    <div class="my-3">
                                        <label for="" class="form-label">Empresa</label>
                                        <select name="" id="" class="form-control">
                                            <option value=""> - Selecciona una opción - </option>
                                            <option value="">Empresa 1</option>
                                            <option value="">Empresa 2</option>
                                        </select>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th>CANTIDAD</th>
                                                    <th>ARTICULO</th>
                                                    <th>CARACTERÍSTICAS</th>
                                                    <th>PRECIO UNITARIO</th>
                                                    <th>IMPORTE</th>
                                                    <th>IMPORTE CON IVA</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <tr>
                                                    <td>
                                                        <input type="number" name="" id="" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="" id="" class="form-control" placeholder="Nombre del Articulo">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="" id="" class="form-control" placeholder="Nombre del Articulo">
                                                    </td>
                                                    <td>
                                                        <input type="number" name="" class="form-control" id="">
                                                    </td>
                                                    <td>$0.00</td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="4" style="text-align: right">SUB TOTAL : </td>
                                                    <td>$0.00</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" style="text-align: right"> I.V.A</td>
                                                    <td>$0.00</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" style="text-align: right"> TOTAL</td>
                                                    <td>$0.00</td>
                                                    <td></td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div>
                                        <b>El precio no incluye diseño</b>
                                    </div>
                                    <div>
                                        <br> *** <strong>60% de anticipo y 40% restante a contra entrega</strong><br>
                                        <strong>*** Esta cotización tiene una vigencia de 20 días.</strong>
                                    </div>
                                    <div class="text-center">
                                        <strong>ELABORÓ :</strong> Roberto Campiran
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