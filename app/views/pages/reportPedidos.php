<!DOCTYPE html>
<html lang="es">
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
                            <div class="card-body">
                                <h2>Pedidos</h2>
                                <div dir="ltr">
                                    <div id="morris-line-example" style="height: 300px; position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" class="morris-chart" data-colors="#4a81d4,#f672a7"><svg height="300" version="1.1" width="748" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; top: -0.09375px;">
                                            <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.3.0</desc>
                                            <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="42.53125" y="261" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                                                <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">$ 0</tspan>
                                            </text>
                                            <path fill="none" stroke="#adb5bd" d="M55.03125,261.5H723" stroke-opacity="0.1" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="42.53125" y="202" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                                                <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">$ 25</tspan>
                                            </text>
                                            <path fill="none" stroke="#adb5bd" d="M55.03125,202.5H723" stroke-opacity="0.1" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="42.53125" y="143" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                                                <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">$ 50</tspan>
                                            </text>
                                            <path fill="none" stroke="#adb5bd" d="M55.03125,143.5H723" stroke-opacity="0.1" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="42.53125" y="84" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                                                <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">$ 75</tspan>
                                            </text>
                                            <path fill="none" stroke="#adb5bd" d="M55.03125,84.5H723" stroke-opacity="0.1" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="42.53125" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                                                <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">$ 100</tspan>
                                            </text>
                                            <path fill="none" stroke="#adb5bd" d="M55.03125,25.5H723" stroke-opacity="0.1" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="723" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                                                <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2015</tspan>
                                            </text><text x="627.6505304067266" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                                                <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2014</tspan>
                                            </text><text x="532.3010608134532" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                                                <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2013</tspan>
                                            </text><text x="436.6903597966367" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                                                <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan>
                                            </text><text x="341.3408902033633" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                                                <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2011</tspan>
                                            </text><text x="245.99142061008996" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                                                <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2010</tspan>
                                            </text><text x="150.64195101681656" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                                                <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2009</tspan>
                                            </text><text x="55.03125" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                                                <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2008</tspan>
                                            </text>
                                            <path fill="none" stroke="#5b69bc" d="M55.03125,261C78.93392525420414,231.5,126.73927576261242,166.63228454172366,150.64195101681656,143C174.4793184151349,119.43228454172366,222.1540532117716,72.20000000000002,245.99142061008996,72.20000000000002C269.8287880084083,72.20000000000002,317.50352280504495,122.35000000000001,341.3408902033633,143C365.17825760168165,163.65,412.85299239831835,234.45403556771547,436.6903597966367,237.4C460.59303505084085,240.35403556771547,508.39838555924905,178.41614227086185,532.3010608134532,166.60000000000002C556.1384282117715,154.81614227086186,603.8131630084083,151.85,627.6505304067266,143C651.4878978050449,134.15,699.1626326016817,107.60000000000001,723,95.80000000000001" stroke-width="3px" class="line_1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                            <path fill="none" stroke="#ff8acc" d="M55.03125,143C78.93392525420414,128.25,126.73927576261242,78.09192886456908,150.64195101681656,84C174.4793184151349,89.89192886456908,222.1540532117716,182.825,245.99142061008996,190.2C269.8287880084083,197.575,317.50352280504495,156.275,341.3408902033633,143C365.17825760168165,129.725,412.85299239831835,84,436.6903597966367,84C460.59303505084085,84,508.39838555924905,143,532.3010608134532,143C556.1384282117715,143,603.8131630084083,98.75,627.6505304067266,84C651.4878978050449,69.25,699.1626326016817,39.75,723,25" stroke-width="3px" class="line_0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                            <circle cx="55.03125" cy="261" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" class="circle_line_1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                            <circle cx="150.64195101681656" cy="143" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" class="circle_line_1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                            <circle cx="245.99142061008996" cy="72.20000000000002" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" class="circle_line_1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                            <circle cx="341.3408902033633" cy="143" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" class="circle_line_1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                            <circle cx="436.6903597966367" cy="237.4" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" class="circle_line_1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                            <circle cx="532.3010608134532" cy="166.60000000000002" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" class="circle_line_1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                            <circle cx="627.6505304067266" cy="143" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" class="circle_line_1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                            <circle cx="723" cy="95.80000000000001" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" class="circle_line_1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                            <circle cx="55.03125" cy="143" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" class="circle_line_0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                            <circle cx="150.64195101681656" cy="84" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" class="circle_line_0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                            <circle cx="245.99142061008996" cy="190.2" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" class="circle_line_0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                            <circle cx="341.3408902033633" cy="143" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" class="circle_line_0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                            <circle cx="436.6903597966367" cy="84" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" class="circle_line_0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                            <circle cx="532.3010608134532" cy="143" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" class="circle_line_0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                            <circle cx="627.6505304067266" cy="84" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" class="circle_line_0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                            <circle cx="723" cy="25" r="0" fill="#ffffff" stroke="#999999" stroke-width="1" class="circle_line_0" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                        </svg>
                                        <div class="morris-hover morris-default-style" style="left: 6px; top: 51px; display: none;">
                                            <div class="morris-hover-row-label">2008</div>
                                            <div class="morris-hover-point" style="color: #5b69bc">
                                                Series B:
                                                $ 0
                                            </div>
                                            <div class="morris-hover-point" style="color: #ff8acc">
                                                Series A:
                                                $ 50
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
    <?php include('../includes/scripts.php'); ?>
</body>

</html>