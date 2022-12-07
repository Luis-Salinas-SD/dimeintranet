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
                        <h1>Categorias</h1>
                        <button type="button" class="btn btn-success waves-effect waves-light col-4  col-md-2 col-sm-4 m-2" data-bs-toggle="modal" data-bs-target="#con-close-modal">
                            Nueva Categoria
                        </button>
                        <!-- Modal Formulario init -->
                        <div id="con-close-modal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Agregar Categorias</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="d-flex">
                                        <form class="col-12">
                                            <div class="modal-body">
                                                <div class="row">
                                                    <h3>Categorias de Ingresos</h3>
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="field-1" class="form-label">
                                                                Nombre de la Categoria
                                                            </label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <h3>Categorias de Gastos</h3>
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="field-1" class="form-label">
                                                                Categoría Principal
                                                            </label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="field-1" class="form-label">
                                                                Selecciona Categoria Principal
                                                            </label>
                                                            <select name="" id="" class="form-select">
                                                                <option value="">op1</option>
                                                                <option value="">op2</option>
                                                                <option value="">op3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="field-1" class="form-label">
                                                                Subcategoría
                                                            </label>
                                                            <input type="text" class="form-control">
                                                        </div>
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
                                                    <th>Id</th>
                                                    <th>Categoria</th>
                                                    <th>Tipo</th>
                                                    <th>Estatus</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>1 </th>
                                                    <td>Refrendo web </td>
                                                    <td>Ingreso </td>
                                                    <td>Activo</td>
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
                                        <h4 class="modal-title">Editar Categoria</h4>
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
                                                            <label for="field-2" class="form-label">Nombre de la categoría</label>
                                                            <select name="" id="" class="form-select">
                                                                <option value="">cat 1</option>
                                                                <option value="">cat 2</option>
                                                                <option value="">cat 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="mb-3">
                                                            <label for="field-2" class="form-label">Selecciona la clave del SAT</label>
                                                            <select name="" id="" class="form-select">
                                                                <option value="">medida 1</option>
                                                                <option value="">medida 2</option>
                                                                <option value="">medida 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Guardar</button>
                                            </div>
                                        </form>
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