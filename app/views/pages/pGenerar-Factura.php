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
                <div class="container-fluid">
                    <div class="row">
                        <h1>Verifica la Información </h1>
                        <!-- Filtros search init-->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">

                                    <table class="table table-bordered table-condensed table-striped ng-table-responsive">
                                        <thead>
                                            <tr>
                                                <td class="hidden-xs">Número de Pedido: </td>
                                                <td data-title="'Número de Pedido'" data-title-text="Número de Pedido" colspan="2">DOPDOP78232601</td>
                                            </tr>
                                            <tr>
                                                <td class="hidden-xs">Cliente: </td>
                                                <td data-title="'Cliente'" data-title-text="Cliente" colspan="2">IVAN ARTURO CRUZ</td>
                                            </tr>
                                            <tr>
                                                <td class="hidden-xs">Razón Social que Factura:</td>
                                                <td data-title="'Razón Social'" data-title-text="Razón Social" colspan="2">DIME ESTUDIO DE DISEÑO, S.A. DE C.V. (DED171206927)</td>
                                            </tr>
                                            <tr>
                                                <td class="hidden-xs">Tipo de CFDI: </td>
                                                <td>
                                                    <select class="form-control" data-placeholder="Tipo CFDI" id="tipo_cfdi"">
                                                        <option value="" selected disabled>- Selecciona una opción -</option>
                                                        <option value="" >Adquisición de mercancias</option>
                                                        <option value="">Gastos en general</option>
                                                        <option value="">Por definir</option>
                                                    </select>
                                                </td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class=" hidden-sm hidden-xs">
                                                <td>Producto</td>
                                                <td>Catálogo SAT</td>
                                            </tr>
                                            <tr>
                                                <td data-title="'Producto'" data-title-text="Producto">Web Standard (saludalmil.com)</td>
                                                <td data-title="'Catálogo SAT'" data-title-text="Catálogo SAT">
                                                    <input type="text" maxlength="10" id="clave_sat" name="clave_sat" value="81112103" data-item="2601" class="form-control clave_sat">
                                                </td>
                                            </tr>
                                            </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="3" class="text-center">
                                                    <input type="hidden" value="https://midime.com.mx/dime/facturarordendepago/eyJpdiI6IkRRYnp4KzZsMlpEM2xEMHNvd0VIeXc9PSIsInZhbHVlIjoibEkwSDB1SWlDQnpqeGNVcm9hYmRSdz09IiwibWFjIjoiNGU1ZDZjZjVhN2NiMTllYTAzMDk1ZGZmMDE3MGFiNzlmNWVhYTkxNzgxOGEyZjRiYTBhZjA0NTM2ODA1MjdjYyJ9" id="URLactualizarFactura">
                                                    <button class="btn btn-primary" onclick="javascript:actualizarinfoClientes(); return false;">Facturar</button>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>


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