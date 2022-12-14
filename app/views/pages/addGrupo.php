<!DOCTYPE html>
<html lang="en">
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
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <section class="d-flex justify-content-around">
                                        <div class="col-5">
                                            <form action="">
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Nombre del Grupo</label>
                                                    <input type="text" name="" id="" class="form-control" placeholder="Nombre del Grupo">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="" class="form-label">Permisos</label>
                                                    <select class="form-control" data-toggle="select2" data-width="100%">
                                                        <option>- Seleccione una opci??n -</option>
                                                        <optgroup label="Dashboard">
                                                            <option value="AK">Option</option>
                                                            <option value="HI">Option</option>
                                                        </optgroup>
                                                        <optgroup label="Usuario">
                                                            <option value="CA">Option</option>
                                                            <option value="NV">Option</option>
                                                            <option value="OR">Option</option>
                                                            <option value="WA">Option</option>
                                                        </optgroup>
                                                    </select>
                                                </div>

                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-success waves-effect waves-light col-4  col-md-2 col-sm-4 m-2">
                                                        Enviar
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-4">
                                            <div class="accordion custom-accordion" id="custom-accordion-one">
                                                <div class="card mb-0">
                                                    <div class="card-header bg-success" id="headingNine">
                                                        <h4 class="m-0 position-relative text-white">
                                                            <a class="custom-accordion-title text-reset d-block collapsed" data-bs-toggle="collapse" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                                                Grupos Agregados Recientemente
                                                            </a>
                                                        </h4>
                                                    </div>

                                                    <div id="collapseNine" class="collapse show" aria-labelledby="headingFour" data-bs-parent="#custom-accordion-one" style="">
                                                        <div class="card-body">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered table-hover table-striped animated fadeInUp">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td> <strong>Grupo :</strong> Administrador</td>
                                                                            <td> <strong><abbr class="timeago" title="2020-03-02 14:36:40">Hace 3 a??os</abbr></strong></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td> <strong>Grupo :</strong> Operador</td>
                                                                            <td> <strong><abbr class="timeago" title="2019-02-26 20:45:47">Hace 4 a??os</abbr></strong></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td> <strong>Grupo :</strong> Acciones Geneales</td>
                                                                            <td> <strong><abbr class="timeago" title="2019-02-22 20:36:29">Hace 4 a??os</abbr></strong></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td> <strong>Grupo :</strong> Administrador</td>
                                                                            <td> <strong><abbr class="timeago" title="2018-09-04 12:29:39">Hace 4 a??os</abbr></strong></td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td> <strong>Grupo :</strong> Operador</td>
                                                                            <td> <strong><abbr class="timeago" title="2018-01-16 12:05:05">Hace 5 a??os</abbr></strong></td>
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