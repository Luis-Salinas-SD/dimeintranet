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
                        <h1>Datos del pedido</h1>
                        <button type="button" class="btn btn-success waves-effect waves-light col-4  col-md-2 col-sm-4 m-2" data-bs-toggle="modal" data-bs-target="#con-close-modal">
                            <i class="mdi mdi-cart-plus"></i>
                            Nuevo Pedido
                        </button>
                        <!-- Modal Formulario init -->
                        <div id="con-close-modal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Nuevo Pedido</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="field-1" class="form-label">
                                                            Seleccione Empresa
                                                        </label>
                                                        <select class="form-select" id="seleccion">
                                                            <option selected=""> - Selecciona una opción - </option>
                                                            <option value="1">Empresa 1</option>
                                                            <option value="2">Empresa 2</option>
                                                            <option value="3">Empresa 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="field-2" class="form-label">Cliente</label>
                                                        <input type="text" class="form-control" id="client" placeholder="cliente" required>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="col-12" id="showForm">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Guardar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Formulario fin -->
                        <!-- Filtros search init-->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <section class="d-flex justify-content-between align-items-center">
                                        <div class="py-2">
                                            <button type="button" class="btn btn-danger rounded-pill waves-effect waves-light">
                                                <i class="mdi mdi-delete"></i>
                                                Cancelar pedido
                                            </button>
                                            <button type="button" class="btn btn-info rounded-pill waves-effect waves-light">
                                                <i class="mdi mdi-block-helper"></i>
                                                Pedido abandonado
                                            </button>
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-success rounded-pill waves-effect waves-light">
                                                <i class="mdi mdi-printer"></i>
                                                Imprimir
                                            </button>
                                        </div>
                                    </section>

                                    <div class="table-responsive mt-3">
                                        <table class="table table-bordered table-condensed table-striped">
                                            <tbody>
                                                <tr>
                                                    <th colspan="3">Número de Pedido</th>
                                                    <td colspan="4">556</td>
                                                </tr>
                                                <tr>
                                                    <th colspan="3">Razon Social (Vendedor)</th>
                                                    <td colspan="4">DIME ESTUDIO DE DISEÑO, S.A. DE C.V. (DED171206927)</td>
                                                </tr>
                                                <tr>
                                                    <th colspan="3">Cliente</th>
                                                    <td colspan="4">SERGIO SANABRIA
                                                        <a class="btn btn-outline-primary waves-effect waves-light" href="" target="_blank">
                                                            <i class="mdi mdi-eye"></i> Info
                                                        </a>
                                                        &nbsp;&nbsp;
                                                        <input type="hidden" id="urlsenddatosbancariospedido" name="">
                                                        <a class="btn btn-outline-dark waves-effect waves-light" href="#">
                                                            <i class="mdi mdi-email"></i> Datos Bancarios
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th colspan="3">Importe</th>
                                                    <td colspan="4">$6,500.00</td>
                                                </tr>
                                                <tr>
                                                    <th colspan="3">Vendedor</th>
                                                    <td colspan="4">ROBERTO CAMPIRAN</td>
                                                </tr>
                                                <tr>
                                                    <th colspan="7" class="text-center">Productos Vendidos</th>
                                                </tr>
                                                <tr>
                                                    <th>Producto</th>
                                                    <th>Fecha de Entrega</th>
                                                    <th>Estatus</th>
                                                    <th>Encargado</th>
                                                    <th>Cantidad</th>
                                                    <th>P. Unitario</th>
                                                    <th>Subtotal</th>
                                                </tr>
                                                <tr>
                                                    <td>Página Web Standard</td>
                                                    <td>31 DE ENERO DE 2019</td>
                                                    <td>Entregado</td>
                                                    <td>MARCOS ROMERO</td>
                                                    <td>1</td>
                                                    <td>$5,603.45</td>
                                                    <td>$5,603.45</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="6" class="text-right">Subtotal sin IVA:</td>
                                                    <td>$5,603.45</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="6" class="text-right">IVA (16%):</td>
                                                    <td>$896.55</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="6" class="text-right">Total a pagar:</td>
                                                    <td>$6,500.00</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="6" class="text-right">Total pagado:</td>
                                                    <td>$0.00</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="6" class="text-right">Falta Por Pagar:</td>
                                                    <td>$6,500.00</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table class="table table-bordered table-condensed ">
                                            <tbody>
                                                <tr>
                                                    <th colspan="9" class="text-center">Pagos Realizados</th>
                                                </tr>
                                                <tr>
                                                    <td class="text-center" colspan="9">NO SE HAN REALIZADO PAGOS</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="9" class="text-center btn-addPago">

                                                        <button class="btn btn-success">
                                                            <i class="mdi mdi-cash"></i>
                                                            Agregar Pago
                                                        </button>

                                                        <button class="btn btn-success">
                                                            <i class="mdi mdi-contactless-payment"></i>
                                                            Generar Orden de Pago
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <hr>

                                    <div class="table-responsive">
                                        <table class="table table-bordered table-condensed table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Producto</th>
                                                    <th>Briefs</th>
                                                    <th>Estatus</th>
                                                    <th>Total Brief</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Página Web Standard</td>
                                                    <td>
                                                        <input type="hidden" id="urlBrief" name="urlBrief">
                                                        <input type="hidden" id="logotipourl" name="logotipourl">
                                                        <input type="hidden" id="namingurl" name="namingurl">
                                                        <button class="btn btn-primary">Brief Suweb</button>
                                                    </td>
                                                    <td>
                                                        Entregado
                                                    </td>
                                                    <td>
                                                        <strong>Total Suweb:</strong>
                                                        <suweb>2</suweb>
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