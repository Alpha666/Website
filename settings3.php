<?php

include("connection.php");

session_start();

if(!isset($_SESSION['status']) ){
    header("location:login.php");
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Halaman parameter details OEE Universal Tekno Reksajaya">
        <meta name="author" content="Fikri Haykal">

        <title>Settings 3 - Universal Tekno Reksajaya</title>

        <!-- External Fonts and CSS -->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        
        <!-- Local CSS -->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
    </head>

    <body id="page-top">
        <div id="wrapper">
            <!-- Sidebar Navigation-->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
                <!-- Sidebar Logo and Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="oee-details.html">
                    <div>
                        <img src="img/logo-utr.jpeg" alt="" style="width: 95%;height: 95%;">
                    </div>
                    <div class="sidebar-brand-text mx-3">Uni Tekno Reksajaya</div>
                </a>

                <hr class="sidebar-divider my-0">

                <!-- Sidebar Menus -->
                <li class="nav-item">
                    <a class="nav-link" href="oee-history.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>OEE History</span>
                    </a>
                    <a class="nav-link" href="oee-details.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>OEE Details</span>
                    </a>
                    <a class="nav-link" href="settings3.php">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Settings</span>
                    </a>
                </li>

                <hr class="sidebar-divider">

                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>
            </ul>

            <!-- Main Wrapper or Content Area -->
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    <!-- Top Navigation -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                        <!-- Sidebar Toggle for Mobile-->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>

                        <ul class="navbar-nav ml-auto">
                            <!-- Date Picker -->
                            <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                                <div class="input-group">
                                    <input placeholder="Select date" class="textbox-n form-control bg-light border-0 small" type="text" onfocus="(this.type='date')" id="date">
                                    <div class="input-group0append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-calendar fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </ul>
                    </nav>

                    <div class="container-fluid">
                        <!-- Content Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">Settings</h1>
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm text-white-50"></i> Log Out
                            </a>
                        </div>

                        <!-- Main Content Area -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12">
                                <!-- Settings Form Group -->
                                <div class="card shadow mb-4">
                                    <a href="#settingsForm" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                                        <h6 class="m-0 font-weight-bold text-primary">Settings Form</h6>
                                    </a>
                                    <div class="collapse show" id="settingsForm">
                                        <div class="card-body">
                                            <div class="p-5">
                                                <form class="user">
                                                    <div class="form-group">
                                                        <div class="text-xs font-weight-bold text-uppercase text-primary mb-1">Target</div>
                                                        <input type="text" class="form-control form-control-user" style="border-radius: 0.5vw;" id="target" name="utr-target" placeholder="Masukkan Target">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="text-xs font-weight-bold text-uppercase text-primary mb-1">Available Time</div>
                                                        <input type="text" class="form-control form-control-user" style="border-radius: 0.5vw;" id="available-time" name="utr-available-time" placeholder="Waktu Available" onfocus="(this.type='date')">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="text-xs font-weight-bold text-uppercase text-primary mb-1">Working Order</div>
                                                        <textarea class="form-control form-control-user" style="min-height: 20vh; border-radius: 0.5vw;" id="working-order" name="utr-working-order" placeholder="Working Order"></textarea>
                                                    </div>
                                                    <hr>
                                                    <a href="index.html" class="btn btn-primary btn-user btn-block">OK</a>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer Wrapper -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Universal Tekno Reksajaya 2020</span>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <!-- Scroll to Top -->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Sign Out Modal -->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave ?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">x</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Sign Out" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Sign Out</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript -->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Internal plugin JavaScript -->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- ChartJS -->
        <script src="vendor/chart.js/Chart.min.js"></script>
    </body>
</html>