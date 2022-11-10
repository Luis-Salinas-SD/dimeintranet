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
                <!-- Empresa 1 -->
                <div class="container-fluid">
                    <div class="row">
                        <h1>Paquetes</h1>
                        <a href="../pages/addpack.php" class="btn btn-success waves-effect waves-light col-4  col-md-2 col-sm-4 m-2">
                            Añadir Paquete
                        </a>
                        <!-- Filtros search init-->
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Filtros</h4>
                                    <form class="app-search col-4 mt-3 mb-3 col-10 col-lg-3">
                                        <div class="app-search-box">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Buscar aqui" id="top-search">
                                                <button class="btn input-group-text" type="submit">
                                                    <i class="fe-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Filtros search fin-->
                    </div>
                    <div class="col-lg-12">
                        <div class="row justify-content-center">
                            <!--tomo 1  -->
                            <article class="pricing-column col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="inner-box card-body">
                                        <div class="plan-header p-3 text-center">
                                            <h3 class="plan-title">Web Basic</h3>
                                            <h2 class="plan-price fw-normal">Precio: $4,960.00</h2>
                                            <div class="plan-duration">Dominios Registrados: 55</div>
                                        </div>
                                        <div class="form-group text-center">
                                            <a type="button" class="btn btn-success waves-effect waves-light" href="./packs-details.php">
                                                <i class="fe-eye"></i>
                                            </a>
                                            <a type="button" class="btn btn-info waves-effect waves-light" href="./packs-edit.php">
                                                <i class="fe-edit"></i></a>
                                            <button type="button" class="btn btn-danger waves-effect waves-light"><i class="fe-x-circle"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!--tomo 2  -->
                            <article class="pricing-column col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="inner-box card-body">
                                        <div class="plan-header p-3 text-center">
                                            <h3 class="plan-title">Web Standard</h3>
                                            <h2 class="plan-price fw-normal">Precio: $7,200.00</h2>
                                            <div class="plan-duration">Dominios Registrados: 86</div>
                                        </div>
                                        <div class="form-group text-center">
                                            <button type="button" class="btn btn-success waves-effect waves-light"><i class="fe-eye"></i></button>
                                            <button type="button" class="btn btn-info waves-effect waves-light"><i class="fe-edit"></i></button>
                                            <button type="button" class="btn btn-danger waves-effect waves-light"><i class="fe-x-circle"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!--tomo 3  -->
                            <article class="pricing-column col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="inner-box card-body">
                                        <div class="plan-header p-3 text-center">
                                            <h3 class="plan-title">Web Pro</h3>
                                            <h2 class="plan-price fw-normal">Precio: $9,888.00</h2>
                                            <div class="plan-duration">Dominios Registrados: 90</div>
                                        </div>
                                        <div class="form-group text-center">
                                            <button type="button" class="btn btn-success waves-effect waves-light"><i class="fe-eye"></i></button>
                                            <button type="button" class="btn btn-info waves-effect waves-light"><i class="fe-edit"></i></button>
                                            <button type="button" class="btn btn-danger waves-effect waves-light"><i class="fe-x-circle"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!--tomo 4  -->
                            <article class="pricing-column col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="inner-box card-body">
                                        <div class="plan-header p-3 text-center">
                                            <h3 class="plan-title">Web Elite</h3>
                                            <h2 class="plan-price fw-normal">Precio: $14,224.00</h2>
                                            <div class="plan-duration">Dominios Registrados: 55</div>
                                        </div>
                                        <div class="form-group text-center">
                                            <button type="button" class="btn btn-success waves-effect waves-light"><i class="fe-eye"></i></button>
                                            <button type="button" class="btn btn-info waves-effect waves-light"><i class="fe-edit"></i></button>
                                            <button type="button" class="btn btn-danger waves-effect waves-light"><i class="fe-x-circle"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!--tomo 5 -->
                            <article class="pricing-column col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="inner-box card-body">
                                        <div class="plan-header p-3 text-center">
                                            <h3 class="plan-title">Dominio .com</h3>
                                            <h2 class="plan-price fw-normal">Precio: $450.00</h2>
                                            <div class="plan-duration">Dominios Registrados: 15</div>
                                        </div>
                                        <div class="form-group text-center">
                                            <button type="button" class="btn btn-success waves-effect waves-light"><i class="fe-eye"></i></button>
                                            <button type="button" class="btn btn-info waves-effect waves-light"><i class="fe-edit"></i></button>
                                            <button type="button" class="btn btn-danger waves-effect waves-light"><i class="fe-x-circle"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!--tomo 6 -->
                            <article class="pricing-column col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="inner-box card-body">
                                        <div class="plan-header p-3 text-center">
                                            <h3 class="plan-title">Dominio .com.mx</h3>
                                            <h2 class="plan-price fw-normal">Precio: $550.00</h2>
                                            <div class="plan-duration">Dominios Registrados: 25</div>
                                        </div>
                                        <div class="form-group text-center">
                                            <button type="button" class="btn btn-success waves-effect waves-light"><i class="fe-eye"></i></button>
                                            <button type="button" class="btn btn-info waves-effect waves-light"><i class="fe-edit"></i></button>
                                            <button type="button" class="btn btn-danger waves-effect waves-light"><i class="fe-x-circle"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!--tomo 7 -->
                            <article class="pricing-column col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="inner-box card-body">
                                        <div class="plan-header p-3 text-center">
                                            <h3 class="plan-title">Dominio .mx</h3>
                                            <h2 class="plan-price fw-normal">Precio: $650.00</h2>
                                            <div class="plan-duration">Dominios Registrados: 4</div>
                                        </div>
                                        <div class="form-group text-center">
                                            <button type="button" class="btn btn-success waves-effect waves-light"><i class="fe-eye"></i></button>
                                            <button type="button" class="btn btn-info waves-effect waves-light"><i class="fe-edit"></i></button>
                                            <button type="button" class="btn btn-danger waves-effect waves-light"><i class="fe-x-circle"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!--tomo 8 -->
                            <article class="pricing-column col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="inner-box card-body">
                                        <div class="plan-header p-3 text-center">
                                            <h3 class="plan-title">Modulo de Tienda en Linea</h3>
                                            <h2 class="plan-price fw-normal">Precio: $1,500.00</h2>
                                            <div class="plan-duration">Dominios Registrados: 0</div>
                                        </div>
                                        <div class="form-group text-center">
                                            <button type="button" class="btn btn-success waves-effect waves-light"><i class="fe-eye"></i></button>
                                            <button type="button" class="btn btn-info waves-effect waves-light"><i class="fe-edit"></i></button>
                                            <button type="button" class="btn btn-danger waves-effect waves-light"><i class="fe-x-circle"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!--tomo 9 -->
                            <article class="pricing-column col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="inner-box card-body">
                                        <div class="plan-header p-3 text-center">
                                            <h3 class="plan-title">Certificado de Seguridad SSL</h3>
                                            <h2 class="plan-price fw-normal">Precio: $1,357.00</h2>
                                            <div class="plan-duration">Dominios Registrados: 45</div>
                                        </div>
                                        <div class="form-group text-center">
                                            <button type="button" class="btn btn-success waves-effect waves-light"><i class="fe-eye"></i></button>
                                            <button type="button" class="btn btn-info waves-effect waves-light"><i class="fe-edit"></i></button>
                                            <button type="button" class="btn btn-danger waves-effect waves-light"><i class="fe-x-circle"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!--tomo 10 -->
                            <article class="pricing-column col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="inner-box card-body">
                                        <div class="plan-header p-3 text-center">
                                            <h3 class="plan-title">Google G Suite</h3>
                                            <h2 class="plan-price fw-normal">Precio: $50.00</h2>
                                            <div class="plan-duration">Dominios Registrados: 16</div>
                                        </div>
                                        <div class="form-group text-center">
                                            <button type="button" class="btn btn-success waves-effect waves-light"><i class="fe-eye"></i></button>
                                            <button type="button" class="btn btn-info waves-effect waves-light"><i class="fe-edit"></i></button>
                                            <button type="button" class="btn btn-danger waves-effect waves-light"><i class="fe-x-circle"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!--tomo 11 -->
                            <article class="pricing-column col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="inner-box card-body">
                                        <div class="plan-header p-3 text-center">
                                            <h3 class="plan-title">Cloud Server</h3>
                                            <h2 class="plan-price fw-normal">Precio: $0.00</h2>
                                            <div class="plan-duration">Dominios Registrados: 4</div>
                                        </div>
                                        <div class="form-group text-center">
                                            <button type="button" class="btn btn-success waves-effect waves-light"><i class="fe-eye"></i></button>
                                            <button type="button" class="btn btn-info waves-effect waves-light"><i class="fe-edit"></i></button>
                                            <button type="button" class="btn btn-danger waves-effect waves-light"><i class="fe-x-circle"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!--tomo 12 -->
                            <article class="pricing-column col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="inner-box card-body">
                                        <div class="plan-header p-3 text-center">
                                            <h3 class="plan-title">Hosting</h3>
                                            <h2 class="plan-price fw-normal">Precio: $1,160.00</h2>
                                            <div class="plan-duration">Dominios Registrados: 3</div>
                                        </div>
                                        <div class="form-group text-center">
                                            <button type="button" class="btn btn-success waves-effect waves-light"><i class="fe-eye"></i></button>
                                            <button type="button" class="btn btn-info waves-effect waves-light"><i class="fe-edit"></i></button>
                                            <button type="button" class="btn btn-danger waves-effect waves-light"><i class="fe-x-circle"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </article>

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