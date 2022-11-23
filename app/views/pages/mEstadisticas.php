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
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <h3>Total de Encuestas : 133</h3>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Pregunta</th>
                                                    <th>Bueno</th>
                                                    <th>Regular</th>
                                                    <th>Excelente</th>
                                                    <th>Malo</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>¿Como califica la calidad de nuestros productos o servicios?</td>
                                                    <td> 22.56%</td>
                                                    <td> 11.28%</td>
                                                    <td> 63.91%</td>
                                                    <td> 2.26%</td>
                                                </tr>
                                                <tr>
                                                    <td>¿Como califica la atención y profesionalismo de nuestro personal?</td>
                                                    <td> 15.79%</td>
                                                    <td> 9.77%</td>
                                                    <td> 69.92%</td>
                                                    <td> 4.51%</td>
                                                </tr>
                                                <tr>
                                                    <td>¿Cómo calificaría nuestros tiempos de entrega?</td>
                                                    <td> 22.56%</td>
                                                    <td> 18.05%</td>
                                                    <td> 55.64%</td>
                                                    <td> 3.76%</td>
                                                </tr>
                                                <tr>
                                                    <td>¿Como califica nuestra relación calidad – precio?</td>
                                                    <td> 21.8%</td>
                                                    <td> 16.54%</td>
                                                    <td> 59.4%</td>
                                                    <td> 2.26%</td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td colspan="2"><strong>Si</strong></td>
                                                    <td colspan="2"><strong>No</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>¿Nos recomendaría?</td>
                                                    <td colspan="2">90.23%</td>
                                                    <td colspan="2">9.77%</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <br>
                                    <h4>¿Como se han enterado de Nosotros?
                                        <i>De 1142 solicitudes registradas: </i>
                                    </h4>
                                    <div class="table-responsive">
                                        <table class="table table-stripe table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Por un buscador</th>
                                                    <th>Por una revista</th>
                                                    <th>Por un amigo</th>
                                                    <th>Redes Sociales</th>
                                                    <th>Anuncio Espectacular</th>
                                                    <th>Otro</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>82.75%</td>
                                                    <td>2.36%</td>
                                                    <td>3.33%</td>
                                                    <td>4.47%</td>
                                                    <td>0.09%</td>
                                                    <td>7.01%</td>
                                                </tr>
                                            </tbody>
                                        </table>
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