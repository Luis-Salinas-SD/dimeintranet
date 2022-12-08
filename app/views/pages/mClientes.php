<!DOCTYPE html>
<html lang="es">
<?php include('../includes/headDashboard.php') ?>

<!-- body start -->

<body class="loading" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "light", "dark": "default", "showuser": true}, "topbar": {"color": "light"}, "showRightSidebarOnPageLoad": true}'>

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
                        <div class="card">
                            <div class="card-body">
                                <h2>Clientes | Mercadotecnia</h2>

                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover text-center">
                                        <thead>
                                            <tr>
                                                <th>Cliente</th>
                                                <th>Número de Encuestas Contestadas</th>
                                                <th>Número de Encuestas Sin Contestar</th>
                                                <th>Acción</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <strong>NATALIA ROCIO HUERTA HERNANDEZ</strong>
                                                </td>
                                                <td>0</td>
                                                <td>5</td>
                                                <td class="text-center">
                                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalClient">
                                                        <i class="fa fa-search-plus"></i>
                                                    </button>

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="modalClient" tabindex="-1" aria-labelledby="modalCliente" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Información de Encuestas</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="col-12">
                                                    <div id="accordion" class="mb-3">
                                                        <div class="card mb-1">
                                                            <div class="card-header m-1" id="headingOne">
                                                                <h5 class="m-0">
                                                                    <a class="text-dark collapsed" data-bs-toggle="collapse" href="#collapseOne" aria-expanded="false">
                                                                        <i class="mdi mdi-help-circle me-1 text-primary"></i>
                                                                        Encuesta del Pedido
                                                                    </a>
                                                                </h5>
                                                            </div>

                                                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-bs-parent="#accordion" style="">
                                                                <div class="card-body">
                                                                    <div class="table table-bordered table-hover table-striped">
                                                                        <table class="table table-bordered table-stripe">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Pregunta</th>
                                                                                    <th>Respuesta</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>¿Como califica la calidad de nuestros productos o servicios?</td>
                                                                                    <td>
                                                                                        Sin Contestar
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>¿Como califica la atención y profesionalismo de nuestro personal?</td>
                                                                                    <td>
                                                                                        Sin Contestar
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>¿Cómo calificaría nuestros tiempos de entrega?</td>
                                                                                    <td>
                                                                                        Sin Contestar
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>¿Como califica nuestra relación calidad – precio?</td>
                                                                                    <td>
                                                                                        Sin Contestar
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>¿Nos recomendaría?</td>
                                                                                    <td>
                                                                                        Sin Contestar
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card mb-1">
                                                            <div class="card-header" id="headingTwo">
                                                                <h5 class="m-0">
                                                                    <a class="text-dark collapsed" data-bs-toggle="collapse" href="#segundo" aria-expanded="false">
                                                                        <i class="mdi mdi-help-circle me-1 text-primary"></i>
                                                                        Encuesta del Pedido
                                                                    </a>
                                                                </h5>
                                                            </div>
                                                            <div id="segundo" class="collapse" aria-labelledby="headingTwo" data-bs-parent="#accordion" style="">
                                                                <div class="card-body">
                                                                    <div class="table table-bordered table-hover table-striped">
                                                                        <table class="table table-bordered table-stripe">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Pregunta</th>
                                                                                    <th>Respuesta</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>¿Como califica la calidad de nuestros productos o servicios?</td>
                                                                                    <td>
                                                                                        Sin Contestar
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>¿Como califica la atención y profesionalismo de nuestro personal?</td>
                                                                                    <td>
                                                                                        Sin Contestar
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>¿Cómo calificaría nuestros tiempos de entrega?</td>
                                                                                    <td>
                                                                                        Sin Contestar
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>¿Como califica nuestra relación calidad – precio?</td>
                                                                                    <td>
                                                                                        Sin Contestar
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>¿Nos recomendaría?</td>
                                                                                    <td>
                                                                                        Sin Contestar
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> <!-- end #accordions-->
                                                </div>
                                            </div>
                                        </div>
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