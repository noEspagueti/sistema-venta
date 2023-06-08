<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="<?php print BASE_URL ?>/assets/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="<?php print BASE_URL ?>/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="<?php print BASE_URL ?>/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="<?php print BASE_URL ?>/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="<?php print BASE_URL ?>/assets/css/pace.min.css" rel="stylesheet" />
    <script src="<?php print BASE_URL ?>/assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="<?php print BASE_URL ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php print BASE_URL ?>/assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="<?php print BASE_URL ?>/assets/css/app.css" rel="stylesheet">
    <link href="<?php print BASE_URL ?>/assets/css/icons.css" rel="stylesheet">
    <title><?php print TITLE . " - " . $datos['tituloPagina']; ?></title>
</head>

<body class="bg-login">
    <!--wrapper-->
    <div class="wrapper">
        <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
            <div class="container-fluid">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                    <div class="col mx-auto">
                        <div class="mb-4 text-center">
                            <img src="<?php print BASE_URL ?>/assets/images/logo-img.png" width="180" alt="" />
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="border p-4 rounded">
                                    <div class="text-center">
                                        <h3 class="">Iniciar Sesión</h3>
                                    </div>

                                    <div class="login-separater text-center mb-4"> <span>OR SIGN IN WITH EMAIL</span>
                                        <hr />
                                    </div>
                                    <div class="form-body">
                                        <form class="row g-3" id="formularioLogin" method="post">
                                            <div class="col-12">
                                                <label for="correo" class="form-label">Email Address</label>
                                                <input type="email" class="form-control" id="correo" name="correo" placeholder="Correo electrónico" autocomplete="off">
                                                <div class="alert alert-danger mt-3 alertCorreo" role="alert" style="display: none;">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <label for="clave" class="form-label">Enter Password</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input type="password" class="form-control border-end-0" id="clave" name="clave" placeholder="Contraseña">
                                                    <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                                </div>
                                                <div class="alert alert-danger mt-3 alertClave" role="alert" style="display: none;">
                                                </div>
                                            </div>
                                            <div class="col-md-6 text-start"> <a href="authentication-forgot-password.html">Olvidaste tu contraseña ?</a>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" class="btn btn-primary"><i class="bx bxs-lock-open"></i>Acceso</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
    <!--end wrapper-->
    <!-- Bootstrap JS -->
    <script src="<?php print BASE_URL ?>/assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="<?php print BASE_URL ?>/assets/js/jquery.min.js"></script>
    <script src="<?php print BASE_URL ?>/assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="<?php print BASE_URL ?>/assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="<?php print BASE_URL ?>/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <!--Password show & hide js -->
    <script>
        $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bx-hide");
                    $('#show_hide_password i').removeClass("bx-show");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bx-hide");
                    $('#show_hide_password i').addClass("bx-show");
                }
            });
        });
    </script>
    <!--app JS-->
    <script type="text/javascript">
        const BASE_URL = '<?php print BASE_URL ?>';
    </script>
    <script src="<?php print BASE_URL ?>/assets/js/app.js"></script>
    <script src="<?php print BASE_URL ?>/assets/js/modulos/<?php print $datos["script"] ?>"></script>
</body>

</html>