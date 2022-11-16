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
                <div class="container-fluid">
                    <div class="row">
                        <h1>Detalles del pedido</h1>
                        <!-- Modal Formulario init -->
                        <div id="con-close-modal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Nuevo Pedido</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="field-1" class="form-label">
                                                            Seleccione Empresa
                                                        </label>
                                                        <select class="form-select" id="seleccion">
                                                            <option selected=""> - Selecciona una opción - </option>
                                                            <option value="1">Empresa 1</option>
                                                            <option value="2">Empresa 2</option>
                                                            <option value="3">Empresa 3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="field-2" class="form-label">Cliente</label>
                                                        <input type="text" class="form-control" id="client" placeholder="cliente" required>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="col-12" id="showForm">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Guardar</button>
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
                                    <span class="fs-3 my-4">Nombre de la Empresa:
                                        <b>Dimek</b>
                                    </span>
                                    <div class="box-body table-responsive">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Contacto</th>
                                                    <th>Dirección</th>
                                                    <th>Teléfono</th>
                                                    <th>Email</th>
                                                    <th>Estado Actual</th>
                                                    <th>Fecha de Registro</th>
                                                    <th>Fecha de Actualización</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        Sergio Sanabria
                                                    </td>
                                                    <td>México</td>
                                                    <td>7222155399</td>
                                                    <td>impresosgraficoscrearte@hotmail.com</td>
                                                    <td>

                                                        Activo

                                                    </td>
                                                    <td>30 DE OCTUBRE DE 2018</td>
                                                    <td>28 DE MARZO DE 2022</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <hr>

                                    <div class="col-md-12">
                                        <div class="box box-primary">
                                            <div class="box-header">
                                                <h3 class="box-title">Datos de Facturación</h3>
                                            </div>
                                            <div class="box-body table-responsive">
                                                <table class="table table-bordered table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Razon Social</th>
                                                            <th>R.F.C</th>
                                                            <th>Dirección</th>
                                                            <th>Estado</th>
                                                            <th>Ciudad</th>
                                                            <th>Municipio</th>
                                                            <th>CP</th>
                                                            <th>Zona Fronteriza</th>
                                                            <th>Acciones</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Sergio Adrián Sanabria Salgado</td>
                                                            <td>SASS7612061L4</td>
                                                            <td>Aurelio Venegas</td>
                                                            <td>México</td>
                                                            <td>Toluca</td>
                                                            <td>Toluca</td>
                                                            <td>50080</td>
                                                            <td>

                                                                NO
                                                            </td>
                                                            <td>
                                                                <a data-bs-toggle="tooltip" title="Editar datos de Facturación" href="#" class="btn btn-info">
                                                                    <i class="mdi mdi-lead-pencil"></i>
                                                                </a>
                                                                <a data-bs-toggle="tooltip" title="Eliminar datos de Facturación" href="#" class="btn btn-danger">
                                                                    <i class="mdi mdi-delete"></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>

                                    <div class="box box-primary">
                                        <div class="box-header">
                                            <h3 class="box-title">Servicios Contratados : <strong>3</strong></h3>
                                        </div>
                                        <section class="d-flex">
                                            <div class="col-3 m-2">
                                                <div class="bg-dime p-2 rounded">
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#serv">
                                                        <div>
                                                            <h2 class="text-white">Suweb</h2>
                                                        </div>
                                                        <div class="text-white">
                                                            Total : 1
                                                        </div>
                                                    </a>
                                                </div>
                                                <!-- Modal -->
                                                <div class="modal fade" id="serv" tabindex="-1" aria-labelledby="serv" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Servicios</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="table-responsive">
                                                                    <table class="table table-striped table-hover table-bordered">
                                                                        <tbody>
                                                                            <tr>
                                                                                <th>Tipo de Servicio : </th>
                                                                                <td> <a href="https://midime.com.mx/dime/dominios/eyJpdiI6IjJJMVJLK3Z5emtBU0xubmFVQ3VPUXc9PSIsInZhbHVlIjoiZ2VPYkpWZW13bTdCWm51djdRaFVGdz09IiwibWFjIjoiZjYxYzQ5N2IwNmJhMGJiYzg4OGU3ZGQzYTg0OWEzZTNjMDk2ODRhYTRhZjNjYzhhMDYzNGExYzgwZTM5NjQ0YyJ9" target="_blank">Web Pro</a> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Dominio : </th>
                                                                                <td><a href="http://crearte.mx" target="_blank">http://crearte.mx</a></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th>Estado Actual : </th>
                                                                                <td>
                                                                                    <div class="on">Dominio Correcto</div>
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