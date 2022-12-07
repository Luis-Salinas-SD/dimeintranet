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
                        <h1>#2227 - INSTITUTO TECOMENSE DE ESTUDIOS SUPERIORES LIC. BENITO JUÁREZ, A.C.</h1>
                        <!-- Filtros search init-->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="mt-0 header-title">Cotización : INSTITUTO TECOMENSE DE ESTUDIOS SUPERIORES LIC. BENITO JUÁREZ, A.C.</h3>
                                    <button type="button" class="btn btn-info waves-effect waves-light my-2">
                                        <span class="btn-label"><i class="mdi mdi-printer"></i></span>
                                        Re-enviar Cotización
                                    </button>
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
                                                    <td>1</td>
                                                    <td>Servicio De Naming</td>
                                                    <td>Texto Descriptivo aquí</td>
                                                    <td>$3,879.31</td>
                                                    <td>$3,879.31</td>
                                                    <td>$4,500.00</td>

                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Plan De Logotipo Identidad</td>
                                                    <td><strong>Propuestas</strong>
                                                        Se Presentaran Hasta 4 Propuestas En Formatos De Entrega De 1 Por Cada Ocasión Para Su Revisión.

                                                        <strong>Tipografía</strong>
                                                        Se Hará Entrega De La Fuente Tipográfica Con La Cual Está Compuesto El Logotipo Para Su Aplicación A Usos Diversos O Posteriores.
                                                    </td>
                                                    <td>$12,300.00</td>
                                                    <td>$12,300.00</td>
                                                    <td>$14,268.00</td>

                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Página Web Pro</td>
                                                    <td>Texto Descriptivo aquí</td>
                                                    <td>$7,068.97</td>
                                                    <td>$7,068.97</td>
                                                    <td>$8,200.01</td>

                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Plan Integral </td>
                                                    <td>Texto Descriptivo aquí</td>
                                                    <td>$19,761.03</td>
                                                    <td>$19,761.03</td>
                                                    <td>$22,922.79</td>

                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="4" style="text-align: right">SUB TOTAL : </td>
                                                    <td>$43,009.31</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" style="text-align: right"> I.V.A</td>
                                                    <td>$6,881.49</td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="4" style="text-align: right"> TOTAL</td>
                                                    <td>$49,890.80</td>
                                                    <td></td>
                                                </tr>
                                            </tfoot>
                                        </table>
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