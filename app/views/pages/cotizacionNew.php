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
                                    <div class="text-end my-3">
                                        <button class="btn btn-success" onclick="addFila()" data-bs-toggle="tooltip" title="Agregar item">
                                            <i class="mdi mdi-beaker-plus"></i>
                                        </button>
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
                                                    <th>ACCIÓN</th>
                                                </tr>
                                            </thead>
                                            <tbody id="bodyTable">
                                                <tr>
                                                    <td>
                                                        <input type="number" name="" id="" class="form-control" placeholder="Cantidad">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="" id="" class="form-control" placeholder="Nombre del Articulo">
                                                    </td>
                                                    <td>
                                                        <input type="text" name="" id="" class="form-control" placeholder="Características">
                                                    </td>
                                                    <td>
                                                        <input type="number" name="" class="form-control" id="" placeholder="Precio Unitario">
                                                    </td>
                                                    <td>$0.00</td>
                                                    <td>&nbsp;</td>
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
                                    <section class="d-flex flex-wrap justify-content-around align-items-center">
                                        <div>
                                            <div class="form-check mb-2 form-check-dark">
                                                <label class="form-check-label" for="customckeck9">El precio no incluye diseño</label>
                                                <input class="form-check-input" type="checkbox" value="" id="customckeck9" checked="">
                                            </div>
                                        </div>
                                        <div>
                                            <div>
                                                <h4>
                                                    <b>Formas de pago</b>
                                                </h4>
                                            </div>
                                            <div class="d-flex flex-wrap">
                                                <div>
                                                    <div class="form-check mb-2 form-check-dark">
                                                        <label class="form-check-label" for="customckeck9">De contado</label>
                                                        <select name="" id="" class="form-select">
                                                            <option value="" selected disabled>- Selecciona una opción -</option>
                                                            <option value="">Opcion 1</option>
                                                            <option value="">Opcion 2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="form-check mb-2 form-check-dark">
                                                        <label class="form-check-label" for="customckeck9">A crédito</label>
                                                        <select name="" id="" class="form-select">
                                                            <option value="" selected disabled>- Selecciona una opción -</option>
                                                            <option value="">Opcion 1</option>
                                                            <option value="">Opcion 2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="form-check mb-2 form-check-dark">
                                                        <label class="form-check-label" for="customckeck9">Tiempos de Entrega (días)</label>
                                                        <select name="" id="" class="form-select">
                                                            <option value="" selected disabled>- Selecciona una opción -</option>
                                                            <option value="">Opcion 1</option>
                                                            <option value="">Opcion 2</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </section>
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
    <!-- Scripts rightbar -->
    <?php include('../includes/rightbar.php') ?>
    <!--Scripts  dashboard -->
    <?php include('../includes/scriptsDashboard.php'); ?>
    <!-- Script para Agregar y Eliminar filas en la tabla -->
    <?php include('../includes/modals/addCotizacion.php') ?>

</body>

</html>