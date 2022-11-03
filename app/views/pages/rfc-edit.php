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
                        <h1>Editar Cliente</h1>
                        <!-- Filtros search init-->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Nombre de la Empresa: Dime Prueba</h4>
                                    <form action="" class="m-2">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="principal">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="mb-3">
                                                            <label class="form-label">Nombre de la Empresa</label>
                                                            <input type="text" id="empresa" class="form-control">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Contacto</label>
                                                            <input type="text" id="contact" class="form-control">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Dirección</label>
                                                            <input type="text" id="adress" class="form-control">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Teléfono</label>
                                                            <input type="text" id="tel" class="form-control">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Email</label>
                                                            <input type="email" id="tel" class="form-control">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="form-label">Tipo de Cliente</label>
                                                            <select class="form-select" id="colonia">
                                                                <option value="select">Selecciona una opción</option>
                                                                <option>Cliente</option>
                                                                <option>Prospecto</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3 form-check form-check-info">
                                                            <input class="form-check-input" type="checkbox" value="" id="client-check">
                                                            <label class="form-check-label" for="customckeck2">
                                                                Cliente a credito
                                                            </label>
                                                        </div>
                                                        <div id="token" style="display: none;">
                                                            <div class="mb-3">
                                                                <label for="field-3" class="form-label">Código de credito</label>
                                                                <input type="text" class="form-control" id="codigo" placeholder="Código de credito">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Guardar</button>
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div class="card card-draggable ui-sortable-handle">
                                                            <div class="card-body">
                                                                <h4 class="card-title bg-blue">Card title</h4>
                                                                <p class="card-text">Some quick example text to build on the card title and make
                                                                    up the bulk of the card's content.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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