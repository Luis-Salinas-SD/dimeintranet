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
                        <h1>Dominio <a href="http://google.com">Google</a></h1>

                        <!-- Modales -->

                        <!-- Modal Contraseña -->
                        <div id="ver-framework" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="fullWidthModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-full-width">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="fullWidthModalLabel">Ver Credenciales</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="col-4 m-auto">
                                            <label for="">Ingresar Contraseña</label> <br>
                                            <input type="password" name="" id="" placeholder="Password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="modal-footer m-auto">
                                        <button type="button" class="btn btn-success">
                                            <i class="mdi mdi-form-textbox-password"></i>
                                            Validar Contraseña
                                        </button>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                        <!-- Modal AddFramework -->
                        <div id="add-framework" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="fullWidthModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-full-width">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="fullWidthModalLabel">Agregar Framework</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body d-flex justify-content-around">
                                        <div class="col-3">
                                            <label for="">Nombre de Usuario</label> <br>
                                            <input type="text" name="" placeholder="Usuario" class="form-control">
                                        </div>
                                        <div class="col-3">
                                            <label for="">Contraseña</label> <br>
                                            <input type="password" name="" placeholder="Password" class="form-control">
                                        </div>
                                        <div class="col-3">
                                            <label for="">Descripción</label> <br>
                                            <input type="text" name="" placeholder="Descripción" class="form-control">
                                        </div>
                                    </div>
                                    <div class="modal-footer m-auto">
                                        <button type="button" class="btn btn-success">
                                            <i class="mdi mdi-content-save"></i>
                                            Guardar Información
                                        </button>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                        <!-- Modal AddFramework -->
                        <div id="add-database" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="fullWidthModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-full-width">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="fullWidthModalLabel">Agregar Base de Datos</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body d-flex justify-content-around">
                                        <div class="col-3 px-2">
                                            <label for="">Usuario</label> <br>
                                            <input type="text" name="" placeholder="Usuario" class="form-control">
                                        </div>
                                        <div class="col-3 px-2">
                                            <label for="">Contraseña</label> <br>
                                            <input type="password" name="" placeholder="Password" class="form-control">
                                        </div>
                                        <div class="col-3 px-2">
                                            <label for="">Descripción</label> <br>
                                            <input type="text" name="" placeholder="Descripción" class="form-control">
                                        </div>
                                        <div class="col-3 px-2">
                                            <label for="">Base de Datos</label> <br>
                                            <input type="text" name="" placeholder="Base de Datos" class="form-control">
                                        </div>
                                    </div>
                                    <div class="modal-footer m-auto">
                                        <button type="button" class="btn btn-success">
                                            <i class="mdi mdi-content-save"></i>
                                            Guardar Información
                                        </button>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                        <!-- Modales fin -->
                        <!-- Modal Multiple -->
                        <!-- Modal -->
                        <div id="ver-credentials" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="fullWidthModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-full-width">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="fullWidthModalLabel">Ver Credenciales</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="col-4 m-auto">
                                            <label for="">Ingresar Contraseña</label> <br>
                                            <input type="password" name="" id="" placeholder="Password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-bs-target="#multiple-two" data-bs-toggle="modal" data-bs-dismiss="modal">
                                            Aceptar
                                        </button>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->

                        <!-- Modal -->
                        <div id="multiple-two" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="multiple-twoModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-full-width">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="multiple-twoModalLabel">Ver Credenciales</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="col-12">
                                            <table class="table table-bordered table-striped">
                                                <thead>
                                                    <tr>
                                                        <td>Nombre de Usuario</td>
                                                        <td>Contraseña</td>
                                                        <td>Descripción</td>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <a data-type="text" data-pk="2" data-url="" data-title="Nombre de Usuario" class="editable editable-click">Site</a>
                                                        </td>
                                                        <td>
                                                            <a data-type="password" data-pk="3" data-url="" data-title="Contraseña" class="editable editable-click">123456</a>
                                                        </td>
                                                        <td>
                                                            <a data-placement="right" data-type="textarea" data-pk="4" data-url="" data-title="Descripción" class="editable editable-pre-wrapped editable-click">Panel</a>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->

                        <!-- Contenido-->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-condensed table-hover">
                                            <thead>
                                                <tr>
                                                    <th colspan="4" class="text-center">Información del Dominio</th>
                                                </tr>
                                                <tr>
                                                    <th>Nombre del Cliente</th>
                                                    <th>¿Externo?</th>
                                                    <th>Estatus</th>
                                                    <th>Fecha de Registro</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>RENE ALVAREZ </td>
                                                    <td>
                                                        <a data-toggle="tooltip" data-placement="top" data-original-title="Cambiar a Externo" class="btn btn-sm btn-danger" href="">No</a>
                                                    </td>
                                                    <td>
                                                        <a data-toggle="tooltip" data-placement="top" data-original-title="Desactivar" href="" class="btn btn-success">
                                                            <i class="fa fa-check"></i></a>
                                                    </td>
                                                    <td>16 DE OCTUBRE DE 2017</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <br>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-condensed table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th colspan="7" class="text-center">Servicios Adicionales</th>
                                                </tr>
                                                <tr>
                                                    <th>Servicio</th>
                                                    <th>Servidor</th>
                                                    <th>Refrendo</th>
                                                    <th>Fecha de Registro</th>
                                                    <th>Fecha de Renovación</th>
                                                    <th>Estatus</th>
                                                    <th>
                                                        <a href="" data-toggle="tooltip" data-placement="top" data-original-title="Agregar Servicio" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i></a>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="" target="_blank">Web Standard</a></td>
                                                    <td><a href="" target="_blank">dimenet.com.mx</a></td>
                                                    <td>$2,668.00</td>
                                                    <td>10 DE NOVIEMBRE DE 2014</td>
                                                    <td>10 DE NOVIEMBRE DE 2022</td>
                                                    <td>
                                                        <label class="pre-off"><i class="fa fa-warning"></i> Por Vencer en 0 día(s)</label>
                                                    </td>
                                                    <td>
                                                        <a data-toggle="tooltip" data-placement="top" data-original-title="Suspender Sitio Web" href="" class="btn btn-danger">
                                                            <i class="fa fa-ban"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" data-placement="top" data-original-title="Editar" href="" class="btn btn-info">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" data-placement="top" data-original-title="Desactivar" href="" class="btn btn-success">
                                                            <i class="fa fa-check"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" data-placement="top" data-original-title="Enviar Notificación" href="" class="btn btn-outline-secondary waves-effect">
                                                            <i class="fa fa-envelope"></i>
                                                            Enviar Notificación
                                                        </a>
                                                        <a data-toggle="tooltip" data-placement="top" data-original-title="Renovar Paquete Web" href="" class="btn btn-primary update_refresh">
                                                            <i class="mdi mdi-reload"></i>
                                                        </a>
                                                        <a data-toggle="tooltip" data-placement="top" data-original-title="Descargar PDF" href="" class="btn btn-outline-secondary waves-effect">
                                                            <i class="fa fa-download"></i>
                                                        </a>
                                                        <a href="" onclick="" class="btn btn-danger">
                                                            <i class="mdi mdi-file-document"></i>
                                                            Contrato Web
                                                        </a>

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <strong>Total de Espacio en Disco:</strong> 1200MB. <strong>Total de Espacio Utilizado:</strong> 877.53MB Utilizado.
                                                </div>
                                                <a href="" class="btn btn-primary btn-sm pull-right">
                                                    <i class="mdi mdi-update"></i> Actualizar
                                                </a>
                                            </div>
                                            <!--! Barra de Progresso -->
                                            <div class="progress mb-3 progress-md">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover table-condensed">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" colspan="4">Correos Electrónicos Disponibles 2/8</th>
                                                </tr>
                                                <tr>
                                                    <th>Correo Electrónico</th>
                                                    <th>
                                                        <a href="" data-toggle="tooltip" data-placement="top" data-original-title="Ver Cuentas de Correo" class="btn btn-sm btn-primary">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>onder.cerda@aeroclass.com.mx</td>
                                                    <td>
                                                        <a data-email="onder.cerda@aeroclass.com.mx" href="" data-toggle="tooltip" data-placement="top" data-original-title="Cambiar Contraseña" data-element="3" class="btn btn-info btn-sm">
                                                            <i class="fa fa-key"></i>
                                                        </a>
                                                        <a href="" data-toggle="tooltip" data-placement="top" data-original-title="Suspender Cuenta" data-element="1" class="btn btn-warning btn-sm">
                                                            <i class="fa fa-ban"></i>
                                                        </a>
                                                        <a href="" data-toggle="tooltip" data-placement="top" data-original-title="Eliminar Cuenta" data-element="2" class="btn btn-danger btn-sm">
                                                            <i class="mdi mdi-delete"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>gmacias@aeroclass.com.mx</td>
                                                    <td>
                                                        <a data-email="gmacias@aeroclass.com.mx" href="" data-toggle="tooltip" data-placement="top" data-original-title="Cambiar Contraseña" data-element="3" class="btn btn-info btn-sm">
                                                            <i class="fa fa-key"></i>
                                                        </a>
                                                        <a href="" data-toggle="tooltip" data-placement="top" data-original-title="Suspender Cuenta" data-element="1" class="btn btn-warning btn-sm">
                                                            <i class="fa fa-ban"></i>
                                                        </a>
                                                        <a href="" data-toggle="tooltip" data-placement="top" data-original-title="Eliminar Cuenta" data-element="2" class="btn btn-danger btn-sm">
                                                            <i class="mdi mdi-delete"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="table-responsive">
                                        <section class="d-flex justify-content-between flex-wrap">
                                            <div class="col 12 col-md-3 m-1">
                                                <div class="card">
                                                    <h5 class="card-header">Framework</h5>
                                                    <div class="card-body">
                                                        <p class="card-text">
                                                            Hay 2 credenciales registradas.
                                                        </p>
                                                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ver-framework">
                                                            <i class="mdi mdi-eye"></i>
                                                            Ver
                                                        </button>
                                                        <button href="#" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#add-framework">
                                                            <i class="mdi mdi-plus"></i>
                                                            Agregar item
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" col-12 col-md-3 m-1">
                                                <div class="card">
                                                    <h5 class="card-header">Base de Datos</h5>
                                                    <div class="card-body">
                                                        <p class="card-text">
                                                            Aun no hay credenciales registradas
                                                        </p>
                                                        <button href="#" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#add-database">
                                                            <i class="mdi mdi-plus"></i>
                                                            Agregar item
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3 m-1">
                                                <div class="card">
                                                    <h5 class="card-header">CPanel</h5>
                                                    <div class="card-body">
                                                        <p class="card-text">
                                                            Hay 1 credenciales registradas
                                                        </p>
                                                        <button class="btn btn-success">
                                                            <i class="mdi mdi-eye"></i>
                                                            Ver
                                                        </button>
                                                        <a href="#" class="btn btn-info" id="check-domain">
                                                            <i class="mdi mdi-key"></i>
                                                            Test Conección
                                                        </a>
                                                        <a class="btn btn-info" data-bs-toggle="modal" data-bs-target="#ver-credentials">
                                                            <i class="mdi mdi-key"></i>
                                                            Login
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-3 m-1">
                                                <div class="card">
                                                    <h5 class="card-header">Modificaciones</h5>
                                                    <div class="card-body">
                                                        <div>
                                                            <p class="card-text">
                                                                Minutos Invertidos <b>1800/3600</b>
                                                            </p>
                                                            <div class="progress my-3">
                                                                <div class="progress-bar bg-success" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
                                                            </div>
                                                            <a class="btn btn-info" id="switch">
                                                                <i class="mdi mdi-plus"></i>
                                                                Agregar item
                                                            </a>
                                                        </div>
                                                        <div id="mesg" class="hide col-10">
                                                            <div class="m-auto">
                                                                <form method="POST" action="" accept-charset="UTF-8" class="text-center" autocomplete="off">
                                                                    <input name="_token" type="hidden">
                                                                    <div class="form-group">
                                                                        <label for="minutesworked">Minutos Trabajados:</label>
                                                                        <input type="hidden" name="idSolicitud" value="" required="required">
                                                                        <input type="number" name="minutesworked" placeholder="Minutos Trabajados" class="form-control" id="minutesworked" required="required">
                                                                    </div>
                                                                    <div class="mt-2">
                                                                        <button type="submit" class="btn btn-success">Guardar</button>
                                                                        <button type="button" class="btn btn-danger cancel-time">Cancelar</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>

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