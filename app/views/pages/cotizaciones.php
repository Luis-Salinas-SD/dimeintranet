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
                        <h1>Cotizaciones</h1>
                        <!--# Button - Add client -->
                        <button type="button" class="btn btn-success waves-effect waves-light col-4  col-md-2 col-sm-4 m-2" data-bs-toggle="modal" data-bs-target="#con-close-modal">Nueva Cotización
                        </button>
                        <!--! Modal Formulario init -->
                        <div id="con-close-modal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="card-body">
                                        <h4 class="header-title mb-4">Cotización</h4>
                                        <ul class="nav nav-tabs">
                                            <li class="nav-item">
                                                <a href="#home" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                    Selecciona un cliente
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#profile" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                    Agregar un nuevo cliente
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="home">

                                                <!--! Seleccion  Division-->
                                                <div class="m-3">
                                                    <label for="selectDiv" class="form-label">
                                                        Selecciona una división</label>
                                                    <select class="form-select" id="selectDiv" data-placeholder="Elige">
                                                        <option disabled selected>Elija una división</option>
                                                        <option>MILOG</option>
                                                        <option>SUWEB</option>
                                                        <option>DIME</option>
                                                        <option>MISISTEMA</option>
                                                        <option>IMPRENTA</option>
                                                        <option>MI360</option>
                                                        <option>RENTA UN DRON</option>
                                                        <option>DIME.COM.MX</option>
                                                    </select>

                                                </div>
                                                <!--! Seleccion  Cliente-->
                                                <div class="m-3">
                                                    <label for="example-select" class="form-label">
                                                        Selecciona un cliente
                                                    </label>
                                                    <select class="form-select" id="selectClient">
                                                        <option disabled selected>Elija un cliente</option>
                                                        <option>cliente 1</option>
                                                        <option>cliente 2</option>
                                                    </select>
                                                </div>
                                                <div id="mensaje"></div>
                                            </div>
                                            <div class="tab-pane show" id="profile">
                                                <form>
                                                    <!--% alta  -->
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label for="field-1" class="form-label">
                                                                        Nombre de la Empresa
                                                                    </label>
                                                                    <input type="text" class="form-control" id="field-1" placeholder="Empresa" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="mb-3">
                                                                    <label for="field-2" class="form-label">Contacto</label>
                                                                    <input type="text" class="form-control" id="field-2" placeholder="contacto" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="mb-3">
                                                                    <label for="field-3" class="form-label">Dirección</label>
                                                                    <input type="text" class="form-control" id="field-3" placeholder="Dirección" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label for="field-4" class="form-label">Telefono</label>
                                                                    <input type="tel" class="form-control" id="field-4" placeholder="Telefono" pattern="[0-9]{10}" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="mb-3">
                                                                    <label for="field-5" class="form-label">Correo</label>
                                                                    <input type="email" class="form-control" id="field-5" placeholder="email" required>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label for="example-select" class="form-label">Tipo de
                                                                    cliente</label>
                                                                <select class="form-select" id="example-select">
                                                                    <option disabled selected>
                                                                        Selecciona un Tipo de Cliente
                                                                    </option>
                                                                    <option>Propecto</option>
                                                                    <option>Cliente</option>
                                                                </select>
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
                                </div>
                            </div>
                        </div>

                        <!-- Modal Formulario fin -->
                        <!-- Filtros search init-->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Filtros</h4>
                                    <form class="app-search col-4 mt-3 mb-3 col-10 col-lg-3">
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
                                                    <th>Elaboró</th>
                                                    <th>Fecha de Generación</th>
                                                    <th>Acciones</th>
                                                    <th>Rec</th>
                                                    <th>3M</th>
                                                    <th>6M</th>
                                                    <th>Aceptada</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="text-center">
                                                    <th scope="row">1</th>
                                                    <td>Facebook</td>
                                                    <td>Yuawi</td>
                                                    <td>Nico</td>
                                                    <td>6/11/2021</td>
                                                    <td>
                                                        <a data-bs-toggle="tooltip" title="Detalles" href="#" class="btn btn-success">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                        <a data-bs-toggle="tooltip" title="Editar" data-original-title="Detalles" href="#" class="btn btn-info">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <a data-bs-toggle="tooltip" title="Desactivar" data-original-title="Detalles" href="#" class="btn btn-danger">
                                                            <i class="fa fa-ban"></i>
                                                        </a>
                                                        <a data-bs-toggle="tooltip" title="Correo" data-original-title="Detalles" href="#" class="btn btn-success">
                                                            <i class="fa far fa-envelope-open"></i>
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <div class="form-check mb-2 form-check-dark d-flex justify-content-center">
                                                            <input class="form-check-input" type="checkbox" value="" id="customckeck9" checked="">
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-soft-info waves-effect waves-light">3MSI</button>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-soft-warning waves-effect waves-light">6MSI</button>
                                                    </td>
                                                    <td>
                                                        <div class="form-check mb-2 form-check-dark d-flex justify-content-center">
                                                            <input class="form-check-input" type="checkbox" value="" id="customckeck9" checked="">
                                                        </div>
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
</body>

</html>