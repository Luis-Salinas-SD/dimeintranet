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
                        <h1> Ordenes de Pago</h1>
                        <button type="button" class="btn btn-success waves-effect waves-light col-4  col-md-2 col-sm-4 m-2" data-bs-toggle="modal" data-bs-target="#con-close-modal">
                            Agregar Orden de Pago
                        </button>
                        <!-- Modal Orden de pago -->
                        <div id="con-close-modal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Agregar orden de pago</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="field-1" class="form-label">
                                                            Empresa
                                                        </label>
                                                        <select name="" id="" class="form-select">
                                                            <option value="">op1</option>
                                                            <option value="">op2</option>
                                                            <option value="">op3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="field-2" class="form-label">Nombre del cliente:</label>
                                                        <select name="" id="" class="form-select">
                                                            <option value="">op1</option>
                                                            <option value="">op2</option>
                                                            <option value="">op3</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="field-3" class="form-label">Importe:</label>
                                                        <input type="text" class="form-control" id="direcccion" placeholder="Ingrese importe" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="field-3" class="form-label">Conecpto de Pago</label>
                                                        <input type="text" class="form-control" id="direcccion" placeholder="Concepto de Pago" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="field-2" class="form-label">Meses sin intereses:</label>
                                                        <select name="" id="" class="form-select">
                                                            <option value="" disabled selected>no aplica</option>
                                                            <option value="">3 meses</option>
                                                            <option value="">6 meses</option>
                                                            <option value="">12 meses</option>
                                                        </select>
                                                    </div>
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
                        <!-- Modal Fin -->
                        <!-- Filtros search init-->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Filtros</h4>
                                    <form class="app-search mt-3 mb-3 col-12">
                                        <div class="app-search-box">
                                            <div class="input-group">
                                                <select class="form-select me-2">
                                                    <option selected disabled> - Selecciona una opción - </option>
                                                    <option value="">Pendiente de Pago</option>
                                                    <option value="">Pagado</option>
                                                    <option value="">Cancelado</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row m-3 d-flex justify-content-end">
                                            <div class="col-3 d-flex">
                                                <span>Buscar Ordenes de Pago</span>
                                                <input type="text" class="form-control mx-1">
                                            </div>
                                        </div>
                                    </form>

                                    <!-- <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>
                                                        Folio
                                                    </th>
                                                    <th>Fecha</th>
                                                    <th>Cliente</th>
                                                    <th>Código OpenPay</th>
                                                    <th>Descripción</th>
                                                    <th>Importe</th>
                                                    <th>Estatus</th>
                                                    <th>MSI</th>
                                                    <th>URL Pago</th>
                                                    <th>F. Pago</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>00068</th>
                                                    <td>18 DE JULIO DE 2018 </td>
                                                    <td>Adrea</td>
                                                    <td>---</td>
                                                    <td>Pago del Pedido: #431 </td>
                                                    <td>$2,233.00</td>
                                                    <td>Pendiente de Pago</td>
                                                    <td>0</td>
                                                    <td>
                                                        <a data-bs-toggle="tooltip" title="Ir al sitio" class="btn btn-success" href="">
                                                            <i class="mdi mdi-web"></i> Ir
                                                        </a>
                                                    </td>
                                                    <td>
                                                    </td>
                                                    <td>
                                                        <a data-bs-toggle="tooltip" title="Reenviar" class="btn btn-info" href="">
                                                            <i class="mdi mdi-email-sync-outline"></i>
                                                        </a>
                                                        <a data-bs-toggle="tooltip" title="Canecelar" class="btn btn-danger" href="">
                                                            <i class="mdi mdi-delete"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div> -->

                                    <div class="col-sm-12">
                                        <table id="datatable" class="table table-bordered dt-responsive table-responsive nowrap dataTable no-footer dtr-inline" aria-describedby="datatable_info" style="width: 1571px;">
                                            <thead>
                                                <tr>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 390.4px;" aria-label="Position: activate to sort column ascending">Folio</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 202.4px;" aria-label="Office: activate to sort column ascending">Fecha</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 102.4px;" aria-label="Age: activate to sort column ascending">Cliente</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 181.4px;" aria-label="Start date: activate to sort column ascending">Código OpenPay</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 160.4px;" aria-label="Salary: activate to sort column ascending">Descripción</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 160.4px;" aria-label="Salary: activate to sort column ascending">Importe</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 160.4px;" aria-label="Salary: activate to sort column ascending">Estatus</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 160.4px;" aria-label="Salary: activate to sort column ascending">MSI</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 160.4px;" aria-label="Salary: activate to sort column ascending">URL Pago</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 160.4px;" aria-label="Salary: activate to sort column ascending">F Pago</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 160.4px;" aria-label="Salary: activate to sort column ascending">Acciones</th>
                                                </tr>
                                            </thead>

                                            <tbody>

                                                <tr>
                                                    <td>00068</td>
                                                    <td>18 DE JULIO DE 2018 </td>
                                                    <td>Adrea</td>
                                                    <td>---</td>
                                                    <td>Pago del Pedido: #431 </td>
                                                    <td>$2,233.00</td>
                                                    <td>Pendiente de Pago</td>
                                                    <td>0</td>
                                                    <td>
                                                        <a data-bs-toggle="tooltip" title="Ir al sitio" class="btn btn-success" href="">
                                                            <i class="mdi mdi-web"></i> Ir
                                                        </a>
                                                    </td>
                                                    <td>
                                                        nombre
                                                    </td>
                                                    <td>
                                                        <a data-bs-toggle="tooltip" title="Reenviar" class="btn btn-info" href="">
                                                            <i class="mdi mdi-email-sync-outline"></i>
                                                        </a>
                                                        <a data-bs-toggle="tooltip" title="Canecelar" class="btn btn-danger" href="">
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
    <?php include('../includes/scripts.php'); ?>


</body>

</html>