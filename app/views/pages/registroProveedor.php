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
                <!-- Empresa 1 -->
                <div class="container-fluid">
                    <div class="row">
                        <h2>Proveedores</h2>
                        <button type="button" class="btn btn-success waves-effect waves-light col-4  col-md-2 col-sm-4 m-2" data-bs-toggle="modal" data-bs-target="#con-close-modal">Nuevo Proveedor
                        </button>
                        <button type="button" class="btn btn-success waves-effect waves-light col-4  col-md-2 col-sm-4 m-2" data-bs-toggle="modal" data-bs-target="#modla2">Enviar email
                        </button>
                        <!-- Modal Formulario init -->
                        <div id="con-close-modal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Añadir un nuevo Proveedor</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="field-1" class="form-label">Nombre de la
                                                            Empresa</label>
                                                        <input type="text" class="form-control" id="field-1" placeholder="Empresa" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="field-2" class="form-label">Nombre del
                                                            representante</label>
                                                        <input type="text" class="form-control" id="field-2" placeholder="Nombre del representante" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="field-1" class="form-label">Nombre de la persona de
                                                            contacto</label>
                                                        <input type="text" class="form-control" id="field-1" placeholder="Nombre de la persona de contacto" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="field-2" class="form-label">
                                                            Tipo de Persona</label>
                                                        <select class="form-select">
                                                            <option selected disabled>Elige una opción</option>
                                                            <option>Persona Física</option>
                                                            <option>Persona Moral</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="field-1" class="form-label">
                                                            Teléfono de Contacto
                                                        </label>
                                                        <input type="tel" class="form-control" id="field-1" placeholder="Empresa" required pattern="[0-9]{10}"">
                                                    </div>
                                                </div>
                                                <div class=" col-md-6">
                                                        <div class="mb-3">
                                                            <label for="field-2" class="form-label">
                                                                RFC o TAX ID *
                                                            </label>
                                                            <input type="text" class="form-control" id="field-2" placeholder="RFC o TAX ID" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="field-5" class="form-label">Correo</label>
                                                            <input type="email" class="form-control" id="field-5" placeholder="email" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="field-3" class="form-label">Dirección</label>
                                                            <input type="text" class="form-control" id="field-3" placeholder="Dirección" required>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                </div>
                                                <div class="modal-header mb-4">
                                                    <h4 class="modal-title">Información Bancaria</h4>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="field-3" class="form-label">Beneficiario</label>
                                                            <input type="text" class="form-control" placeholder="Beneficiario" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="field-3" class="form-label">Banco</label>
                                                            <input type="text" class="form-control" placeholder="Banco" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="field-3" class="form-label">Plaza</label>
                                                            <input type="text" class="form-control" placeholder="Plaza" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="field-3" class="form-label">Sucursal</label>
                                                            <input type="text" class="form-control" placeholder="Sucursal" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="field-3" class="form-label">Número de
                                                                Cuenta</label>
                                                            <input type="text" class="form-control" placeholder="Número de Cuenta" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="mb-3">
                                                            <label for="field-3" class="form-label">Clave
                                                                Interbancaria</label>
                                                            <input type="text" class="form-control" placeholder="Clave Interbancaria" required>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                            <!--! Button  -->
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Guardar</button>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Modal Formulario fin -->
                        <!-- Modal Formulario  correo init -->
                        <div id="modla2" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Añadir un nuevo Proveedor</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form>
                                        <div class="modal-body">
                                            <div class="row text-center">
                                                <h2>Enviar Formulario de Registro a Proveedor</h2>
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="field-1" class="form-label">
                                                            Correo electrónico:
                                                        </label>
                                                        <input type="email" class="form-control" id="field-1" placeholder="Email" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--! Button  -->
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Enviar</button>
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
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>Razón Social</th>
                                                    <th>Contacto</th>
                                                    <th>Teléfono</th>
                                                    <th>Email</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Facebook</td>
                                                    <td>Yoss</td>
                                                    <td>855 697 6545</td>
                                                    <td>astroboy@dime.com</td>
                                                    <th>
                                                        <a data-bs-toggle="tooltip" title="Detalles" href="./proveedores-details.php" class="btn btn-success">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                        <a data-bs-toggle="tooltip" title="Editar" href="./proveedores-edit.php" class="btn btn-info">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <a data-bs-toggle="tooltip" title="Desactivar" href="#" class="btn btn-danger">
                                                            <i class="fa fa-ban"></i>
                                                        </a>
                                                    </th>
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