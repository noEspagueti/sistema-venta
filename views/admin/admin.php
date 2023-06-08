<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="<?php print BASE_URL?>assets/images/favicon-32x32.png" type="image/png" />
    <link href="<?php print BASE_URL?>assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="<?php print BASE_URL?>assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="<?php print BASE_URL?>assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="<?php print BASE_URL?>assets/css/pace.min.css" rel="stylesheet" />
    <script src="<?php print BASE_URL?>assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="<?php print BASE_URL?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php print BASE_URL?>assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="<?php print BASE_URL?>assets/css/app.css" rel="stylesheet">
    <link href="<?php print BASE_URL?>assets/css/icons.css" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="<?php print BASE_URL?>assets/css/dark-theme.css" />
    <link rel="stylesheet" href="<?php print BASE_URL?>assets/css/semi-dark.css" />
    <link rel="stylesheet" href="<?php print BASE_URL?>assets/css/header-colors.css" />
    <title><?php print $datos["tituloPagina"]?></title>
</head>

<body>
    <!--wrapper-->
    
    <div class="wrapper">
        <!--sidebar wrapper -->
        <div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="<?php print BASE_URL?>assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
                </div>
                <div>
                    <h4 class="logo-text">Rocker</h4>
                </div>
                <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="javascript:;">
                        <div class="parent-icon"><i class='bx bx-home-circle'></i>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="bx bx-category"></i>
                        </div>
                        <div class="menu-title">Application</div>
                    </a>
                    <ul>
                        <li> <a href="app-emailbox.html"><i class="bx bx-right-arrow-alt"></i>Email</a>
                        </li>
                        <li> <a href="app-chat-box.html"><i class="bx bx-right-arrow-alt"></i>Chat Box</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-label">UI Elements</li>
                <li>
                    <a href="widgets.html">
                        <div class="parent-icon"><i class='bx bx-cookie'></i>
                        </div>
                        <div class="menu-title">Widgets</div>
                    </a>
                </li>
            </ul>
            <!--end navigation-->
        </div>
        <!--end sidebar wrapper -->
        <!--start header -->
        <header>
            <div class="topbar d-flex align-items-center">
                <nav class="navbar navbar-expand">
                    <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
                    </div>
                    <div class="search-bar flex-grow-1">
                        <div class="position-relative">
                            <h6>Sistema Venta</h6>
                        </div>
                    </div>
                    <div class="user-box dropdown">
                        <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="<?php print BASE_URL?>assets/images/avatars/avatar.png" class="user-img" alt="user avatar">
                            <div class="user-info ps-3">
                                <p class="user-name mb-0"><?php print $datos["nombreUsuario"]?></p>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="javascript:;"><i class="bx bx-user"></i><span>Mi perfil</span></a>
                            </li>
                            <li>
                                <div class="dropdown-divider mb-0"></div>
                            </li>
                            <li><a class="dropdown-item" href="javascript:;"><i class='bx bx-log-out-circle'></i><span>Cerrar sesión</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!--end header -->

        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <footer class="page-footer">
            <p class="mb-0"><?php print $datos["footer"]?></p>
        </footer>
    </div>
    <!--end wrapper-->

    <!--end switcher-->
    <!-- Bootstrap JS -->
    <script src="<?php print BASE_URL?>assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="<?php print BASE_URL?>assets/js/jquery.min.js"></script>
    <script src="<?php print BASE_URL?>assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="<?php print BASE_URL?>assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="<?php print BASE_URL?>assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="<?php print BASE_URL?>assets/plugins/chartjs/js/Chart.min.js"></script>
    <script src="<?php print BASE_URL?>assets/plugins/chartjs/js/Chart.extension.js"></script>
    <script src="<?php print BASE_URL?>assets/js/index.js"></script>
    <!--app JS-->
    <script src="<?php print BASE_URL?>assets/js/app.js"></script>
</body>

</html>