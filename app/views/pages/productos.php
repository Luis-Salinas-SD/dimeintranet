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
                        <h1> Productos</h1>
                        <button type="button" class="btn btn-success waves-effect waves-light col-4  col-md-2 col-sm-4 m-2" data-bs-toggle="modal" data-bs-target="#con-close-modal">
                            Nuevo Producto
                        </button>
                        <!-- Modal Formulario init -->
                        <div id="con-close-modal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Nuevo Producto</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="d-flex">
                                        <form class="col-7">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="field-1" class="form-label">
                                                                División
                                                            </label>
                                                            <select name="" id="" class="form-select">
                                                                <option value="">Div 1</option>
                                                                <option value="">Div 2</option>
                                                                <option value="">Div 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="field-2" class="form-label">Categoría</label>
                                                            <select name="" id="" class="form-select">
                                                                <option value="">cat 1</option>
                                                                <option value="">cat 2</option>
                                                                <option value="">cat 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="field-2" class="form-label">Unidad de Medida</label>
                                                            <select name="" id="" class="form-select">
                                                                <option value="">medida 1</option>
                                                                <option value="">medida 2</option>
                                                                <option value="">medida 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>

                                                <!-- Mostrar Campos ocultos -->
                                                <div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label for="field-3" class="form-label">Producto</label>
                                                                <input type="text" class="form-control" id="" placeholder="Producto" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label for="field-3" class="form-label">Id del Woocomerce</label>
                                                                <input type="text" class="form-control" id="" placeholder="Id del Woocomerce" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label for="field-3" class="form-label">Descripción Corta</label>
                                                                <input type="text" class="form-control" id="" placeholder="Descripción Corta" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label for="field-3" class="form-label">Descripción Larga</label>
                                                                <input type="text" class="form-control" id="" placeholder="Descripción Larga" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label for="field-3" class="form-label">Foto del Producto (600 x 600)</label>
                                                                <input type="file" id="example-fileinput" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label for="field-3" class="form-label">Precio Total</label>
                                                                <input type="text" class="form-control" id="" placeholder="Precio Total" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Guardar</button>
                                            </div>
                                        </form>
                                        <div>
                                            <h1>imagen</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Formulario fin -->
                        <!-- Filtros search init-->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>Producto</th>
                                                    <th>Precio</th>
                                                    <th>Unidad</th>
                                                    <th>División</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>Plan De Logotipo Standard </th>
                                                    <td>$4,000.00 </td>
                                                    <td>Unidad de servicio </td>
                                                    <td>División</td>
                                                    <td>

                                                        <button type="button" class="btn btn-info waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#con-close-modal-2">
                                                            <i class="fa fa-edit"></i>
                                                        </button>
                                                        <a data-bs-toggle="tooltip" title="Desactivar" href="#" class="btn btn-danger">
                                                            <i class="fa fa-ban"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>


                        </div>
                        <!-- Filtros search fin-->
                        <!-- Modal Formulario init -->
                        <div id="con-close-modal-2" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Editar Producto</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="d-flex">
                                        <form class="col-7">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="field-1" class="form-label">
                                                                División
                                                            </label>
                                                            <select name="" id="" class="form-select">
                                                                <option value="">Div 1</option>
                                                                <option value="">Div 2</option>
                                                                <option value="">Div 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="field-2" class="form-label">Categoría</label>
                                                            <select name="" id="" class="form-select">
                                                                <option value="">cat 1</option>
                                                                <option value="">cat 2</option>
                                                                <option value="">cat 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="field-2" class="form-label">Unidad de Medida</label>
                                                            <select name="" id="" class="form-select">
                                                                <option value="">medida 1</option>
                                                                <option value="">medida 2</option>
                                                                <option value="">medida 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>

                                                <!-- Mostrar Campos ocultos -->
                                                <div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label for="field-3" class="form-label">Producto</label>
                                                                <input type="text" class="form-control" id="" placeholder="Producto" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label for="field-3" class="form-label">Id del Woocomerce</label>
                                                                <input type="text" class="form-control" id="" placeholder="Id del Woocomerce" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label for="field-3" class="form-label">Descripción Corta</label>
                                                                <input type="text" class="form-control" id="" placeholder="Descripción Corta" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label for="field-3" class="form-label">Descripción Larga</label>
                                                                <input type="text" class="form-control" id="" placeholder="Descripción Larga" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label for="field-3" class="form-label">Foto del Producto (600 x 600)</label>
                                                                <input type="file" id="example-fileinput" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <label for="field-3" class="form-label">Precio Total</label>
                                                                <input type="text" class="form-control" id="" placeholder="Precio Total" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Guardar</button>
                                            </div>
                                        </form>
                                        <div>
                                            <h1>imagen</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Formulario fin -->

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