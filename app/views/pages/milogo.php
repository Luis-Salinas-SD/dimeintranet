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
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <!-- Propuesta de Tabla 1 -->
                                        <!-- <table class="table table-centered mb-0" id="inline-editable">
                                            <thead>
                                                <tr>
                                                    <th>Fecha</th>
                                                    <th>Empresa</th>
                                                    <th>Contacto</th>
                                                    <th>Email</th>
                                                    <th>Dirección</th>
                                                    <th>Teléfono</th>
                                                    <th>Nosotros</th>
                                                    <th>Solicitud</th>
                                                    <th>Descripción</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr id="1">
                                                    <td>2011/04/25</td>
                                                    <td class="tabledit-view-mode" style="cursor: pointer;">
                                                        <span class="tabledit-span" style="">Instituto Tecomense</span>
                                                        <input class="tabledit-input form-control form-control-sm" type="text" name="col1" value="Instituto Tecomense" style="display: none;" disabled="">
                                                    </td>
                                                    <td class="tabledit-view-mode" style="cursor: pointer;">
                                                        <span class="tabledit-span" style="">System Architect</span>
                                                        <input class="tabledit-input form-control form-control-sm" type="text" name="col2" value="System Architect" style="display: none;" disabled="">
                                                    </td>
                                                    <td class="tabledit-view-mode" style="cursor: pointer;">
                                                        <span class="tabledit-span" style="">Edinburgh</span>
                                                        <input class="tabledit-input form-control form-control-sm" type="text" name="col3" value="Edinburgh" style="display: none;" disabled="">
                                                    </td>
                                                    <td class="tabledit-view-mode" style="cursor: pointer;">
                                                        <span class="tabledit-span">61</span>
                                                        <input class="tabledit-input form-control form-control-sm" type="text" name="col4" value="61" style="display: none;" disabled="">
                                                    </td>
                                                    <td class="tabledit-view-mode" style="cursor: pointer;">
                                                        <span class="tabledit-span" style="">$320,800</span>
                                                        <input class="tabledit-input form-control form-control-sm" type="text" name="col6" value="$320,800" style="display: none;" disabled="">
                                                    </td>
                                                    <td class="tabledit-view-mode" style="cursor: pointer;">
                                                        <span class="tabledit-span" style="">$320,800</span>
                                                        <input class="tabledit-input form-control form-control-sm" type="text" name="col6" value="$320,800" style="display: none;" disabled="">
                                                    </td>
                                                    <td class="tabledit-view-mode" style="cursor: pointer;">
                                                        <span class="tabledit-span" style="">$320,800</span>
                                                        <input class="tabledit-input form-control form-control-sm" type="text" name="col6" value="$320,800" style="display: none;" disabled="">
                                                    </td>
                                                    <td class="tabledit-view-mode" style="cursor: pointer;">
                                                        <span class="tabledit-span" style="">Instituto Tecomense</span>
                                                        <input class="tabledit-input form-control form-control-sm" type="text" name="col1" value="Instituto Tecomense" style="display: none;" disabled="">
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" class="form-check-input" id="customSwitch1">
                                                        <input type="checkbox" class="form-check-input" id="customSwitch1">
                                                        <input type="checkbox" class="form-check-input" id="customSwitch1">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table> -->
                                        <table id="permisos" class="permisos table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>fetch</th>
                                                    <th>Empresa</th>
                                                    <th>Contacto</th>
                                                    <th>Email</th>
                                                    <th>Dirección</th>
                                                    <th>Teléfono</th>
                                                    <th>Nosotros</th>
                                                    <th>Solicitud</th>
                                                    <th>Descripcón</th>
                                                    <th>Estatus</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <td>16 DE NOVIEMBRE DE 2022</td>
                                                    <td>Estudio Antidoto</td>
                                                    <td>Sebastian Perez</td>
                                                    <td>sebastian@estudioantidoto.com.ar</td>
                                                    <td>Buenos Aires</td>
                                                    <td>+54 9 11 2255-8424</td>
                                                    <td>Por un buscador</td>
                                                    <td>Mensaje al Director</td>
                                                    <td>Muy buenos días.

                                                        Nos ponemos en contacto con ustedes para ofrecerle .....</td>
                                                    <td>
                                                        <input type="checkbox" class="form-check-input" id="customSwitch1">
                                                        <input type="checkbox" class="form-check-input" id="customSwitch2">
                                                        <input type="checkbox" class="form-check-input" id="customSwitch3">
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Información</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <ul class="nav nav-tabs">
                                                            <li class="nav-item">
                                                                <a href="#home" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                                    Home
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="#profile" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                                    Profile
                                                                </a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="#messages" data-bs-toggle="tab" aria-expanded="false" class="nav-link">
                                                                    Messages
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="home">
                                                                <div class="col-12 px-2">
                                                                    <h1>Encabezado</h1>
                                                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam, quisquam? Ducimus odio illo eum fugit animi quasi neque dolore, excepturi ipsum, magnam illum incidunt voluptas architecto velit ut quia rerum!</p>
                                                                </div>
                                                                <div class="col-7 px-2">
                                                                    <div class="table-responsive">
                                                                        <div class="respporspec">
                                                                            <div class="callout callout-info animated fadeInUp"> Prospecto Guardado Correctamente</div>
                                                                        </div>
                                                                        <table class="table table-bordered table-striped">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th>Tipo de Solicitud</th>
                                                                                    <td>Mensaje Al Director</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th>Cliente</th>
                                                                                    <td>Sebastian Perez</td>
                                                                                    <input name="contacto" type="hidden" value="Sebastian Perez">
                                                                                    <input name="solicitud_id" type="hidden" value="1144">
                                                                                    <input name="type" type="hidden" value="Prospecto">
                                                                                </tr>
                                                                                <tr>
                                                                                    <th>Teléfono</th>
                                                                                    <td>+54 9 11 2255-8424</td>
                                                                                    <input name="phone" type="hidden" value="+54 9 11 2255-8424">
                                                                                </tr>
                                                                                <tr>
                                                                                    <th>Email</th>
                                                                                    <td>sebastian@estudioantidoto.com.ar</td>
                                                                                    <input name="email" type="hidden" value="sebastian@estudioantidoto.com.ar">
                                                                                </tr>
                                                                                <tr>
                                                                                    <th>Dirección</th>
                                                                                    <td>Buenos Aires</td>
                                                                                    <input name="address" type="hidden" value="Buenos Aires">
                                                                                </tr>
                                                                                <tr>
                                                                                    <th>Empresa</th>
                                                                                    <td>
                                                                                        Estudio Antidoto
                                                                                        <input name="company" type="hidden" value="Estudio Antidoto">

                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th>Solicitud</th>
                                                                                    <td>Muy Buenos Días.<br>
                                                                                        <br>
                                                                                        Nos Ponemos En Contacto Con Ustedes Para Ofrecerles Nuestros&nbsp;servicios De Diseño, Desarrollo Web Y Desarrollo De Software A Medida.&nbsp;Somos Un Estudio De Diseño Con Más De 15 Años En El Rubro.&nbsp;Estamos Perfectamente Cualificados Y Formados, Garantizando En Todo Momento La Mejor Predisposición Y Calidad De Nuestro Trabajo.<br>
                                                                                        <br>
                                                                                        Nuestro Estudio Está En&nbsp;Buenos Aires, Argentina. Estamos Buscando Expandir Nuestra área De Servicio Y Poder Trabajar Junto A Otros Estudios. Las Ventajas Que Obtendrán&nbsp;es Que Los Costos De Producción Son Menores En Nuestro País, Aumentando Así Sus Ganancias.<br>
                                                                                        <br>
                                                                                        Nos Encantaría Poder Trabajar Junto A Su Estudio, Nos Especializamos En:<br>
                                                                                        - Diseño De Imagen Corporativa<br>
                                                                                        - Community Manager<br>
                                                                                        - Diseño De Paginas Web<br>
                                                                                        - Diseño Y Desarrollo De Software Web A Medida. (Desarrollo De Front-end Y Back-end, CRM, Base De Datos Y Despliegue. CodeIgniter · MySQL · Git · JavaScript · Aplicaciones Web Progresivas)<br>
                                                                                        <br>
                                                                                        Pueden Ver Algunos De Nuestros Trabajos En Nuestro Sitio Web:&nbsp;www.estudioantidoto.com.ar<br>
                                                                                        <br>
                                                                                        Les Dejamos 3 De Las últimos Proyectos Que Hemos Desarrollado:<br>
                                                                                        <br>
                                                                                        -&nbsp;<a href="https://www.net-seguros.com.ar/" target="_blank" class="btn btn-sm btn-primary">Clic para ver Información</a>&nbsp;(Multicotizador De Seguros Online, Con Un CRM Y Base De Datos)<br>
                                                                                        -&nbsp;<a href="https://www.grupoarb.com.ar/" target="_blank" class="btn btn-sm btn-primary">Clic para ver Información</a>&nbsp;(Web Institucional)<br>
                                                                                        -&nbsp;<a href="https://acodepa.org/" target="_blank" class="btn btn-sm btn-primary">Clic para ver Información</a>&nbsp;(Web Institucional, Con CRM Y Base De Datos Para Organización De Eventos Deportivos.<br>
                                                                                        <br>
                                                                                        Quedamos A Disposición Por Cualquier Consulta. Esperamos Tengan Un Excelente Día.<br>
                                                                                        Saludos Cordiales<br>
                                                                                        <br>
                                                                                        Sebastian
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="col-4 px-2">
                                                                    Formulario
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane show" id="profile">
                                                                <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                                                <p class="mb-0">Vakal text here dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                                            </div>
                                                            <div class="tab-pane" id="messages">
                                                                <p>Vakal text here dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                                                                <p class="mb-0">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>



                                    </div>
                                </div> <!-- end card-body -->
                            </div> <!-- end card -->
                        </div> <!-- end col -->
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