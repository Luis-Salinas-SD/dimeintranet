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
                        <h1> Clientes</h1>
                        <button type="button" class="btn btn-success waves-effect waves-light col-4  col-md-2 col-sm-4 m-2" data-bs-toggle="modal" data-bs-target="#con-close-modal">Añadir cliente
                        </button>
                        <!-- Modal Formulario init -->
                        <div id="con-close-modal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Añadir un nuevo cliente</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="field-1" class="form-label">
                                                            Nombre de la Empresa
                                                        </label>
                                                        <input type="text" class="form-control" id="empresa" placeholder="Empresa" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label for="field-2" class="form-label">Contacto</label>
                                                        <input type="text" class="form-control" id="contacto" placeholder="Contacto" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label for="field-3" class="form-label">Dirección</label>
                                                        <input type="text" class="form-control" id="direcccion" placeholder="Dirección" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <div class="mb-3">
                                                        <label for="field-4" class="form-label">Teléfono</label>
                                                        <input type="tel" class="form-control" id="tel" placeholder="Teléfono" pattern="[0-9]{10}" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="mb-3">
                                                        <label for="field-5" class="form-label">Correo</label>
                                                        <input type="email" class="form-control" id="correo" placeholder="ejemplo@mail.com" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mb-3 form-check form-check-success">
                                                        <input class="form-check-input" type="checkbox" value="" id="client-check">
                                                        <label class="form-check-label" for="customckeck2">
                                                            Cliente a credito
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-12" id="token" style="display: none;">
                                                    <div class="mb-3">
                                                        <label for="field-3" class="form-label">Código de credito</label>
                                                        <input type="number" class="form-control" id="codigo" placeholder="Código de credito" required>
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
                        <!-- Modal Formulario fin -->
                        <!-- Filtros search init-->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Filtros</h4>
                                    <form class="app-search mt-3 mb-3 col-10 col-md-8 col-lg-6">
                                        <div class="app-search-box">
                                            <div class="input-group">
                                                <select class="form-select me-2" aria-label="Default select example">
                                                    <option selected>Seleccionar</option>
                                                    <option value="1">Empresa</option>
                                                    <option value="2">Contacto</option>
                                                    <option value="3">Correo</option>
                                                </select>
                                                <input type="text" class="form-control" placeholder="Buscar aqui" id="top-search">
                                                <button class="btn input-group-text" type="submit">
                                                    <i class="fe-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <thead class="table-dark">
                                                <tr class="text-center">
                                                    <th>#</th>
                                                    <th>Empresa</th>
                                                    <th>Contacto</th>
                                                    <th>Teléfono</th>
                                                    <th>Email</th>
                                                    <th>No. Pedidos</th>
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="text-center">
                                                    <th scope="row">1</th>
                                                    <td>Facebook</td>
                                                    <td>Yoss</td>
                                                    <td>855 697 6545</td>
                                                    <td>astroboy@dime.com</td>
                                                    <td>4 </td>
                                                    <th>
                                                        <a data-bs-toggle="tooltip" title="Detalles" class="btn btn-success" href="./rfc-details.php">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                        <a data-bs-toggle="tooltip" title="Editar" class="btn btn-info" href="./rfc-edit.php">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <a data-bs-toggle="tooltip" title="Desactivar" href="#" class="btn btn-danger">
                                                            <i class="fa fa-ban"></i>
                                                        </a>
                                                        <a data-bs-toggle="tooltip" title="Correo" href="#" class="btn btn-success">
                                                            <i class="fa far fa-envelope-open"></i>
                                                        </a>
                                                    </th>
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
</body>

</html>