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
                        <h1>Nombre Cliente</h1>
                        <!-- Filtros search init-->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Nombre de la Empresa: Dime Prueba</h4>
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>Contacto</th>
                                                    <th>Dirección</th>
                                                    <th>Teléfono</th>
                                                    <th>Email</th>
                                                    <th>Estado Actual </th>
                                                    <th>Fecha de Registro </th>
                                                    <th>Fecha de Actualización</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Karina Guzman</td>
                                                    <td>Toluca</td>
                                                    <td>7226293176</td>
                                                    <td>pi1210746g@gmail.com</td>
                                                    <td>Activo </td>
                                                    <td>19 DE OCTUBRE DE 2016 </td>
                                                    <td>04 DE JULIO DE 2018</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="alert alert-danger my-3" role="alert">
                                        <i class="mdi mdi-block-helper me-2"></i> No tienes datos de <strong>Facturación</strong>
                                        <button type="button" class="btn btn-success waves-effect waves-light col-2 mx-1" data-bs-toggle="modal" data-bs-target="#con-close-modal">
                                            <i class="mdi mdi-book-plus-outline me-2"></i>
                                            Agregar Datos de Facturación
                                        </button>
                                    </div>
                                    <!-- Modal Formulario init -->
                                    <div id="con-close-modal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Datos de Facturación : Cliente</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="" class="m-2">
                                                    <ul class="nav nav-tabs">
                                                        <li class="nav-item">
                                                            <a href="#principal" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                                Datos Fiscales Obligatorios.
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="#optional" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                                Opcional
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div class="tab-pane active" id="principal">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">RFC</label>
                                                                        <input type="text" id="rfc" class="form-control">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Código Postal</label>
                                                                        <input type="number" id="cp" class="form-control">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label class="form-label">E-mail para envío de documentos CFDI</label>
                                                                        <input type="mail" id="mail" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Razón Social</label>
                                                                        <input type="text" id="rs" class="form-control">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Regimen Físcal</label>
                                                                        <select class="form-select" id="rf">
                                                                            <option value="select">Selecciona una opción</option>
                                                                            <option value="op2">R1</option>
                                                                            <option value="op3">R2</option>
                                                                            <option value="op4">R3</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane show" id="optional">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Calle</label>
                                                                        <input type="text" id="calle" class="form-control">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Número Interior</label>
                                                                        <input type="number" id="noInt" class="form-control">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Ciudad/Delegación</label>
                                                                        <input type="mail" id="ciudad" class="form-control">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Estado</label>
                                                                        <input type="mail" id="estado" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Número Exterior</label>
                                                                        <input type="text" id="noExt" class="form-control">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Colonia</label>
                                                                        <select class="form-select" id="colonia">
                                                                            <option value="select">Selecciona una opción</option>
                                                                            <option>Col 1</option>
                                                                            <option>Col 2</option>
                                                                            <option>Col 3</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label class="form-label">Localidad</label>
                                                                        <input type="text" id="localidad" class="form-control">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label for="example-select" class="form-label">País</label>
                                                                        <select class="form-select" id="pais">
                                                                            <option value="select">Selecciona una opción</option>
                                                                            <option>México</option>
                                                                            <option>Canadá</option>
                                                                            <option>EUA</option>
                                                                            <option>Colombia</option>
                                                                            <option>Ecuador</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                            Guardar
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Formulario fin -->
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