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
                                            <form method="GET" accept-charset="UTF-8" autocomplete="off" id="frm_search_factura" class="d-flex">
                                                <input name="_token" type="hidden" value="">
                                                <input type="hidden" name="urlToSend" id="urlToSend" value="#">
                                                <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12 input-daterange">
                                                    <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">
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
                                                    <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">
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
                                                    <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
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
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="629a949f9a161" data-folio="R 10908" data-receptor="AST151110965" data-numorder="1851">Asignar a pedido</a>
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
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="61d61d8824122" data-folio="R 10873" data-receptor="BAU190606UU2" data-numorder="1787">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <td class="  sorting_1">BOUNDLESS INNOVATION AND TECHNOLOGY SA DE CV</td>
                                                                    <td class=" ">BIT1207097F0</td>
                                                                    <td class=" ">R 10935</td>
                                                                    <td class=" ">1879</td>
                                                                    <td class=" ">$4,460.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">26 DE OCTUBRE DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="6359b4c20cbaf" data-folio="R 10935" data-receptor="BIT1207097F0" data-numorder="1879">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="odd">
                                                                    <td class="  sorting_1">BRSTER ABOGADOS S.C</td>
                                                                    <td class=" ">BAB160419C85</td>
                                                                    <td class=" ">R 10875</td>
                                                                    <td class=" ">1789</td>
                                                                    <td class=" ">$4,060.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">05 DE ENERO DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="61d630fe44480" data-folio="R 10875" data-receptor="BAB160419C85" data-numorder="1789">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <td class="  sorting_1">CAFES FINOS DE CORDOBA SA DE CV</td>
                                                                    <td class=" ">CFC1202211M4</td>
                                                                    <td class=" ">R 10926</td>
                                                                    <td class=" ">1869</td>
                                                                    <td class=" ">$2,668.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">26 DE SEPTIEMBRE DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="633231590a1dc" data-folio="R 10926" data-receptor="CFC1202211M4" data-numorder="1869">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="odd">
                                                                    <td class="  sorting_1">CENTRO ARMONICO PROMETEO SC</td>
                                                                    <td class=" ">CAP120310QJ4</td>
                                                                    <td class=" ">R 10904</td>
                                                                    <td class=" ">DOPDOP38042336</td>
                                                                    <td class=" ">$4,060.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">23 DE MAYO DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="628bc25e8baf8" data-folio="R 10904" data-receptor="CAP120310QJ4" data-numorder="DOPDOP38042336">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <td class="  sorting_1">CENTRO ARMONICO PROMETEO SC</td>
                                                                    <td class=" ">CAP120310QJ4</td>
                                                                    <td class=" ">R 10879</td>
                                                                    <td class=" ">1810</td>
                                                                    <td class=" ">$9,860.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">11 DE FEBRERO DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="6206d2b1ce1a2" data-folio="R 10879" data-receptor="CAP120310QJ4" data-numorder="1810">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="odd">
                                                                    <td class="  sorting_1">CENTRO ARMONICO PROMETEO SC</td>
                                                                    <td class=" ">CAP120310QJ4</td>
                                                                    <td class=" ">R 10877</td>
                                                                    <td class=" ">1803</td>
                                                                    <td class=" ">$1,200.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">28 DE ENERO DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="61f45022f1358" data-folio="R 10877" data-receptor="CAP120310QJ4" data-numorder="1803">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <td class="  sorting_1">CHOCOS RESTAURANTES SA DE CV</td>
                                                                    <td class=" ">CRE121022AQ3</td>
                                                                    <td class=" ">R 10933</td>
                                                                    <td class=" ">1876</td>
                                                                    <td class=" ">$1,357.20</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">19 DE OCTUBRE DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="6350740c84c10" data-folio="R 10933" data-receptor="CRE121022AQ3" data-numorder="1876">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="odd">
                                                                    <td class="  sorting_1">CHOCOS RESTAURANTES SA DE CV</td>
                                                                    <td class=" ">CRE121022AQ3</td>
                                                                    <td class=" ">R 10897</td>
                                                                    <td class=" ">1840</td>
                                                                    <td class=" ">$1,392.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">26 DE ABRIL DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="626820b97564c" data-folio="R 10897" data-receptor="CRE121022AQ3" data-numorder="1840">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <td class="  sorting_1">Coatepec Depot S.A. de C.V.</td>
                                                                    <td class=" ">CDE1703215P6</td>
                                                                    <td class=" ">R 10930</td>
                                                                    <td class=" ">1874</td>
                                                                    <td class=" ">$5,011.20</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">30 DE SEPTIEMBRE DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="633719ac913e0" data-folio="R 10930" data-receptor="CDE1703215P6" data-numorder="1874">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="odd">
                                                                    <td class="  sorting_1">COLEGIO DE INGENIEROS CIVILES DEL ESTADO DE MEXICO A.C.</td>
                                                                    <td class=" ">CIC671209UT4</td>
                                                                    <td class=" ">R 10907</td>
                                                                    <td class=" ">1850</td>
                                                                    <td class=" ">$7,888.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">31 DE MAYO DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="629696be69cf0" data-folio="R 10907" data-receptor="CIC671209UT4" data-numorder="1850">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <td class="  sorting_1">CONCEPTOS Y SERVICIOS INMOBILIARIOS SA DE CV</td>
                                                                    <td class=" ">CSI0705174WA</td>
                                                                    <td class=" ">R 10916</td>
                                                                    <td class=" ">1861</td>
                                                                    <td class=" ">$5,800.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">30 DE AGOSTO DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="630e45204e263" data-folio="R 10916" data-receptor="CSI0705174WA" data-numorder="1861">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="odd">
                                                                    <td class="  sorting_1">CORPORATIVO DE SERVICIOS ADUANEROS, S.C.</td>
                                                                    <td class=" ">CSA000803TC3</td>
                                                                    <td class=" ">R 10917</td>
                                                                    <td class=" ">1865</td>
                                                                    <td class=" ">$4,060.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">30 DE AGOSTO DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="630e71e1003ce" data-folio="R 10917" data-receptor="CSA000803TC3" data-numorder="1865">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <td class="  sorting_1">Diego Armando Rey López</td>
                                                                    <td class=" ">RELD8003216H7</td>
                                                                    <td class=" ">R 10894</td>
                                                                    <td class=" ">1829</td>
                                                                    <td class=" ">$2,668.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">17 DE MARZO DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="6233e5d485529" data-folio="R 10894" data-receptor="RELD8003216H7" data-numorder="1829">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="odd">
                                                                    <td class="  sorting_1">DISTRIBUIDOR DE FILTROS AUTOPARTES Y SERVICIO DE TOLUCA</td>
                                                                    <td class=" ">DFA951201CU0</td>
                                                                    <td class=" ">R 10918</td>
                                                                    <td class=" ">1863</td>
                                                                    <td class=" ">$8,700.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">31 DE AGOSTO DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="630f786038b55" data-folio="R 10918" data-receptor="DFA951201CU0" data-numorder="1863">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <td class="  sorting_1">Emery Cadó Rodriguez</td>
                                                                    <td class=" ">CARE8609068C9</td>
                                                                    <td class=" ">R 10896</td>
                                                                    <td class=" ">1835</td>
                                                                    <td class=" ">$2,340.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">07 DE ABRIL DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="624f46a4ee899" data-folio="R 10896" data-receptor="CARE8609068C9" data-numorder="1835">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="odd">
                                                                    <td class="  sorting_1">Flores de Chiltepec S.A de C.V</td>
                                                                    <td class=" ">FCI931005IQ8</td>
                                                                    <td class=" ">R 10886</td>
                                                                    <td class=" ">1821</td>
                                                                    <td class=" ">$9,043.36</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">28 DE FEBRERO DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="621d1f2732898" data-folio="R 10886" data-receptor="FCI931005IQ8" data-numorder="1821">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <td class="  sorting_1">Flores de Chiltepec S.A de C.V</td>
                                                                    <td class=" ">FCI931005IQ8</td>
                                                                    <td class=" ">R 10878</td>
                                                                    <td class=" ">1805</td>
                                                                    <td class=" ">$5,568.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">28 DE ENERO DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="61f46bccbf251" data-folio="R 10878" data-receptor="FCI931005IQ8" data-numorder="1805">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="odd">
                                                                    <td class="  sorting_1">Flores de Chiltepec S.A de C.V</td>
                                                                    <td class=" ">FCI931005IQ8</td>
                                                                    <td class=" ">R 10874</td>
                                                                    <td class=" ">1788</td>
                                                                    <td class=" ">$522.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">05 DE ENERO DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="61d61de6e8b02" data-folio="R 10874" data-receptor="FCI931005IQ8" data-numorder="1788">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <td class="  sorting_1">Fly High Mexico Handing Support SA de CV</td>
                                                                    <td class=" ">FHM1803261G4</td>
                                                                    <td class=" ">R 10929</td>
                                                                    <td class=" ">1873</td>
                                                                    <td class=" ">$4,060.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">30 DE SEPTIEMBRE DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="633718ef8ce8a" data-folio="R 10929" data-receptor="FHM1803261G4" data-numorder="1873">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="odd">
                                                                    <td class="  sorting_1">Grupo Impulso Leca S.A de C.V</td>
                                                                    <td class=" ">GIL160414DD6</td>
                                                                    <td class=" ">R 10910</td>
                                                                    <td class=" ">1853</td>
                                                                    <td class=" ">$3,200.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">01 DE JULIO DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="62bf30d0d51e8" data-folio="R 10910" data-receptor="GIL160414DD6" data-numorder="1853">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <td class="  sorting_1">GRUPO TACTEX, SA DE CV</td>
                                                                    <td class=" ">GTA151221DT3</td>
                                                                    <td class=" ">R 10932</td>
                                                                    <td class=" ">DOPDOP06072535</td>
                                                                    <td class=" ">$6,496.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">12 DE OCTUBRE DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="6347127643529" data-folio="R 10932" data-receptor="GTA151221DT3" data-numorder="DOPDOP06072535">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="odd">
                                                                    <td class="  sorting_1">GRUPO TACTEX, SA DE CV</td>
                                                                    <td class=" ">GTA151221DT3</td>
                                                                    <td class=" ">R 10925</td>
                                                                    <td class=" ">DOPDOP42132529</td>
                                                                    <td class=" ">$522.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">26 DE SEPTIEMBRE DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="63321a9395a76" data-folio="R 10925" data-receptor="GTA151221DT3" data-numorder="DOPDOP42132529">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <td class="  sorting_1">GRUPO TACTEX, SA DE CV</td>
                                                                    <td class=" ">GTA151221DT3</td>
                                                                    <td class=" ">R 10924</td>
                                                                    <td class=" ">DOPDOP42122528</td>
                                                                    <td class=" ">$1,624.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">26 DE SEPTIEMBRE DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="6332197006224" data-folio="R 10924" data-receptor="GTA151221DT3" data-numorder="DOPDOP42122528">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="odd">
                                                                    <td class="  sorting_1">GRUPO TACTEX, SA DE CV</td>
                                                                    <td class=" ">GTA151221DT3</td>
                                                                    <td class=" ">R 10923</td>
                                                                    <td class=" ">DOPDOP42112527</td>
                                                                    <td class=" ">$1,357.20</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">26 DE SEPTIEMBRE DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="633217e82b317" data-folio="R 10923" data-receptor="GTA151221DT3" data-numorder="DOPDOP42112527">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <td class="  sorting_1">GRUPO TACTEX, SA DE CV</td>
                                                                    <td class=" ">GTA151221DT3</td>
                                                                    <td class=" ">R 10892</td>
                                                                    <td class=" ">1827</td>
                                                                    <td class=" ">$40,000.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">14 DE MARZO DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="622f8d1eecca9" data-folio="R 10892" data-receptor="GTA151221DT3" data-numorder="1827">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="odd">
                                                                    <td class="  sorting_1">GRUPO TACTEX, SA DE CV</td>
                                                                    <td class=" ">GTA151221DT3</td>
                                                                    <td class=" ">R 10891</td>
                                                                    <td class=" ">1825</td>
                                                                    <td class=" ">$9,523.88</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">14 DE MARZO DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="622f8547a4327" data-folio="R 10891" data-receptor="GTA151221DT3" data-numorder="1825">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <td class="  sorting_1">GRUPO TACTEX, SA DE CV</td>
                                                                    <td class=" ">GTA151221DT3</td>
                                                                    <td class=" ">R 10885</td>
                                                                    <td class=" ">1817</td>
                                                                    <td class=" ">$19,024.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">21 DE FEBRERO DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="621410c2d6e7e" data-folio="R 10885" data-receptor="GTA151221DT3" data-numorder="1817">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="odd">
                                                                    <td class="  sorting_1">GRUPO TACTEX, SA DE CV</td>
                                                                    <td class=" ">GTA151221DT3</td>
                                                                    <td class=" ">R 10881</td>
                                                                    <td class=" ">1812</td>
                                                                    <td class=" ">$1,357.20</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">11 DE FEBRERO DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="6206d3c3950df" data-folio="R 10881" data-receptor="GTA151221DT3" data-numorder="1812">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <td class="  sorting_1">GRUPO TACTEX, SA DE CV</td>
                                                                    <td class=" ">GTA151221DT3</td>
                                                                    <td class=" ">R 10880</td>
                                                                    <td class=" ">1811</td>
                                                                    <td class=" ">$4,060.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">11 DE FEBRERO DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="6206d32b92fb2" data-folio="R 10880" data-receptor="GTA151221DT3" data-numorder="1811">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="odd">
                                                                    <td class="  sorting_1">HIDROTECNOLOGIA SISTEMAS Y TRATAMIENTO DE AGUA S.A. DE C.V.</td>
                                                                    <td class=" ">HST1810239K1</td>
                                                                    <td class=" ">R 10934</td>
                                                                    <td class=" ">1877</td>
                                                                    <td class=" ">$2,668.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">19 DE OCTUBRE DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="6350772f71458" data-folio="R 10934" data-receptor="HST1810239K1" data-numorder="1877">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <td class="  sorting_1">HT SICHERHEIT SA de CV</td>
                                                                    <td class=" ">HSI201208HX3</td>
                                                                    <td class=" ">R 10905</td>
                                                                    <td class=" ">1848</td>
                                                                    <td class=" ">$27,840.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">24 DE MAYO DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="628d28fe1c5fa" data-folio="R 10905" data-receptor="HSI201208HX3" data-numorder="1848">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="odd">
                                                                    <td class="  sorting_1">HT SICHERHEIT SA de CV</td>
                                                                    <td class=" ">HSI201208HX3</td>
                                                                    <td class=" ">R 10898</td>
                                                                    <td class=" ">1841</td>
                                                                    <td class=" ">$28,154.86</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">29 DE ABRIL DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="626c66cd67f76" data-folio="R 10898" data-receptor="HSI201208HX3" data-numorder="1841">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <td class="  sorting_1">IGEO MEXICO, S.A. DE C.V.</td>
                                                                    <td class=" ">IME1711141FA</td>
                                                                    <td class=" ">R 10903</td>
                                                                    <td class=" ">1847</td>
                                                                    <td class=" ">$870.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">20 DE MAYO DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="6288161c6fb57" data-folio="R 10903" data-receptor="IME1711141FA" data-numorder="1847">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="odd">
                                                                    <td class="  sorting_1">IGEO MEXICO, S.A. DE C.V.</td>
                                                                    <td class=" ">IME1711141FA</td>
                                                                    <td class=" ">R 10902</td>
                                                                    <td class=" ">1844</td>
                                                                    <td class=" ">$2,760.80</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">20 DE MAYO DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="628815f17ddae" data-folio="R 10902" data-receptor="IME1711141FA" data-numorder="1844">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <td class="  sorting_1">INSTITUTO TECOMENSE DE ESTUDIOS SUPERIORES LIC. BENITO JUÁREZ, A.C.</td>
                                                                    <td class=" ">ITE090818H35</td>
                                                                    <td class=" ">R 10943</td>
                                                                    <td class=" ">1882</td>
                                                                    <td class=" ">$11,461.40</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">18 DE NOVIEMBRE DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="6377bff22fa8d" data-folio="R 10943" data-receptor="ITE090818H35" data-numorder="1882">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="odd">
                                                                    <td class="  sorting_1">INSTITUTO TECOMENSE DE ESTUDIOS SUPERIORES LIC. BENITO JUÁREZ, A.C.</td>
                                                                    <td class=" ">ITE090818H35</td>
                                                                    <td class=" ">R 10883</td>
                                                                    <td class=" ">1814</td>
                                                                    <td class=" ">$4,060.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">16 DE FEBRERO DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="620d7932dea31" data-folio="R 10883" data-receptor="ITE090818H35" data-numorder="1814">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <td class="  sorting_1">JACID DE MEXICO SA DE CV</td>
                                                                    <td class=" ">JME021111DV0</td>
                                                                    <td class=" ">R 10909</td>
                                                                    <td class=" ">1852</td>
                                                                    <td class=" ">$696.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">24 DE JUNIO DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="62b5e8e1ef268" data-folio="R 10909" data-receptor="JME021111DV0" data-numorder="1852">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="odd">
                                                                    <td class="  sorting_1">JACID DE MEXICO SA DE CV</td>
                                                                    <td class=" ">JME021111DV0</td>
                                                                    <td class=" ">R 10906</td>
                                                                    <td class=" ">1849</td>
                                                                    <td class=" ">$5,220.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">31 DE MAYO DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="629655db67b24" data-folio="R 10906" data-receptor="JME021111DV0" data-numorder="1849">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <td class="  sorting_1">JOSE CUAUHTEMOC NOGUEZ CAPILLA</td>
                                                                    <td class=" ">NOCC750905N38</td>
                                                                    <td class=" ">R 10927</td>
                                                                    <td class=" ">1870</td>
                                                                    <td class=" ">$1,357.20</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">28 DE SEPTIEMBRE DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="6334d03957f42" data-folio="R 10927" data-receptor="NOCC750905N38" data-numorder="1870">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="odd">
                                                                    <td class="  sorting_1">JOSE CUAUHTEMOC NOGUEZ CAPILLA</td>
                                                                    <td class=" ">NOCC750905N38</td>
                                                                    <td class=" ">R 10888</td>
                                                                    <td class=" ">1822</td>
                                                                    <td class=" ">$4,060.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">07 DE MARZO DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="6226419885787" data-folio="R 10888" data-receptor="NOCC750905N38" data-numorder="1822">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <td class="  sorting_1">JOSE ROMAN BARTOLO PEREZ</td>
                                                                    <td class=" ">BAPR650802A89</td>
                                                                    <td class=" ">R 10889</td>
                                                                    <td class=" ">1823</td>
                                                                    <td class=" ">$4,060.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">09 DE MARZO DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="6228e2a12e309" data-folio="R 10889" data-receptor="BAPR650802A89" data-numorder="1823">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="odd">
                                                                    <td class="  sorting_1">Lean smart industrial solutions de mexico sa de cv</td>
                                                                    <td class=" ">LSI160311KBA</td>
                                                                    <td class=" ">R 10913</td>
                                                                    <td class=" ">1857</td>
                                                                    <td class=" ">$4,060.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">18 DE JULIO DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="62d5e7e7c6bb8" data-folio="R 10913" data-receptor="LSI160311KBA" data-numorder="1857">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <td class="  sorting_1">Lean smart industrial solutions de mexico sa de cv</td>
                                                                    <td class=" ">LSI160311KBA</td>
                                                                    <td class=" ">R 10893</td>
                                                                    <td class=" ">1828</td>
                                                                    <td class=" ">$2,186.60</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">17 DE MARZO DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="62337e673a2b9" data-folio="R 10893" data-receptor="LSI160311KBA" data-numorder="1828">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="odd">
                                                                    <td class="  sorting_1">Lean smart industrial solutions de mexico sa de cv</td>
                                                                    <td class=" ">LSI160311KBA</td>
                                                                    <td class=" ">R 10887</td>
                                                                    <td class=" ">DOPDOP02062260</td>
                                                                    <td class=" ">$2,186.60</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">03 DE MARZO DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="62214701d6c8b" data-folio="R 10887" data-receptor="LSI160311KBA" data-numorder="DOPDOP02062260">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <td class="  sorting_1">Lean smart industrial solutions de mexico sa de cv</td>
                                                                    <td class=" ">LSI160311KBA</td>
                                                                    <td class=" ">R 10876</td>
                                                                    <td class=" ">1799</td>
                                                                    <td class=" ">$2,186.60</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">18 DE ENERO DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="61e70a27ac572" data-folio="R 10876" data-receptor="LSI160311KBA" data-numorder="1799">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="odd">
                                                                    <td class="  sorting_1">LETICIA YOLANDA ESTRADA AYALA</td>
                                                                    <td class=" ">EAAL861217QU9</td>
                                                                    <td class=" ">R 10937</td>
                                                                    <td class=" ">DOPDOP42092566</td>
                                                                    <td class=" ">$1,357.20</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">27 DE OCTUBRE DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="635b1295405fa" data-folio="R 10937" data-receptor="EAAL861217QU9" data-numorder="DOPDOP42092566">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <td class="  sorting_1">LETICIA YOLANDA ESTRADA AYALA</td>
                                                                    <td class=" ">EAAL861217QU9</td>
                                                                    <td class=" ">R 10936</td>
                                                                    <td class=" ">DOPDOP22062559</td>
                                                                    <td class=" ">$5,568.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">27 DE OCTUBRE DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="635b1261bc5f7" data-folio="R 10936" data-receptor="EAAL861217QU9" data-numorder="DOPDOP22062559">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="odd">
                                                                    <td class="  sorting_1">LUIS ALBERTO SÁNCHEZ MENDOZA</td>
                                                                    <td class=" ">SAML861214LM5</td>
                                                                    <td class=" ">R 10884</td>
                                                                    <td class=" ">1816</td>
                                                                    <td class=" ">$4,060.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">19 DE FEBRERO DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="621149600ff54" data-folio="R 10884" data-receptor="SAML861214LM5" data-numorder="1816">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <td class="  sorting_1">MARTIN ERICK LOPEZ GARCIA</td>
                                                                    <td class=" ">LOGM731022E93</td>
                                                                    <td class=" ">R 10911</td>
                                                                    <td class=" ">1854</td>
                                                                    <td class=" ">$2,668.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">01 DE JULIO DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="62bf317922c9c" data-folio="R 10911" data-receptor="LOGM731022E93" data-numorder="1854">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="odd">
                                                                    <td class="  sorting_1">MAXIMILIANO CARBAJAL BOURGEOIS</td>
                                                                    <td class=" ">CABM691008SS8</td>
                                                                    <td class=" ">R 10900</td>
                                                                    <td class=" ">1846</td>
                                                                    <td class=" ">$1,740.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">19 DE MAYO DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="62866a6e2755f" data-folio="R 10900" data-receptor="CABM691008SS8" data-numorder="1846">Asignar a pedido</a>
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
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="6337189eae443" data-folio="R 10928" data-receptor="MABO7107287X2" data-numorder="1872">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="odd">
                                                                    <td class="  sorting_1">PAOLA PEREZ CORONA</td>
                                                                    <td class=" ">PECP920513BS0</td>
                                                                    <td class=" ">R 10901</td>
                                                                    <td class=" ">1842</td>
                                                                    <td class=" ">$2,600.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">19 DE MAYO DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="6286be3e0de0e" data-folio="R 10901" data-receptor="PECP920513BS0" data-numorder="1842">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <td class="  sorting_1">PETRUS TRADING SA DE CV</td>
                                                                    <td class=" ">PTR130903Q87</td>
                                                                    <td class=" ">R 10882</td>
                                                                    <td class=" ">1813</td>
                                                                    <td class=" ">$4,060.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">14 DE FEBRERO DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="620a97ebc1ad4" data-folio="R 10882" data-receptor="PTR130903Q87" data-numorder="1813">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="odd">
                                                                    <td class="  sorting_1">PROTEC SOLUCIONES INTEGRALES S.A. DE C.V.</td>
                                                                    <td class=" ">PSI1212199G5</td>
                                                                    <td class=" ">R 10941</td>
                                                                    <td class=" ">1881</td>
                                                                    <td class=" ">$1,357.20</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">11 DE NOVIEMBRE DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="636e7b672f5e9" data-folio="R 10941" data-receptor="PSI1212199G5" data-numorder="1881">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <td class="  sorting_1">PROTEC SOLUCIONES INTEGRALES S.A. DE C.V.</td>
                                                                    <td class=" ">PSI1212199G5</td>
                                                                    <td class=" ">R 10940</td>
                                                                    <td class=" ">1880</td>
                                                                    <td class=" ">$7,400.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">09 DE NOVIEMBRE DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="636be7c0e8f5d" data-folio="R 10940" data-receptor="PSI1212199G5" data-numorder="1880">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="odd">
                                                                    <td class="  sorting_1">PROTEC SOLUCIONES INTEGRALES S.A. DE C.V.</td>
                                                                    <td class=" ">PSI1212199G5</td>
                                                                    <td class=" ">R 10931</td>
                                                                    <td class=" ">1875</td>
                                                                    <td class=" ">$4,060.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">03 DE OCTUBRE DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="633b4784a2f68" data-folio="R 10931" data-receptor="PSI1212199G5" data-numorder="1875">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <td class="  sorting_1">PROTEC SOLUCIONES INTEGRALES S.A. DE C.V.</td>
                                                                    <td class=" ">PSI1212199G5</td>
                                                                    <td class=" ">R 10914</td>
                                                                    <td class=" ">1862</td>
                                                                    <td class=" ">$11,100.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">22 DE AGOSTO DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="6303bce126034" data-folio="R 10914" data-receptor="PSI1212199G5" data-numorder="1862">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="odd">
                                                                    <td class="  sorting_1">PROTEC SOLUCIONES INTEGRALES S.A. DE C.V.</td>
                                                                    <td class=" ">PSI1212199G5</td>
                                                                    <td class=" ">R 10895</td>
                                                                    <td class=" ">1832</td>
                                                                    <td class=" ">$4,765.05</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">22 DE MARZO DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="623a2f62cff7e" data-folio="R 10895" data-receptor="PSI1212199G5" data-numorder="1832">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <td class="  sorting_1">RAUL OSUNA HERNANDEZ</td>
                                                                    <td class=" ">OUHR830604FT2</td>
                                                                    <td class=" ">R 10912</td>
                                                                    <td class=" ">DOPDOP74042389</td>
                                                                    <td class=" ">$1,392.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">04 DE JULIO DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="62c3157514dad" data-folio="R 10912" data-receptor="OUHR830604FT2" data-numorder="DOPDOP74042389">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="odd">
                                                                    <td class="  sorting_1">SERGIO IVÁN MUNGUÍA ROMO</td>
                                                                    <td class=" ">MURS800530JV2</td>
                                                                    <td class=" ">R 10922</td>
                                                                    <td class=" ">DOPDOP93782501</td>
                                                                    <td class=" ">$522.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">22 DE SEPTIEMBRE DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="632c9cf13df23" data-folio="R 10922" data-receptor="MURS800530JV2" data-numorder="DOPDOP93782501">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <td class="  sorting_1">SERGIO IVÁN MUNGUÍA ROMO</td>
                                                                    <td class=" ">MURS800530JV2</td>
                                                                    <td class=" ">R 10921</td>
                                                                    <td class=" ">DOPDOP90832500</td>
                                                                    <td class=" ">$7,540.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">22 DE SEPTIEMBRE DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="632c9ccfb211d" data-folio="R 10921" data-receptor="MURS800530JV2" data-numorder="DOPDOP90832500">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="odd">
                                                                    <td class="  sorting_1">SERGIO IVÁN MUNGUÍA ROMO</td>
                                                                    <td class=" ">MURS800530JV2</td>
                                                                    <td class=" ">R 10920</td>
                                                                    <td class=" ">DOPDOP98612505</td>
                                                                    <td class=" ">$522.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">22 DE SEPTIEMBRE DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="632c9b877681e" data-folio="R 10920" data-receptor="MURS800530JV2" data-numorder="DOPDOP98612505">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <td class="  sorting_1">SERGIO IVÁN MUNGUÍA ROMO</td>
                                                                    <td class=" ">MURS800530JV2</td>
                                                                    <td class=" ">R 10919</td>
                                                                    <td class=" ">DOPDOP74052474</td>
                                                                    <td class=" ">$522.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">21 DE SEPTIEMBRE DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="632b937e0b750" data-folio="R 10919" data-receptor="MURS800530JV2" data-numorder="DOPDOP74052474">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="odd">
                                                                    <td class="  sorting_1">Servicios Aereos Surtep SA de CV</td>
                                                                    <td class=" ">SAS070411KX6</td>
                                                                    <td class=" ">R 10899</td>
                                                                    <td class=" ">1845</td>
                                                                    <td class=" ">$4,060.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">16 DE MAYO DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="6282905562611" data-folio="R 10899" data-receptor="SAS070411KX6" data-numorder="1845">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <td class="  sorting_1">VICENTE ANTONIO MADRIGAL SALAS</td>
                                                                    <td class=" ">MASV900604824</td>
                                                                    <td class=" ">R 10942</td>
                                                                    <td class=" ">DOPDOP58122595</td>
                                                                    <td class=" ">$2,668.00</td>
                                                                    <td class=" ">enviada</td>
                                                                    <td class=" ">17 DE NOVIEMBRE DE 2022</td>
                                                                    <td class=" ">
                                                                        <a href="#" class="btn btn-primary" onclick="javascript:facturaapi.asignarapedido(this); return false;" data-uuid="6376cbdf75d2e" data-folio="R 10942" data-receptor="MASV900604824" data-numorder="DOPDOP58122595">Asignar a pedido</a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="dataTables_info" id="tblasignarfactura_info">Mostrando 1 / 68 de 68 registros</div>
                                                            </div>
                                                            <div class="col-md-6"></div>
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