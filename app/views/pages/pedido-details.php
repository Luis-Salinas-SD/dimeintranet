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
                        <h1>Detalles del pedido</h1>
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
                                    <span class="fs-3 my-4">Nombre de la Empresa:
                                        <b>Dimek</b>
                                    </span>
                                    <div class="box-body table-responsive">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Contacto</th>
                                                    <th>Dirección</th>
                                                    <th>Teléfono</th>
                                                    <th>Email</th>
                                                    <th>Estado Actual</th>
                                                    <th>Fecha de Registro</th>
                                                    <th>Fecha de Actualización</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        Sergio Sanabria
                                                    </td>
                                                    <td>México</td>
                                                    <td>7222155399</td>
                                                    <td>impresosgraficoscrearte@hotmail.com</td>
                                                    <td>

                                                        Activo

                                                    </td>
                                                    <td>30 DE OCTUBRE DE 2018</td>
                                                    <td>28 DE MARZO DE 2022</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <hr>

                                    <div class="box-body">
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
                                        <hr>
                                        <h5>Seguimiento :
                                            <a href="#" class="btn btn-primary btn-sm" style="float:right">Nueva Observación</a>
                                        </h5><br>
                                        <div class="form-observacion" style="display: block;">
                                            <input type="hidden" value="https://midime.com.mx/dime/seguimiento" id="URLObservaciones">
                                            <input id="pedido_id" name="pedido_id" type="hidden" value="556">
                                            <input id="_token_observacion" name="_token_observacion" type="hidden" value="6qOCXTGfw1y5xM7Fqcg8dTl75oswguE6Ba5uv8P1">
                                        </div>

                                        <br>
                                        <div>
                                            <ul>
                                                <li class="d-flex">
                                                    <i class="mdi mdi-calendar"></i>
                                                    <span> 03 DE MAYO DE 2022 - 10:58:31</span>
                                                    &nbsp;
                                                    <p class="fw-bold">Ana Karla Vara: 27/ 04: Se proporciono home actualizado. En espera de comentarios.</p>
                                                </li>
                                            </ul>
                                        </div>

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