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
                <!--! Empresa 1 -->
                <div class="container-fluid">
                    <div class="row">
                        <h1>Luis Salinas</h1>

                        <!-- Contenido-->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body d-flex flex-wrap">

                                    <div class="col-6">
                                        <div class="d-flex justify-content-end px-3 mb-2">
                                            <span>Registrado :</span> <b>Hace un Año</b>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-hover">
                                                <tbody class="text-center">
                                                    <tr>
                                                        <th>Email de Registro</th>
                                                        <td><a href="mailto:webmaster@dime.pro">webmaster@dime.pro</a></td>
                                                        <th>Estatus Actual</th>
                                                        <td>
                                                            Activo
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Fecha de Registro : </th>
                                                        <td>30 DE AGOSTO DE 2021</td>
                                                        <th>Ultimo Inicio de Sesión</th>
                                                        <td>28 DE NOVIEMBRE DE 2022</td>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="4"> Grupos en los que esta Registrado : </th>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3"><i class="fa fa-angle-double-right"></i> Administrador</td>
                                                        <td>
                                                            <a data-toggle="tooltip" data-placement="top" data-original-title="Desvincular de Grupo" href="https://midime.com.mx/dime/grupos/eyJpdiI6IncyTndhZUt1c1lsbmRGb0pwRE1mV1E9PSIsInZhbHVlIjoibjdURitlZFwvOGVocnE1dG9qT24zN3c9PSIsIm1hYyI6ImQ2NmI2MDg1MjkwY2M5Y2NlZjAzNDM4OGJiMTI0ZDg5NmU2NTNkNmMwYzlmZGEwZGRkY2MyNTA2MjVjZjZjOWYifQ==" class="btn btn-danger delete">
                                                                <i class="mdi mdi-trash-can-outline "></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3"><i class="fa fa-angle-double-right"></i> Operaciones</td>
                                                        <td>
                                                            <a data-toggle="tooltip" data-placement="top" data-original-title="Desvincular de Grupo" href="https://midime.com.mx/dime/grupos/eyJpdiI6IkpTYmE0Y3dNWkY4ZnpybW92TGdsR0E9PSIsInZhbHVlIjoibzVkWmFHdTVCeWNCeTNDK2R5R2VPQT09IiwibWFjIjoiYzRmODhkY2I2YjVhZWQ2ZjY2N2Y0MTkzY2IwMGQ4ZTdjZmNhZjE4OTEzNTdlZjNkZDUzYjA4Njg0Mjg5NjkzYyJ9" class="btn btn-danger delete">
                                                                <i class="mdi mdi-trash-can-outline "></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3"><i class="fa fa-angle-double-right"></i> Administrador de Clientes</td>
                                                        <td>
                                                            <a data-toggle="tooltip" data-placement="top" data-original-title="Desvincular de Grupo" href="https://midime.com.mx/dime/grupos/eyJpdiI6IjhFaFQwSDMzOG5Ub0RBUllIcHJnbHc9PSIsInZhbHVlIjoidHh5R1pzWFZEMDZaVGxacEgzYXJVdz09IiwibWFjIjoiMmVmODRkMzVjZGVjMDVkMjdhN2QxMGY0YzFlODRkMjFiN2U0NmU3N2E3OWU0OTkxZjk2Nzk2NDNkYzJlMjY0ZSJ9" class="btn btn-danger delete">
                                                                <i class="mdi mdi-trash-can-outline "></i>
                                                            </a>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="col-5 px-3">
                                        <form action="">
                                            <div class="mb-3">
                                                <label for="" class="form-label">Nueva Contraseña</label>
                                                <input type="password" name="" id="" class="form-control" placeholder="password">
                                            </div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light col-12">
                                                Restablecer Contraseña
                                            </button>
                                        </form>
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