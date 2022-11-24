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
                                <div class="col-md-12">
                                    <form action="">
                                        <div class="mb-3">
                                            <label for="simpleinput" class="form-label">URL de promoción</label>
                                            <input type="text" id="simpleinput" class="form-control" placeholder="url de promoción">
                                        </div>
                                        <div class="mb-3">
                                            <label for="simpleinput" class="form-label">Descripción</label>
                                            <input type="text" id="simpleinput" class="form-control" placeholder="Descripción">
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-fileinput" class="form-label">Archivo</label>
                                            <input type="file" id="example-fileinput" class="form-control">
                                        </div>
                                    </form>

                                    <div id="contents" class="box-body">
                                        <table class="table table-striped table-bordered table-condensed">
                                            <tbody>
                                                <tr>
                                                    <th>Imagen</th>
                                                    <th>Descripción</th>
                                                    <th>Acciones</th>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        <div class="">
                                                            <img src="https://midime.com.mx/public/images/promociones/1552090242-banner_drone.jpg" class="img-respo nsive" title="Video y Fotografía Aerea " height="50" alt="Video y Fotografía Aerea ">
                                                        </div>
                                                    </td>
                                                    <td>Video y Fotografía Aerea </td>
                                                    <td>
                                                        <a data-toggle="tooltip" data-placement="top" data-original-title="Editar" href="#" class="btn btn-info">
                                                            <i class="fa fa-edit"></i>
                                                        </a>

                                                        <a data-toggle="tooltip" data-placement="top" data-original-title="Desactivar" href="#" class="btn btn-danger delete">
                                                            <i class="fa fa-ban"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" data-placement="top" data-original-title="Eliminar" href="#" class="btn btn-danger delete">
                                                            <i class="mdi mdi-delete"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="">
                                                            <img src="https://midime.com.mx/public/images/promociones/1552092418-vendeonline.jpg" class="img-respo nsive" title="Vende on line" height="50" alt="Vende on line">
                                                        </div>
                                                    </td>
                                                    <td>Vende online</td>
                                                    <td>
                                                        <a data-toggle="tooltip" data-placement="top" data-original-title="Editar" href="#" class="btn btn-info">
                                                            <i class="fa fa-edit"></i></a>

                                                        <a data-toggle="tooltip" data-placement="top" data-original-title="Desactivar" href="#" class="btn btn-danger delete">
                                                            <i class="fa fa-ban"></i></a>
                                                        <a data-toggle="tooltip" data-placement="top" data-original-title="Eliminar" href="#" class="btn btn-danger delete">
                                                            <i class="mdi mdi-delete"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="">
                                                            <img src="https://midime.com.mx/public/images/promociones/1552097359-grabadolaser.jpg" class="img-respo nsive" title="Corte laser" height="50" alt="Corte laser">
                                                        </div>
                                                    </td>
                                                    <td>Corte laser</td>
                                                    <td>
                                                        <a data-toggle="tooltip" data-placement="top" data-original-title="Editar" href="#" class="btn btn-info">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" data-placement="top" data-original-title="Desactivar" href="#" class="btn btn-danger delete">
                                                            <i class="fa fa-ban"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" data-placement="top" data-original-title="Eliminar" href="#" class="btn btn-danger delete">
                                                            <i class="mdi mdi-delete"></i>
                                                        </a>
                                                    </td>
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