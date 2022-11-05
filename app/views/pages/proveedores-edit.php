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
                        <h1>Modificar Proveedor</h1>
                        <!-- Contenido -->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
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