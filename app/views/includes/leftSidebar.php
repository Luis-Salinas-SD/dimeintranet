<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->
        <div class="user-box text-center">

            <img src="../../../public/img/users/user-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail avatar-md">
            <div class="dropdown">
                <a href="#" class="user-name dropdown-toggle h5 mt-2 mb-1 d-block" data-bs-toggle="dropdown" aria-expanded="false">Usuario Dime</a>
                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user me-1"></i>
                        <span>Mi cuenta</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings me-1"></i>
                        <span>Configuración</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock me-1"></i>
                        <span>Lock Screen</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out me-1"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </div>

            <p class="text-primary left-user-info">Puesto</p>

            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="#" class="text-secondary left-user-info">
                        <i class="mdi mdi-cog"></i>
                    </a>
                </li>

                <li class="list-inline-item">
                    <a href="#" class="text-danger">
                        <i class="mdi mdi-power"></i>
                    </a>
                </li>
            </ul>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Panel de navegación</li>
                <!-- Dashboard -->
                <li>
                    <a href="../pages/dashboard.php">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span> Dashboard </span>
                    </a>
                </li>
                <!-- Clientes -->
                <li>
                    <a href="../pages/clientes.php">
                        <i class="pt-1 mdi-18px mdi mdi-account"></i>
                        <span> Clientes</span>
                    </a>
                </li>
                <!-- Cotizaciones -->
                <li>
                    <a href="../pages/cotizaciones.php">
                        <i class=" pt-1 mdi-18px mdi mdi-calculator-variant-outline"></i>
                        <span> Cotizaciones </span>
                    </a>
                </li>
                <!-- Proveedores -->
                <li>
                    <a href="#prov" data-bs-toggle="collapse">
                        <i class="fas fa-user-friends"></i>
                        <span> Proveedores </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="prov">
                        <ul class="nav-second-level">
                            <li class="d-inline-flex">
                                <i class="pt-2 fas fa-user-edit"></i>
                                <a href="../pages/registroProveedor.php">Registro Proveedor</a>
                            </li>
                            <li class="d-inline-flex">
                                <i class="pt-2 fas fa-user-check"></i>
                                <a href="../pages/ordenCompra.php">Orden de compra</a>
                            </li>
                            <li class="d-inline-flex">
                                <i class="pt-2 fas fa-user-tag"></i>
                                <a href="../pages/ocArchivadas.php">O.C Archivadas</a>
                            </li>
                            <li class="d-inline-flex">
                                <i class="pt-2  fas fa-user-lock"></i>
                                <a href="../pages/ocSuspendidas.php">O.C Suspendidas</a>
                            </li>
                            <li class="d-inline-flex">
                                <i class="pt-2   fas fa-poll-h"></i>
                                <a href="../pages/proveedores.php">Reportes</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- Su Web -->
                <li>
                    <a href="#sidebarMultilevel" data-bs-toggle="collapse">
                        <i class="fab fa-mixcloud"></i>
                        <span> SUWEB </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarMultilevel">
                        <ul class="nav-second-level">
                            <li class="d-inline-flex">
                                <i class="pt-2  fas fa-server"></i>
                                <a href="../pages/servers.php">Servidores</a>
                            </li>
                            <li class="d-inline-flex">
                                <i class="pt-2  fas fa-inbox"></i>
                                <a href="../pages/packs.php">Paquetes</a>
                            </li>
                            <li class="d-inline-flex">
                                <i class="pt-2  fas fa-calendar-day"></i>
                                <a href="../pages/renovaciones.php">Factura de Renovaciones</a>
                            </li>
                            <li class="bg-opacity-75 bg-soft-primary">
                                <a href="#submenuWeb2" data-bs-toggle="collapse">
                                    <i class="pt-1 mdi-18px mdi mdi-sitemap"></i>
                                    Servicios WEB <span class="menu-arrow"></span>
                                </a>
                                <!-- Submenu -->
                                <div class="collapse" id="submenuWeb2">
                                    <ul class="nav-second-level">
                                        <li class="d-inline-flex">
                                            <i class="pt-1  mdi mdi-web-clock"></i>
                                            <a href="../pages/dominios.php">Por vencer</a>
                                        </li>
                                        <li class="d-inline-flex">
                                            <i class="pt-1  mdi mdi-server-security"></i>
                                            <a href="../pages/dominiosActivos.php">Activos</a>
                                        </li>
                                        <li class="d-inline-flex">
                                            <i class="pt-1  mdi mdi-server-off"></i>
                                            <a href="../pages/dominiosVencidos.php">Vencidos</a>
                                        </li>
                                        <li class="d-inline-flex">
                                            <i class="pt-1  mdi mdi-server-remove"></i>
                                            <a href="../pages/dominiosInactivos.php">Inactivos</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- Solicitudes -->
                <li>
                    <a href="#sol" data-bs-toggle="collapse">
                        <i class="fas fas fa-address-card"></i>
                        <span> Solicitudes </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sol">
                        <ul class="nav-second-level">
                            <li class="d-inline-flex col-12">
                                <i class="pt-2 far fa-lightbulb"></i>
                                <a href="../pages/milogo.php">Milogo</a>
                            </li>
                            <li class="d-inline-flex col-12">
                                <i class="pt-2 far fa-lightbulb"></i>
                                <a href="contacts-list.html">Suweb</a>
                            </li>
                            <li class="d-inline-flex col-12">
                                <i class="pt-2 far fa-lightbulb"></i>
                                <a href="contacts-list.html">Dime</a>
                            </li>
                            <li class="d-inline-flex col-12">
                                <i class="pt-2 far fa-lightbulb"></i>
                                <a href="contacts-list.html">Misistema</a>
                            </li>
                            <li class="d-inline-flex col-12">
                                <i class="pt-2 far fa-lightbulb"></i>
                                <a href="contacts-list.html">Imprenta</a>
                            </li>
                            <li class="d-inline-flex col-12">
                                <i class="pt-2 far fa-lightbulb"></i>
                                <a href="contacts-list.html">Mi360</a>
                            </li>
                            <li class="d-inline-flex col-12">
                                <i class="pt-2 far fa-lightbulb"></i>
                                <a href="contacts-list.html">Renta un Drone</a>
                            </li>
                            <li class="d-inline-flex col-12">
                                <i class="pt-2 far fa-lightbulb"></i>
                                <a href="contacts-list.html">Misistema</a>
                            </li>
                            <li class="d-inline-flex col-12">
                                <i class="pt-2 far fa-lightbulb"></i>
                                <a href="contacts-list.html">Dime.com.mx</a>
                            </li>
                            <li class="d-inline-flex col-12">
                                <i class="pt-2 far fa-lightbulb"></i>
                                <a href="contacts-list.html">Archivados</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- Pedidos -->
                <li>
                    <a href="#pedido" data-bs-toggle="collapse">
                        <i class="fas fa-dolly"></i>
                        <span> Pedidos </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="pedido">
                        <ul class="nav-second-level">
                            <li class="d-inline-flex col-12">
                                <i class="pt-1 mdi mdi-18px mdi-beaker-outline"></i>
                                <a href="../pages/pedidosPendientes.php">Pedidos</a>
                            </li>
                            <li class="d-inline-flex col-12">
                                <i class="pt-1 mdi mdi-18px mdi-beaker-question-outline"></i>
                                <a href="../pages/pArchivado.php">Archivados</a>
                            </li>
                            <li class="d-inline-flex col-12">
                                <i class="pt-1 mdi mdi-18px mdi-beaker-remove"></i>
                                <a href="../pages/pAbandonado.php">Abandonados</a>
                            </li>
                            <li class=" d-inline-flex col-12">
                                <i class="pt-1 mdi mdi-18px mdi-contactless-payment"></i>
                                <a href="../pages/pOrdenPago.php">Ordenes de pago</a>
                            </li>
                            <li class="d-inline-flex col-12">
                                <i class="pt-1 mdi mdi-18px mdi-cash-register"></i>
                                <a href="../pages/pCuenta.php">Cuentas por cobrar</a>
                            </li>
                            <li class="d-inline-flex col-12">
                                <i class="pt-1 mdi mdi-18px mdi-timer-sand"></i>
                                <a href="../pages/pFactura.php">Facturas pendientes</a>
                            </li>
                            <li class="d-inline-flex col-12">
                                <i class="pt-1 mdi mdi-18px mdi-clipboard-edit-outline"></i>
                                <a href="../pages/pAsignFactura.php">Asignar facturas</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- Mercadotecnia -->
                <li>
                    <a href="#merch" data-bs-toggle="collapse">
                        <i class="pt-1 mdi-18px mdi mdi-qrcode-scan"></i>
                        <span> Mercadotecnia </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="merch">
                        <ul class="nav-second-level">
                            <li class="d-inline-flex col-12">
                                <i class="pt-2 far fa-chart-bar"></i>
                                <a href="../pages/mEstadisticas.php">Estadisticas</a>
                            </li>
                            <li class="d-inline-flex col-12">
                                <i class="pt-2  fas fa-user-circle"></i>
                                <a href="../pages/mClientes.php">Clientes</a>
                            </li>
                            <li class="d-inline-flex col-12">
                                <i class="pt-2 fas fa-eye"></i>
                                <a href="../pages/mBanner.php">Banner promocional</a>
                            </li>
                            <li class="d-inline-flex col-12">
                                <i class="pt-2  fas fa-laptop-code"></i>
                                <a href="../pages/mLanding.php">Landing pages</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- Reports -->
                <li>
                    <a href="#rep" data-bs-toggle="collapse">
                        <i class="pt-1 mdi-18px mdi mdi-microsoft-excel"></i>
                        <span> Reportes </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="rep">
                        <ul class="nav-second-level">
                            <li class="d-inline-flex col-12">
                                <i class="pt-2 fas fa-dolly"></i>
                                <a href="../pages/reportPedidos.php">Pedidos</a>
                            </li>
                            <li class="d-inline-flex col-12">
                                <i class="pt-2  mdi mdi-dot-net"></i>
                                <a href="../pages/reportDominios.php">Dominios</a>
                            </li>
                            <li class="d-inline-flex col-12">
                                <i class="pt-2 mdi mdi-file-document-edit-outline"></i>
                                <a href="../pages/reportConta.php">Cotizaciones</a>
                            </li>
                            <li class="d-inline-flex col-12">
                                <i class="pt-2  mdi mdi-file-table-outline"></i>
                                <a href="../pages/reportConta.php">Contabilidad</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- Productos -->
                <li>
                    <a href="#product" data-bs-toggle="collapse">
                        <i class="pt-1 mdi-18px mdi mdi-shopping"></i>
                        <span> Productos </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="product">
                        <ul class="nav-second-level">
                            <li class="d-inline-flex col-12">
                                <i class="pt-1 mdi mdi-18px mdi-cart-outline"></i>
                                <a href="contacts-list.html">Productos</a>
                            </li>
                            <li class="d-inline-flex col-12">
                                <i class="pt-1  mdi mdi-18px mdi-view-grid-plus"></i>
                                <a href="contacts-list.html">Categorías productos</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- Contabilidad -->
                <li>
                    <a href="#cont" data-bs-toggle="collapse">
                        <i class="pt-1 mdi-18px mdi mdi-file-chart-outline"></i>
                        <span> Contabilidad </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="cont">
                        <ul class="nav-second-level">
                            <li class="d-inline-flex col-12">
                                <i class="pt-1 mdi mdi-18px mdi-bank"></i>
                                <a href="contacts-list.html">Reporte Bancos</a>
                            </li>
                            <li class="d-inline-flex col-12">
                                <i class="pt-1  mdi mdi-18px mdi-file-chart"></i>
                                <a href="contacts-list.html">Cuentas contables</a>
                            </li>
                            <li class="d-inline-flex col-12">
                                <i class="pt-1  mdi mdi-18px mdi-account-cash-outline"></i>
                                <a href="contacts-list.html">Datos bancarios</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- Administracion -->
                <li>
                    <a href="#admin" data-bs-toggle="collapse">
                        <i class="pt-1 mdi-18px mdi mdi-file-cog"></i>
                        <span> Administración </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="admin">
                        <ul class="nav-second-level">
                            <li>
                                <a href="#submenuAdmin2" data-bs-toggle="collapse">
                                    <i class="pt-2 fa-1x fas fa-search-dollar"></i>
                                    Catálogos del SAT<span class="menu-arrow pt-1"></span>
                                </a>
                                <div class="collapse" id="submenuAdmin2">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="#">Productos y Servicios SAT</a>
                                        </li>
                                        <li>
                                            <a href="#">Impuesto</a>
                                        </li>
                                        <li>
                                            <a href="#">Uso de CFDI</a>
                                        </li>
                                        <li>
                                            <a href="#">Formas de pago</a>
                                        </li>
                                        <li>
                                            <a href="#">Métodos de pago</a>
                                        </li>
                                        <li>
                                            <a href="#">Unidad de</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="#" data-bs-toggle="collapse">
                                    <i class="pt-1 mdi-18px mdi mdi-office-building-outline"></i>
                                    Empresas
                                </a>
                            </li>
                            <li>
                                <a href="#" data-bs-toggle="collapse">
                                    <i class="pt-1 mdi-18px mdi mdi-book-clock-outline"></i>
                                    Divisiones
                                </a>
                            </li>
                            <li>
                                <a href="#" data-bs-toggle="collapse">
                                    <i class="pt-2 fa-1x  fas fa-user-friends"></i>
                                    Usuarios
                                </a>
                            </li>
                            <li>
                                <a href="#" data-bs-toggle="collapse">
                                    <i class="pt-2 fa-1x fas  fas fa-layer-group"></i>
                                    Grupos
                                </a>
                            </li>
                            <li>
                                <a href="#" data-bs-toggle="collapse">
                                    <i class="pt-1 mdi-18px mdi mdi-block-helper"></i>
                                    Permisos
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->