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
                <h2>Nueva Orden de Compra</h2>
                <!-- Formulario -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- Formulario init -->
                                <form action="" method="post">
                                    <!-- select -->
                                    <div class="row">
                                        <div class="mb-3 col-6">
                                            <label for="example-select" class="form-label">
                                                Selecciona un Proveedor
                                            </label>
                                            <select class="form-select" id="example-select">
                                                <option selected disabled>Elige un proveedor</option>
                                                <option>1</option>
                                                <option>2</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 col-6">
                                            <label for="example-select" class="form-label">
                                                Selecciona un Comprador
                                            </label>
                                            <select class="form-select" id="example-select">
                                                <option selected disabled>Elige un comprador</option>
                                                <option>1</option>
                                                <option>2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- buttons -->
                                    <div class="row text-end">
                                        <div class="col-12">
                                            <button type="button"
                                                class="btn btn-info rounded-pill waves-effect waves-light m-2">
                                                <span class="btn-label"><i class="mdi mdi-sticker-plus-outline"></i>
                                                </span>Agregar item
                                            </button>
                                        </div>
                                    </div>
                                    <!-- table -->
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>CANTIDAD</th>
                                                <th>DESCRIPCIÓN</th>
                                                <th>P/U Sin IVA</th>
                                                <th>SUBTOTAL</th>
                                                <th>ACCIONES</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <input type="number" name="cantidad[]" min="1" class="form-control"
                                                        required>
                                                </td>
                                                <td>
                                                    <textarea name="" id="" cols="10" rows="1" placeholder="Descripción"
                                                        class="form-control"></textarea>
                                                </td>
                                                <td>
                                                    <input type="number" name="cantidad[]" min="1" class="form-control"
                                                        required>
                                                </td>
                                                <td>
                                                    <span>$ 0.00</span>
                                                </td>
                                                <td>
                                                    &nbsp;
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr class="text-end">
                                                <th colspan="3">Subtotal</th>
                                                <td>...</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                            <tr class="text-end">
                                                <th colspan="3">Total</th>
                                                <td>...</td>
                                                <td>&nbsp;</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <div class="form-group text-center">

                                        <button type="button" class="btn btn-info rounded-pill waves-effect waves-light">
                                                        Enviar O.C<span class="btn-label-right"><i class="fe-send"></i></span>
                                        </button>
                                        <button type="button" class="btn btn-success rounded-pill waves-effect waves-light">
                                                        Guardar<span class="btn-label-right"><i class="mdi mdi-check-all"></i></span>
                                        </button>
                                        <button type="button" class="btn btn-warning rounded-pill waves-effect waves-light">
                                                        Imprimir
                                                <span class="btn-label-right"><i class="fe-printer"></i></span>
                                        </button>
                                        <button type="button" class="btn btn-danger rounded-pill waves-effect waves-light">
                                                        Cancelar
                                                <span class="btn-label-right"><i class="fe-x-circle"></i></span>
                                        </button>
                                    </div>
                                </form>
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