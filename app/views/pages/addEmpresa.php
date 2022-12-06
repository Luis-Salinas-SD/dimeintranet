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
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <form action="">
                                            <section class="d-flex">
                                                <!-- Column 1 -->
                                                <div class="col-6 p-3">
                                                    <form>
                                                        <div class="mb-3">
                                                            <label for="nombre" class="form-label">Nombre o Razon Social</label>
                                                            <input type="text" id="simpleinput" class="form-control" placeholder="Nombre o Razon Social">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="email" class="form-label">Correo Electrónico</label>
                                                            <input type="mail" id="simpleinput" class="form-control" placeholder="Correo Electrónico">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="calle" class="form-label">Calle</label>
                                                            <input type="text" id="simpleinput" class="form-control" placeholder="Calle">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="noExt" class="form-label">No. Interior</label>
                                                            <input type="number" id="simpleinput" class="form-control" placeholder="No. Interior">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="ciudad" class="form-label">Ciudad</label>
                                                            <input type="text" id="simpleinput" class="form-control" placeholder="Ciudad">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="pais" class="form-label">País</label>
                                                            <input type="text" id="simpleinput" class="form-control" placeholder="País">
                                                        </div>
                                                    </form>
                                                </div>
                                                <!-- end col -->
                                                <!-- Column 2 -->
                                                <div class="col-6 p-3">
                                                    <div class="mb-3">
                                                        <label for="rfc" class="form-label">RFC</label>
                                                        <input type="text" id="" class="form-control" placeholder="RFC">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="tel" class="form-label">Número de Teléfono</label>
                                                        <input type="tel" id="" class="form-control" placeholder="Número de Teléfono">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="noExt" class="form-label">Número Exterior</label>
                                                        <input type="number" id="" class="form-control" placeholder="Número Exterior">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="col" class="form-label">Colonia</label>
                                                        <input type="text" id="" class="form-control" placeholder="Colonia">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="edo" class="form-label">Estado</label>
                                                        <input type="text" id="" class="form-control" placeholder="Estado">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="CP" class="form-label">Código Postal</label>
                                                        <input type="text" id="" class="form-control" placeholder="Código Postal">
                                                    </div>
                                                </div>
                                            </section>
                                            <!-- end col -->
                                            <div class="col-12 px-3">
                                                <section>
                                                    <h3 class="text-center">Producción</h3>
                                                    <br>
                                                    <div class="d-flex">
                                                        <div class="mb-3 col-6 px-3">
                                                            <label for="apiKey" class="form-label">Información de API Key</label>
                                                            <input type="number" id="" class="form-control" placeholder="Api Key">
                                                        </div>
                                                        <div class="mb-3 col-6 px-3">
                                                            <label for="apiSecret" class="form-label">Información de API Secret Key</label>
                                                            <input type="number" id="" class="form-control" placeholder="Secret Key">
                                                        </div>
                                                    </div>
                                                </section>
                                                <section>
                                                    <h3 class="text-center">Test</h3>
                                                    <br>
                                                    <div class="d-flex">
                                                        <div class="mb-3 col-6 px-3">
                                                            <label for="apiKey" class="form-label">Información de API Key</label>
                                                            <input type="number" id="" class="form-control" placeholder="Api Key">
                                                        </div>
                                                        <div class="mb-3 col-6 px-3">
                                                            <label for="apiSecret" class="form-label">Información de API Secret Key</label>
                                                            <input type="number" id="" class="form-control" placeholder="Secret Key">
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                            <div class="col-12 text-center">
                                                <button type="submit" class="btn btn-success waves-effect waves-light col-4  col-md-2 col-sm-4 m-2">
                                                    Enviar
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
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