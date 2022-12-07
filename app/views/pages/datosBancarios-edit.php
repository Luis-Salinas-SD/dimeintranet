<!DOCTYPE html>
<html lang="en">
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
                        <h1>Nuevos Datos Bancarios</h1>
                        <section class="d-flex justify-content-around">
                            <div class="col-4 px-3">
                                <div class="card">
                                    <div class="m-2 body-card">
                                        <div class="box box-primary">
                                            <div class="box-header with-border">
                                                <h3 class="box-title">TRANSFERENCIA ELECTRÔNICA </h3>
                                            </div>
                                            <div>
                                                <div class="my-2">
                                                    <label for="empresa_id" class="form-label">Empresa</label>
                                                    <select class="form-control">
                                                        <option value="" selected="selected"></option>
                                                        <option value="1">ROBERTO MEJIA CAMPIRAN</option>
                                                        <option value="2">DIME ESTUDIO DE DISEÑO, S.A. DE C.V.</option>
                                                    </select>
                                                </div>
                                                <div class="my-2">
                                                    <label for="banco" class="form-label">Nombre del Banco</label>
                                                    <input placeholder="Nombre de Banco" class="form-control" name="banco" type="text" value="" id="banco">
                                                </div>
                                                <div class="my-2">
                                                    <label for="rfc" class="form-label">RFC</label>
                                                    <input placeholder="RFC" class="form-control" name="rfc" type="text" value="" id="rfc">
                                                </div>
                                                <div class="my-2">
                                                    <label for="clabe" class="form-label">Clabe Interbancaria</label>
                                                    <input placeholder="Clabe Interbancaria" class="form-control" name="clabe" type="text" value="" id="clabe">
                                                </div>
                                                <div class="my-2">
                                                    <label for="beneficiario" class="form-label">Nonbre del Beneficiario</label>
                                                    <input placeholder="Nombre del Beneficiario" class="form-control" name="beneficiario" type="text" value="" id="beneficiario">
                                                </div>
                                                <div class="my-2">
                                                    <label for="sucursal" class="form-label">Nonbre de Sucursal</label>
                                                    <input placeholder="Nombre de Sucursal" class="form-control" name="sucursal" type="text" value="" id="sucursal">
                                                </div>
                                                <div class="my-2">
                                                    <label for="metodopago" class="form-label ">Metodo de Pago</label>
                                                    <select class="form-select">
                                                        <option value="1">Efectivo</option>
                                                        <option value="2">Cheque nominativo</option>
                                                        <option value="3">Transferencia electrónica de fondos</option>
                                                        <option value="4">Tarjeta de crédito</option>
                                                        <option value="5">Monedero electrónico</option>
                                                        <option value="6">Dinero electrónico</option>
                                                        <option value="7">Vales de despensa</option>
                                                        <option value="8">Dación en pago</option>
                                                        <option value="9">Pago por subrogación</option>
                                                        <option value="10">Pago por consignación</option>
                                                        <option value="11">Condonación</option>
                                                        <option value="12">Compensación</option>
                                                        <option value="13">Novación</option>
                                                        <option value="14">Confusión</option>
                                                        <option value="15">Remisión de deuda</option>
                                                        <option value="16">Prescripción o caducidad</option>
                                                        <option value="17">A satisfacción del acreedor</option>
                                                        <option value="18">Tarjeta de débito</option>
                                                        <option value="19">Tarjeta de servicios</option>
                                                        <option value="20">Por definir</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 px-3">
                                <div class="card">
                                    <div class="m-2 body-card">
                                        <div class="box box-primary">
                                            <div class="box-header with-border">
                                                <h3 class="box-title">DEPOSITO EN EFECTIVO</h3>
                                            </div>
                                            <div class="box-body">
                                                <div class="my-2">
                                                    <label for="bancoe" class="form-label">Nombre del Banco</label>
                                                    <input placeholder="Nombre de Banco" class="form-control" name="bancoe" type="text" value="" id="bancoe">
                                                </div>
                                                <div class="my-2">
                                                    <label for="rfce" class="form-label">RFC</label>
                                                    <input placeholder="RFC" class="form-control" name="rfce" type="text" value="" id="rfce">
                                                </div>
                                                <div class="my-2">
                                                    <label for="clabee" class="form-label">Número de Cuenta</label>
                                                    <input placeholder="Cuenta" class="form-control" name="clabee" type="text" value="" id="clabee">
                                                </div>
                                                <div class="my-2">
                                                    <label for="beneficiarioe" class="form-label">Nombre del Beneficiario</label>
                                                    <input placeholder="Nombre del Beneficiario" class="form-control" name="beneficiarioe" type="text" value="" id="beneficiarioe">
                                                </div>
                                                <div class="my-2">
                                                    <label for="sucursale" class="form-label">Nombre de Sucursal</label>
                                                    <input placeholder="Nombre de Sucursal" class="form-control" name="sucursale" type="text" value="" id="sucursale">
                                                </div>
                                                <div class="form-check my-2 form-check-success">
                                                    <label for="enviar" class="form-label">Mostar en Envio de Datos Bancarios</label>
                                                    <input class="form-check-input rounded-circle" type="checkbox" value="" id="customckeck11" checked="">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 px-3">
                                <div class="card">
                                    <div class="m-2 body-primary">
                                        <div class="box box-primary">
                                            <div>
                                                <h3 class="box-title">DEPOSITO EN DOLARES AMERICANOS</h3>
                                            </div>
                                            <div class="box-body">
                                                <div class="my-2">
                                                    <label for="bancoint" class="form-label">Banco Intermediario</label>
                                                    <input placeholder="Banco Intermediario" class="form-control" name="bancoint" type="text" value="" id="bancoint">
                                                </div>
                                                <div class="my-2">
                                                    <label for="plaza" class="form-label">Plaza</label>
                                                    <input placeholder="Plaza" class="form-control" name="plaza" type="text" value="" id="plaza">
                                                </div>
                                                <div class="my-2">
                                                    <label for="aba" class="form-label">ABA</label>
                                                    <input placeholder="ABA" class="form-control" name="aba" type="text" value="" id="aba">
                                                </div>
                                                <div class="my-2">
                                                    <label for="swift" class="form-label">SWIFT</label>
                                                    <input placeholder="SWIFT" class="form-control" name="swift" type="text" value="" id="swift">
                                                </div>
                                                <div class="my-2">
                                                    <label for="bbeneficiaro" class="form-label">Banco Beneficiario</label>
                                                    <input placeholder="Banco Beneficiario" class="form-control" name="bbeneficiaro" type="text" value="" id="bbeneficiaro">
                                                </div>
                                                <div class="my-2">
                                                    <label for="cbeneficiario" class="form-label">Cuenta Banco Beneficiario</label>
                                                    <input placeholder="Cuenta Banco Beneficiario" class="form-control" name="cbeneficiario" type="text" value="" id="cbeneficiario">
                                                </div>
                                                <div class="my-2">
                                                    <label for="beneficiariousd" class="form-label">Beneficiario</label>
                                                    <input placeholder="Beneficiario" class="form-control" name="beneficiariousd" type="text" value="" id="beneficiariousd">
                                                </div>
                                                <div class="my-2">
                                                    <label for="clabeusd" class="form-label">CLABE</label>
                                                    <input placeholder="CLABE" class="form-control" name="clabeusd" type="text" value="" id="clabeusd">
                                                </div>
                                                <div class="form-check my-2 form-check-success">
                                                    <label for="enviar" class="form-label">Mostar en Envio de Datos Bancarios</label>
                                                    <input class="form-check-input rounded-circle" type="checkbox" value="" id="customckeck11" checked="">
                                                </div>
                                                <div class="my-2">
                                                    <input type="file" class="form-control">
                                                </div>

                                                <div class="text-center">
                                                    <input class="btn btn-primary" type="submit">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
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