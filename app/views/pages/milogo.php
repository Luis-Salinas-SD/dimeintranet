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
                                        <table class="table table-centered mb-0" id="inline-editable">
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
                                                    <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span" style="">Edinburgh</span><input class="tabledit-input form-control form-control-sm" type="text" name="col3" value="Edinburgh" style="display: none;" disabled=""></td>
                                                    <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">61</span><input class="tabledit-input form-control form-control-sm" type="text" name="col4" value="61" style="display: none;" disabled=""></td>
                                                    <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span" style="">$320,800</span><input class="tabledit-input form-control form-control-sm" type="text" name="col6" value="$320,800" style="display: none;" disabled=""></td>
                                                    <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span" style="">$320,800</span><input class="tabledit-input form-control form-control-sm" type="text" name="col6" value="$320,800" style="display: none;" disabled=""></td>
                                                    <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span" style="">$320,800</span><input class="tabledit-input form-control form-control-sm" type="text" name="col6" value="$320,800" style="display: none;" disabled=""></td>
                                                    <td class="tabledit-view-mode" style="cursor: pointer;">
                                                        <span class="tabledit-span" style="">Instituto Tecomense</span>
                                                        <input class="tabledit-input form-control form-control-sm" type="text" name="col1" value="Instituto Tecomense" style="display: none;" disabled="">
                                                    </td>
                                                </tr>
                                                <tr id="2">
                                                    <td><span class="tabledit-span tabledit-identifier">2</span><input class="tabledit-input tabledit-identifier" type="hidden" name="id" value="2" disabled=""></td>
                                                    <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">Garrett Winters</span><input class="tabledit-input form-control form-control-sm" type="text" name="col1" value="Garrett Winters" style="display: none;" disabled=""></td>
                                                    <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">Accountant</span><input class="tabledit-input form-control form-control-sm" type="text" name="col2" value="Accountant" style="display: none;" disabled=""></td>
                                                    <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">Tokyo</span><input class="tabledit-input form-control form-control-sm" type="text" name="col3" value="Tokyo" style="display: none;" disabled=""></td>
                                                    <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">63</span><input class="tabledit-input form-control form-control-sm" type="text" name="col4" value="63" style="display: none;" disabled=""></td>
                                                    <td>2011/07/25</td>
                                                    <td class="tabledit-view-mode" style="cursor: pointer;"><span class="tabledit-span">$170,750</span><input class="tabledit-input form-control form-control-sm" type="text" name="col6" value="$170,750" style="display: none;" disabled=""></td>
                                                </tr>
                                            </tbody>
                                        </table>
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