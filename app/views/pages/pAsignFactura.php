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
                        <div class="card">
                            <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h4>Buscar Facturas en factura.com</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <form method="GET" accept-charset="UTF-8" autocomplete="off" id="frm_search_factura">
                                                <div class="col-12 d-flex justify-content-between">
                                                    <div class="col-3">
                                                        <label for="month">Selecciona un Mes</label>
                                                        <div class="form-group">
                                                            <select class="form-control" name="month" id="month">
                                                                <option value="0" selected="selected">Selecciona un Mes</option>
                                                                <option value="1">Enero</option>
                                                                <option value="2">Febrero</option>
                                                                <option value="3">Marzo</option>
                                                                <option value="4">Abril</option>
                                                                <option value="5">Mayo</option>
                                                                <option value="6">Junio</option>
                                                                <option value="7">Julio</option>
                                                                <option value="8">Agosto</option>
                                                                <option value="9">Septiembre</option>
                                                                <option value="10">Octubre</option>
                                                                <option value="11">Noviembre</option>
                                                                <option value="12">Diciembre</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <label for="year">Selecciona un Año</label>
                                                        <div class="form-group">
                                                            <select class="form-control" id="year" name="year">
                                                                <option value="2016">2016</option>
                                                                <option value="2017">2017</option>
                                                                <option value="2018">2018</option>
                                                                <option value="2019">2019</option>
                                                                <option value="2020">2020</option>
                                                                <option value="2021">2021</option>
                                                                <option value="2022" selected="selected">2022</option>
                                                                <option value="2023">2023</option>
                                                                <option value="2024">2024</option>
                                                                <option value="2025">2025</option>
                                                                <option value="2026">2026</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-3">
                                                        <div class="form-group">
                                                            <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">
                                                                <label for="rfc">R.F.C</label>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="rfc" value="" id="rfc">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">
                                                                <label>&nbsp;</label>
                                                                <div class="form-group">
                                                                    <button class="btn btn-primary"><i class="fa fa-search"></i> &nbsp;Buscar</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
                                                <div class="table-responsive">
                                                    <div id="tblasignarfactura_wrapper" class="dataTables_wrapper form-inline" role="grid">
                                                        <div class="row">
                                                            <div class="col-md-6"></div>
                                                            <div class="col-md-6">
                                                                <div class="dataTables_filter" id="tblasignarfactura_filter"><label>Buscar <input type="text" aria-controls="tblasignarfactura" class="form-control"></label></div>
                                                            </div>
                                                        </div>
                                                        <table id="tblasignarfactura" class="table table-bordered table-hover table-stripe table-striped dataTable" aria-describedby="tblasignarfactura_info">
                                                            <thead>
                                                                <tr role="row">
                                                                    <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="tblasignarfactura" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Razón Social: activate to sort column descending">Razón Social</th>
                                                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="tblasignarfactura" rowspan="1" colspan="1" aria-label="R.F.C.: activate to sort column ascending">R.F.C.</th>
                                                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="tblasignarfactura" rowspan="1" colspan="1" aria-label="Folio: activate to sort column ascending">Folio</th>
                                                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="tblasignarfactura" rowspan="1" colspan="1" aria-label="# Orden: activate to sort column ascending"># Orden</th>
                                                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="tblasignarfactura" rowspan="1" colspan="1" aria-label="Total: activate to sort column ascending">Total</th>
                                                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="tblasignarfactura" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending">Status</th>
                                                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="tblasignarfactura" rowspan="1" colspan="1" aria-label="Timbrado: activate to sort column ascending">Timbrado</th>
                                                                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="tblasignarfactura" rowspan="1" colspan="1" aria-label="&amp;nbsp;: activate to sort column ascending">&nbsp;</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody role="alert" aria-live="polite" aria-relevant="all">
                                                                <tr class="odd">
                                                                    <td class="  sorting_1">AKAMBARI SERVICIOS TURISTICOS SA DE CV</td>
                                                                    <td class=" ">AST151110965</td>
                                                                    <td class=" ">R 10908</td>
                                                                    <td class=" ">1851</td>
                                                                    <td class=" ">$2,668.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">03 DE JUNIO DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <td class="  sorting_1">Bartom Automatizacion</td>
                                                                    <td class=" ">BAU190606UU2</td>
                                                                    <td class=" ">R 10915</td>
                                                                    <td class=" ">1864</td>
                                                                    <td class=" ">$4,060.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">29 DE AGOSTO DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="630d204c3011c" data-folio="R 10915" data-receptor="BAU190606UU2" data-numorder="1864">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="odd">
                                                                    <td class="  sorting_1">Bartom Automatizacion</td>
                                                                    <td class=" ">BAU190606UU2</td>
                                                                    <td class=" ">R 10873</td>
                                                                    <td class=" ">1787</td>
                                                                    <td class=" ">$1,614.72</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">05 DE ENERO DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <td class="  sorting_1">OCTAVIO MARTINEZ BORBOA</td>
                                                                    <td class=" ">MABO7107287X2</td>
                                                                    <td class=" ">R 10928</td>
                                                                    <td class=" ">1872</td>
                                                                    <td class=" ">$2,668.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">30 DE SEPTIEMBRE DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary">Asignar a pedido</a>
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