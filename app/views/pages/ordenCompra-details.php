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
                                <h1>Orden de Compra</h1>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <tbody>
                                            <tr>
                                                <th colspan="2">Número de Orden de Compra</th>
                                                <td colspan="2">21</td>
                                            </tr>
                                            <tr>
                                                <th colspan="2">Razon Social (Comprador)</th>
                                                <td colspan="2">DIME ESTUDIO DE DISEÑO, S.A. DE C.V.</td>
                                            </tr>
                                            <tr>
                                                <th colspan="2">Proveedor</th>
                                                <td colspan="2">DIANA IVETTE MORENO DÍAZ
                                                    <a class="btn btn-sm btn-primary pull-right" href="https://midime.com.mx/dime/proveedores/eyJpdiI6IlJJZURVUzdcL2lueVo0M3QxMmF5Q1wvZz09IiwidmFsdWUiOiJoanlZaGRhY3RUK0VrcFo1NU5lYlFRPT0iLCJtYWMiOiIxMDMzYzM3YjY1MmQxMjczMGYxNjJlMTMwYjdkMzI1ODMzZDZhYTIxNGY5MWYzN2YwOTdjZTY1Mjc5ZWFhMThmIn0=" target="_blank">
                                                        <i class="fa fa-eye"></i> Info
                                                    </a>
                                                    &nbsp;&nbsp;
                                                    <input type="hidden" id="urlsendordenescompra" name="urlsendordenescompra" value="https://midime.com.mx/dime/senddatosficalesorden/eyJpdiI6InlLeEZGOENaNnNCZHRYVnNwQ0NlS0E9PSIsInZhbHVlIjoiNzM4aEJvUmdRMnhmZU9ZY3lzb2YwUT09IiwibWFjIjoiOGU2MDMyZWIxN2ZmYzA0YzY5YTM1ZTNkYjQzMWRjN2FkNzJhNjczMzliNDdiM2RhNmQ3NTEwYmYwMDJmYWQ2YiJ9">
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th colspan="2">Importe</th>
                                                <td colspan="2">$11,020.00</td>
                                            </tr>
                                            <tr>
                                                <th colspan="2">Compra generada por:</th>
                                                <td colspan="2">CRISTIAN MORENO</td>
                                            </tr>
                                            <tr>
                                                <th colspan="4" class="text-center">Productos</th>
                                            </tr>
                                            <tr>
                                                <th>Producto</th>
                                                <th>Cantidad</th>
                                                <th>P. Unitario</th>
                                                <th>Subtotal</th>
                                            </tr>
                                            <tr>
                                                <td>Desarrollo de sistema de producción PR77</td>
                                                <td>1</td>
                                                <td>$4,020.00</td>
                                                <td>$4,020.00</td>
                                            </tr>
                                            <tr>
                                                <td>Modificaciones de sistema de producción Pr77</td>
                                                <td>1</td>
                                                <td>$4,000.00</td>
                                                <td>$4,000.00</td>
                                            </tr>
                                            <tr>
                                                <td>Desarrollo de modulo de importación PR77</td>
                                                <td>1</td>
                                                <td>$1,000.00</td>
                                                <td>$1,000.00</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="text-right">Subtotal sin IVA:</td>
                                                <td>$9,020.00</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="text-right">IVA (16):</td>
                                                <td>$1,443.20</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="text-right">Total a pagar:</td>
                                                <td>$11,020.00</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="text-right">Total pagado:</td>
                                                <td>$5,000.00</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="text-right">Falta Por Pagar:</td>
                                                <td>$6,020.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table class="table table-bordered table-hover table-striped">
                                        <tbody>
                                            <tr>
                                                <th colspan="8" class="text-center">Pagos Realizados</th>
                                            </tr>
                                            <tr>
                                                <td>id de Pago</td>
                                                <td>Pago</td>
                                                <td>IVA</td>
                                                <td>Forma de Pago</td>
                                                <td>Staff</td>
                                                <td>Fecha de Pago</td>
                                                <td>Factura</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td>27</td>
                                                <td>$3,000.00</td>
                                                <td>
                                                    No aplica
                                                </td>
                                                <td>Transferencia electrónica de fondos</td>
                                                <td>ROBERTO CAMPIRAN</td>
                                                <td>07 DE SEPTIEMBRE DE 2018</td>
                                                <td></td>
                                                <td>
                                                    <strong>
                                                        El importe fue pagado el 30 DE ENERO DE 2019<br>
                                                        Usuario: ROBERTO CAMPIRAN
                                                    </strong><br>
                                                    <a href="#" class="btn btn-default" target="_blank"><i class="fa fa-credit-card"></i> Asociar Factura</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>50</td>
                                                <td>$1,000.00</td>
                                                <td>
                                                    $160.00
                                                </td>
                                                <td>Transferencia electrónica de fondos</td>
                                                <td>ROBERTO CAMPIRAN</td>
                                                <td>08 DE MARZO DE 2019</td>
                                                <td></td>
                                                <td>
                                                    <strong>
                                                        El importe fue pagado el 08 DE MARZO DE 2019<br>
                                                        Usuario: ROBERTO CAMPIRAN
                                                    </strong><br>
                                                    <a href="" class="btn btn-default" target="_blank">
                                                        <i class="fa fa-credit-card"></i> Asociar Factura
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>73</td>
                                                <td>$1,000.00</td>
                                                <td>
                                                    $160.00
                                                </td>
                                                <td>Transferencia electrónica de fondos</td>
                                                <td>ROBERTO CAMPIRAN</td>
                                                <td>23 DE ABRIL DE 2019</td>
                                                <td>438C5E34-B8B9-4463-85D9-E</td>
                                                <td>
                                                    <strong>
                                                        El importe fue pagado el 26 DE ABRIL DE 2019<br>
                                                        Usuario: ROBERTO CAMPIRAN
                                                        <br>
                                                        Factura: 438C5E34-B8B9-4463-85D9-E
                                                    </strong><br>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="8"><b>NOTAS: </b><br>ya se pago estoy en espera de su factura - ROBERTO CAMPIRAN<br></td>
                                            </tr>
                                            <tr>
                                                <td colspan="8" class="text-center btn-addPago">
                                                    <button class="btn btn-success">
                                                        <i class="fa fa-dollar"></i> Agregar Pago
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