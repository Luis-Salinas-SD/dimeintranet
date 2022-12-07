<!DOCTYPE html>
<html lang="es">
<?php include('../includes/headDashboard.php') ?>

<!-- body start -->

<body class="loading" data-layout='{"mode": "light", "width": "fluid", "menuPosition": "fixed", "sidebar": { "color": "dark", "size": "default", "showuser": true}, "topbar": {"color": "light"}, "showRightSidebarOnPageLoad": true}'>

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
                                <h2>Contabilidad</h2>
                                <div class="d-flex flex-row">
                                    <section class="col-3 px-2">
                                        <div class="col-12 border border-info rounded-3 btn btn-success waves-effect waves-light">
                                            <h3 class="text-white">BANORTE</h3>
                                            <span>BANORTE</span>
                                            <div class="d-flex justify-content-around mt-3">
                                                <a data-bs-toggle="modal" data-bs-target="#agregarGasto">Agregar Gasto</a>
                                                <a data-bs-toggle="modal" data-bs-target="#agregarIngreso">Agregar Ingreso</a>
                                                <a data-bs-toggle="modal" data-bs-target="#reportes">Agregar Ingreso</a>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column col-12 mt-4">
                                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                Total 25 DE NOVIEMBRE DE 2022 : $0.00
                                            </div>
                                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                No hay movimientos en esta cuenta.
                                            </div>
                                        </div>
                                    </section>
                                    <section class="col-3 px-2">
                                        <div class="col-12 border border-info rounded-3 btn btn-success waves-effect waves-light">
                                            <h3 class="text-white">CAJA</h3>
                                            <span>Caja</span>
                                            <div class="d-flex justify-content-around mt-3">
                                                <a data-bs-toggle="modal" data-bs-target="#agregarGasto">Agregar Gasto</a>
                                                <a data-bs-toggle="modal" data-bs-target="#agregarIngreso">Agregar Ingreso</a>
                                                <a data-bs-toggle="modal" data-bs-target="#reportes">Agregar Ingreso</a>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column col-12 mt-4">
                                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                Total 25 DE NOVIEMBRE DE 2022 : $0.00
                                            </div>
                                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                No hay movimientos en esta cuenta.
                                            </div>
                                        </div>
                                    </section>
                                    <section class="col-3 px-2">
                                        <div class="col-12 border border-info rounded-3 btn btn-success waves-effect waves-light">
                                            <h3 class="text-white">Banco del Bajío</h3>
                                            <span>Banco del Bajío</span>
                                            <div class="d-flex justify-content-around mt-3">
                                                <a data-bs-toggle="modal" data-bs-target="#agregarGasto">Agregar Gasto</a>
                                                <a data-bs-toggle="modal" data-bs-target="#agregarIngreso">Agregar Ingreso</a>
                                                <a data-bs-toggle="modal" data-bs-target="#reportes">Agregar Ingreso</a>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column col-12 mt-4">
                                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                Total 25 DE NOVIEMBRE DE 2022 : $0.00
                                            </div>
                                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                                                No hay movimientos en esta cuenta.
                                            </div>
                                        </div>
                                    </section>
                                </div>

                                <!-- Modal Egreso-->
                                <div class="modal fade" id="agregarGasto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-full-width">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Agregar Egreso a la cuenta : CUENTA</h5>
                                                <span class="px-2">Fecha : 25-11-2022 09:11</span>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body d-flex justify-content-around">
                                                <!-- Campo 1 -->
                                                <div class="col-3 px-2">
                                                    <label for="categoria">Categoria Principal</label>
                                                    <select class="form-control dpc" required="required" id="categoria" name="categoria">
                                                        <option value="3">Gastos Personales</option>
                                                        <option value="4">Combustibles</option>
                                                        <option value="5">Compras por internet</option>
                                                        <option value="6">Marketing</option>
                                                        <option value="7">Salarios y Comiciones</option>
                                                        <option value="8">compensación</option>
                                                        <option value="9">EGRESOS</option>
                                                        <option value="10">MENSAJERIA</option>
                                                        <option value="12">MANTENIMIENTO DE AUTOMOVIL</option>
                                                        <option value="15">SELLO DE GOMA</option>
                                                        <option value="16">Produccion Materiales</option>
                                                        <option value="17">Mantenimiento</option>
                                                        <option value="18">Comunicaciones</option>
                                                        <option value="19">Comisiones</option>
                                                        <option value="20">servicios</option>
                                                        <option value="21">Mobiliario</option>
                                                        <option value="22">Impuestos</option>
                                                    </select>
                                                </div>
                                                <!-- Campo 2 -->
                                                <div class="col-3 px-2">
                                                    <label for="subcategoria">Subcategoría</label>
                                                    <select class="form-control sdpc" required="required" id="subcategoria" name="subcategoria">
                                                        <option value="1">Comidas</option>
                                                        <option value="9">Concierto, Cines, Eventos</option>
                                                        <option value="11">Ropa y Accesorios</option>
                                                        <option value="26">Gastos Médicos</option>
                                                    </select>
                                                </div>
                                                <!-- Campo 3 -->
                                                <div class="col-3 px-2">
                                                    <label for="importe">Agregar Importe</label>
                                                    <input type="number" class="form-control" name="importe" placeholder="Ingresa Impuesto" required="required" min="1" value="1" step="any">
                                                </div>
                                                <!-- Campo 4 -->
                                                <div class="col-3 px-2">
                                                    <label for="desc">Agrega una breve descripción</label>
                                                    <textarea maxlength="50" placeholder="Descripción Breve" rows="2" class="form-control" name="desc" cols="50" id="desc"></textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-primary">Guardar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Ingreso-->
                                <div class="modal fade" id="agregarIngreso" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-full-width">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Agregar Ingreso a la cuenta : CUENTA</h5>
                                                <span class="px-2">Fecha : 25-11-2022 09:11</span>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body d-flex justify-content-around">
                                                <!-- Campo 1 -->
                                                <div class="col-3 px-2">
                                                    <label for="categoria">Categoria Principal</label>
                                                    <select class="form-control dpc" required="required" id="categoria" name="categoria">
                                                        <option value="3">Gastos Personales</option>
                                                        <option value="4">Combustibles</option>
                                                        <option value="5">Compras por internet</option>
                                                        <option value="6">Marketing</option>
                                                        <option value="7">Salarios y Comiciones</option>
                                                        <option value="8">compensación</option>
                                                        <option value="9">EGRESOS</option>
                                                        <option value="10">MENSAJERIA</option>
                                                        <option value="12">MANTENIMIENTO DE AUTOMOVIL</option>
                                                        <option value="15">SELLO DE GOMA</option>
                                                        <option value="16">Produccion Materiales</option>
                                                        <option value="17">Mantenimiento</option>
                                                        <option value="18">Comunicaciones</option>
                                                        <option value="19">Comisiones</option>
                                                        <option value="20">servicios</option>
                                                        <option value="21">Mobiliario</option>
                                                        <option value="22">Impuestos</option>
                                                    </select>
                                                </div>
                                                <!-- Campo 2 -->
                                                <div class="col-3 px-2">
                                                    <label for="importe">Agregar Importe</label>
                                                    <input type="number" class="form-control" name="importe" placeholder="Ingresa Impuesto" required="required" min="1" value="1" step="any">
                                                </div>
                                                <!-- Campo 3 -->
                                                <div class="col-3 px-2">
                                                    <label for="desc">Agrega una breve descripción</label>
                                                    <textarea maxlength="50" placeholder="Descripción Breve" rows="2" class="form-control" name="desc" cols="50" id="desc"></textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-primary">Guardar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Modal Ingreso-->
                                <div class="modal fade" id="reportes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Descargar Reportes</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body d-flex flex-column align-items-center">
                                                <div>
                                                    <a class="btn btn-info my-3">
                                                        <i class="mdi mdi-download"></i> Reporte de Hoy (25 DE NOVIEMBRE DE 2022)
                                                    </a>
                                                </div>
                                                <div>
                                                    <h3>Descargar Reporte por Rango de Fechas</h3>
                                                    <div class="d-flex justify-content-center">
                                                        <div class="form-group mx-2">
                                                            <label for="fec_ini">Fecha Inicial</label>
                                                            <input class="form-control" required="required" name="fech_ini" type="date" value="">
                                                        </div>
                                                        <div class="form-group mx-2">
                                                            <label for="fec:ini">Fecha Inicial</label>
                                                            <input class="form-control" required="required" name="fech_fin" type="date" value="">
                                                        </div>
                                                    </div>
                                                    <div class="text-center my-3">
                                                        <div class="form-group">
                                                            <button class="btn btn-info">Generar Reporte</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                                <button type="button" class="btn btn-primary">Guardar</button>
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