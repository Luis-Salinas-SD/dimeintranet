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
                        <div class="card">
                            <div class="card-body">
                                <div class="alert alert-success"><b>La orden de compra esta en estatus de entregado</b></div>
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <tbody>
                                            <tr>
                                                <th colspan="2">Número de Orden de Compra</th>
                                                <td colspan="2">14</td>
                                            </tr>
                                            <tr>
                                                <th colspan="2">Razon Social (Comprador)</th>
                                                <td colspan="2">DIME ESTUDIO DE DISEÑO, S.A. DE C.V.</td>
                                            </tr>
                                            <tr>
                                                <th colspan="2">Proveedor</th>
                                                <td colspan="2">AGUA PURIFICADA POLARIS, S.A. DE C.V.
                                                    <a class="btn btn-sm btn-primary pull-right" href="./proveedores-details.php" target="_blank">
                                                        <i class="fa fa-eye"></i> Info
                                                    </a>
                                                    &nbsp;&nbsp;
                                                    <input type="hidden" id="urlsendordenescompra" name="urlsendordenescompra" value="">
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th colspan="2">Importe</th>
                                                <td colspan="2">$603.20</td>
                                            </tr>
                                            <tr>
                                                <th colspan="2">Compra generada por:</th>
                                                <td colspan="2">ROBERTO CAMPIRAN</td>
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
                                                <td>Litros Agua Destilada Polaris para Uso de Laboratorio e Industrial. A nivel Porrón Industrial (Líquido), L.A.B. en Planta Polaris (Toluca, Méx.)</td>
                                                <td>40</td>
                                                <td>$10.00</td>
                                                <td>$400.00</td>
                                            </tr>
                                            <tr>
                                                <td>Porrones de Plástico HD con tapa-rosca, Cap. 20 Lts. C/U)</td>
                                                <td>2</td>
                                                <td>$60.00</td>
                                                <td>$120.00</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="text-right">Subtotal sin IVA:</td>
                                                <td>$520.00</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="text-right">IVA (16):</td>
                                                <td>$83.20</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="text-right">Total a pagar:</td>
                                                <td>$603.20</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="text-right">Total pagado:</td>
                                                <td>$603.20</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="text-right">Falta Por Pagar:</td>
                                                <td>$0.00</td>
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
                                                <td>18</td>
                                                <td>$603.20</td>
                                                <td>
                                                    No aplica
                                                </td>
                                                <td>Transferencia electrónica de fondos</td>
                                                <td>ROBERTO CAMPIRAN</td>
                                                <td>26 DE JUNIO DE 2018</td>
                                                <td></td>
                                                <td>
                                                    <strong>
                                                        El importe fue pagado el 27 DE JUNIO DE 2018<br>
                                                        Usuario: ROBERTO CAMPIRAN
                                                    </strong><br>
                                                    <a onclick="javascript:solicitar_factura(this); return false;" href="https://midime.com.mx/dime/pagoordencomprastatus/eyJpdiI6Ik1CZVVzb1wvc2VsU05wTUFCRm5mTGNBPT0iLCJ2YWx1ZSI6IktJOTJ2MlA2YWN1bmdcL2pEVzFYdk9nPT0iLCJtYWMiOiI1MmNiZThjZjBiMGVjMThjNzk2NWJmNTJhM2UxMzMxM2RiOTg4MmZiMDJjNDUzZTY1YTc5OWNiM2Y3NDI4YTRmIn0=" class="btn btn-default" target="_blank"><i class="fa fa-credit-card"></i> Asociar Factura</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="8">
                                                    <div class="alert alert-success text-center">PAGADO</div>
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