<!DOCTYPE html>
<?php include '../php/conexion.php'; ?>
<html lang="en">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Finanzas</title>
        <meta
            content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
            name="viewport"
            />
        <link
            rel="icon"
            href="../assets/logo.png"
            type="image/x-icon"
            />

        <!-- Fonts and icons -->
        <script src="../assets/js/plugin/webfont/webfont.min.js"></script>
        <script>
            WebFont.load({
                google: {families: ["Public Sans:300,400,500,600,700"]},
                custom: {
                    families: [
                        "Font Awesome 5 Solid",
                        "Font Awesome 5 Regular",
                        "Font Awesome 5 Brands",
                        "simple-line-icons",
                    ],
                    urls: ["../assets/css/fonts.min.css"],
                },
                active: function () {
                    sessionStorage.fonts = true;
                },
            });
        </script>

        <!-- CSS Files -->
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../assets/css/plugins.min.css" />
        <link rel="stylesheet" href="../assets/css/kaiadmin.min.css" />

        <!-- CSS Just for demo purpose, don't include it in your project -->
        <link rel="stylesheet" href="../assets/css/demo.css" />
    </head>
    <body>
        <div class="wrapper">
            <!-- Sidebar -->
            <div class="sidebar" data-background-color="dark">
                <div class="sidebar-logo">
                    <!-- Logo Header -->
                    <div class="logo-header" data-background-color="dark">
                        <a href="#" class="logo">
                            <img
                                src="../assets/logo512.png"
                                alt="navbar brand"
                                class="navbar-brand"
                                height="20"
                                />
                        </a>
                        <div class="nav-toggle">
                            <button class="btn btn-toggle toggle-sidebar">
                                <i class="gg-menu-right"></i>
                            </button>
                            <button class="btn btn-toggle sidenav-toggler">
                                <i class="gg-menu-left"></i>
                            </button>
                        </div>
                        <button class="topbar-toggler more">
                            <i class="gg-more-vertical-alt"></i>
                        </button>
                    </div>
                    <!-- End Logo Header -->
                </div>
                <div class="sidebar-wrapper scrollbar scrollbar-inner">
                    <div class="sidebar-content">
                        <ul class="nav nav-secondary">
                            <li class="nav-item active">
                                <a
                                    data-bs-toggle="collapse"
                                    href="#dashboard"
                                    class="collapsed"
                                    aria-expanded="false"
                                    >
                                    <i class="fas fa-home"></i>
                                    <p>Dashboard</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="dashboard">
                                    <ul class="nav nav-collapse">
                                        <li>
                                            <a href="#"> 
                                                <span class="sub-item">Agregar Movimiento</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-section">
                                <span class="sidebar-mini-icon">
                                    <i class="fa fa-ellipsis-h"></i>
                                </span>
                            </li>


                            <li class="nav-item">
                                
                                <div class="collapse" id="tables">
                                    <ul class="nav nav-collapse">                                        >
                                        </li>
                                    </ul>
                                </div>
                            </li>



                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Sidebar -->

            <div class="main-panel">
                <div class="main-header">
                    <div class="main-header-logo">
                        <!-- Logo Header -->
                        <div class="logo-header" data-background-color="dark">
                            <a href="index.html" class="logo">
                                <img
                                    src="../assets/img/kaiadmin/logo_light.svg"
                                    alt="navbar brand"
                                    class="navbar-brand"
                                    height="20"
                                    />
                            </a>
                            <div class="nav-toggle">
                                <button class="btn btn-toggle toggle-sidebar">
                                    <i class="gg-menu-right"></i>
                                </button>
                                <button class="btn btn-toggle sidenav-toggler">
                                    <i class="gg-menu-left"></i>
                                </button>
                            </div>
                            <button class="topbar-toggler more">
                                <i class="gg-more-vertical-alt"></i>
                            </button>
                        </div>
                        <!-- End Logo Header -->
                    </div>
                    <!-- Navbar Header -->
                    <nav
                        class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom"
                        >
                        <div class="container-fluid">
                            <nav
                                class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex"
                                >
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        
                                    </div>                                    
                                </div>
                            </nav>

                            <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                                <li
                                    class="nav-item topbar-icon dropdown hidden-caret d-flex d-lg-none"
                                    >
                                    <a
                                        class="nav-link dropdown-toggle"
                                        data-bs-toggle="dropdown"
                                        href="#"
                                        role="button"
                                        aria-expanded="false"
                                        aria-haspopup="true"
                                        >
                                        <i class="fa fa-search"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-search animated fadeIn">
                                        <form class="navbar-left navbar-form nav-search">
                                            <div class="input-group">
                                                <input
                                                    type="text"
                                                    placeholder="Search ..."
                                                    class="form-control"
                                                    />
                                            </div>
                                        </form>
                                    </ul>
                                </li>
                                <li class="nav-item topbar-icon dropdown hidden-caret">
                                    <a
                                        class="nav-link dropdown-toggle"
                                        href="#"
                                        id="messageDropdown"
                                        role="button"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                        >

                                    </a>
                                    <ul
                                        class="dropdown-menu messages-notif-box animated fadeIn"
                                        aria-labelledby="messageDropdown"
                                        >
                                        <li>
                                            <div
                                                class="dropdown-title d-flex justify-content-between align-items-center"
                                                >
                                                Messages
                                                <a href="#" class="small">Mark all as read</a>
                                            </div>
                                        </li>

                                        <li>
                                            <a class="see-all" href="javascript:void(0);"
                                               >See all messages<i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </li>



                                <li class="nav-item topbar-user dropdown hidden-caret">
                                    <a
                                        class="dropdown-toggle profile-pic"
                                        data-bs-toggle="dropdown"
                                        href="#"
                                        aria-expanded="false"
                                        >
                                        <div class="avatar-sm">
                                            <img
                                                src="../assets/logo512.png"
                                                alt="..."
                                                class="avatar-img rounded-circle"
                                                />
                                        </div>
                                        <span class="profile-username">
                                            <span class="op-7">Hi,</span><?php
                                                    $consulta = "SELECT NOMBRE AS nom FROM usuarios WHERE ROL_ID = '4'";
                                                    $resultado = $conn->query($consulta);
                                                    $fila = $resultado->fetch_assoc(); //que te devuelve un array asociativo con el nombre del campo
                                                    $TotalPrecios = $fila['nom'];                                                    
                                                    ?>
                                            <span class="fw-bold"><?php echo $TotalPrecios ?></span>
                                        </span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-user animated fadeIn">
                                        <div class="dropdown-user-scroll scrollbar-outer">
                                            <li>
                                                <div class="user-box">
                                                    <div class="avatar-lg">
                                                        <img
                                                            src="../assets/logo512.png"
                                                            alt="image profile"
                                                            class="avatar-img rounded"
                                                            />
                                                    </div>
                                                    <div class="u-text">
                                                         <?php
                                                            $consulta = "SELECT NOMBRE AS nom FROM usuarios WHERE ROL_ID = '4'";
                                                            $resultado = $conn->query($consulta);
                                                            $fila = $resultado->fetch_assoc(); //que te devuelve un array asociativo con el nombre del campo
                                                            $TotalPrecios = $fila['nom'];                                                    
                                                            ?>
                                                        <h4><?php echo $TotalPrecios ?></h4>
                                                        <?php
                                                            $consulta = "SELECT CORREO AS CORREO FROM usuarios WHERE ROL_ID = '4'";
                                                            $resultado = $conn->query($consulta);
                                                            $fila = $resultado->fetch_assoc(); //que te devuelve un array asociativo con el nombre del campo
                                                            $TotalPrecios = $fila['CORREO'];                                                    
                                                            ?>
                                                        <p class="text-muted"><?php echo $TotalPrecios ?></p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="../index.html">Logout</a>
                                            </li>
                                        </div>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    <!-- End Navbar -->
                </div>

                <div class="container">
                    <div class="page-inner">
                        <div
                            class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
                            >
                            <div>
                                <h3 class="fw-bold mb-3">Dashboard</h3>
                                <h6 class="op-7 mb-2">Panel de Finanzas</h6>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-3">
                                <div class="card card-stats card-round">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-icon">
                                                <div
                                                    class="icon-big text-center icon-primary bubble-shadow-small"
                                                    >
                                                    <i class="fas fa-users"></i>
                                                </div>
                                            </div>
                                            <div class="col col-stats ms-3 ms-sm-0">
                                                <div class="numbers">
                                                    <p class="card-category">Clientes atendidos</p>
                                                    <h4 class="card-title">194</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="card card-stats card-round">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-icon">
                                                <div
                                                    class="icon-big text-center icon-info bubble-shadow-small"
                                                    >
                                                    <i class="fas fa-user-check"></i>
                                                </div>
                                            </div>
                                            <div class="col col-stats ms-3 ms-sm-0">
                                                <div class="numbers">
                                                    <p class="card-category">Ventas Diarias</p>
                                                    <?php
                                                    $consulta = "SELECT SUM(MONTO) AS total FROM finanzas WHERE TIPO = 'ingreso'";
                                                    $resultado = $conn->query($consulta);
                                                    $fila = $resultado->fetch_assoc(); //que te devuelve un array asociativo con el nombre del campo
                                                    $TotalPrecios = $fila['total'];                                                    
                                                    ?>
                                                    <h4 class="card-title">$<?php echo $TotalPrecios ?></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="card card-stats card-round">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-icon">
                                                <div
                                                    class="icon-big text-center icon-success bubble-shadow-small"
                                                    >
                                                    <i class="fas fa-luggage-cart"></i>
                                                </div>
                                            </div>
                                            <div class="col col-stats ms-3 ms-sm-0">
                                                <div class="numbers">
                                                    <p class="card-category">Gastos Diarias</p>
                                                    <?php
                                                    $consulta = "SELECT SUM(MONTO) AS total FROM finanzas WHERE TIPO = 'egreso'";
                                                    $resultado = $conn->query($consulta);
                                                    $fila = $resultado->fetch_assoc(); //que te devuelve un array asociativo con el nombre del campo
                                                    $TotalPrecios = $fila['total'];                                                    
                                                    ?>
                                                    <h4 class="card-title">$-<?php echo $TotalPrecios ?></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="card card-stats card-round">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-icon">
                                                <div
                                                    class="icon-big text-center icon-secondary bubble-shadow-small"
                                                    >
                                                    <i class="far fa-check-circle"></i>
                                                </div>
                                            </div>
                                            <div class="col col-stats ms-3 ms-sm-0">
                                                <div class="numbers">
                                                    <p class="card-category">Ordenes Diarias</p>
                                                    <?php
                                                    $consulta2 = "SELECT COUNT(*) as total FROM pedido";
                                                    $resultado2 = $conn->query($consulta2);
                                                    $fila2 = $resultado2->fetch_assoc(); //que te devuelve un array asociativo con el nombre del campo

                                                    $TotalPrecios2 = $fila2['total'];
                                                    ?>
                                                    <h4 class="card-title"> <?php echo $TotalPrecios2?></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card card-round">
                                    <div class="card-header">
                                        <div class="card-head-row">
                                            <div class="card-title"> Estadisticas mensuales Ventas</div>
                                            <div class="card-tools">
                                                <a
                                                    href="#"
                                                    class="btn btn-label-success btn-round btn-sm me-2"
                                                    >
                                                    <span class="btn-label">
                                                        <i class="fa fa-pencil"></i>
                                                    </span>
                                                    Export
                                                </a>
                                                <a href="#" class="btn btn-label-info btn-round btn-sm">
                                                    <span class="btn-label">
                                                        <i class="fa fa-print"></i>
                                                    </span>
                                                    Print
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="chart-container" style="min-height: 375px">
                                            <canvas id="statisticsChart"></canvas>
                                        </div>
                                        <div id=""></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card card-primary card-round">
                                    <div class="card-header">
                                        <div class="card-head-row">
                                            <div class="card-title">Utilidades Diarias</div>

                                        </div>
                                        <div class="card-category"></div>
                                    </div>
                                    <div class="card-body pb-0">
                                        <div class="mb-4 mt-2">
                                            <?php
                                                    $consulta = "SELECT SUM(MONTO) as total FROM finanzas";
                                                    $resultado = $conn->query($consulta);
                                                    $fila = $resultado->fetch_assoc(); //que te devuelve un array asociativo con el nombre del campo
                                                    $TotalPrecios = $fila['total'];
                                                    $consulta3 = "SELECT SUM(SUBTOTAL) as total FROM detalle_pedido";
                                                    $resultado3 = $conn->query($consulta3);
                                                    $fila3 = $resultado3->fetch_assoc(); //que te devuelve un array asociativo con el nombre del campo

                                                    $TotalPrecios3 = $fila3['total'];
                                                    ?>
                                                    <h4 class="card-title">$<?php echo $TotalPrecios-$TotalPrecios3 ?>



                                        </div>
                                        <div class="pull-in">
                                            <canvas id="dailySalesChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="card card-round">
                                    <div class="card-body pb-0">
                                        <?php
                                                    $consulta = "SELECT SUM(MONTO) as total FROM finanzas";
                                                    $resultado = $conn->query($consulta);
                                                    $fila = $resultado->fetch_assoc(); //que te devuelve un array asociativo con el nombre del campo
                                                    $TotalPrecios = $fila['total'];
                                                    $consulta3 = "SELECT SUM(SUBTOTAL) as total FROM detalle_pedido";
                                                    $resultado3 = $conn->query($consulta3);
                                                    $fila3 = $resultado3->fetch_assoc(); //que te devuelve un array asociativo con el nombre del campo

                                                    $TotalPrecios3 = $fila3['total'];
                                                    ?>
                                        <h2 class="mb-2">$<?php echo ($TotalPrecios-$TotalPrecios3 )* 21 ?></h2>
                                        <p class="text-muted">Utilidades Mensuales</p>
                                        <div class="pull-in sparkline-fix">
                                            <div id="lineChart"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <footer class="footer">
                    <div class="container-fluid d-flex justify-content-between">
                        <nav class="pull-left">
                            <ul class="nav">
                                <li class="nav-item">
                                </li>
                            </ul>
                        </nav>
                    </div>
                </footer>
            </div>

            <!-- Custom template | don't include it in your project! -->
            <div class="custom-template">
                <div class="title">Settings</div>
                <div class="custom-content">
                    <div class="switcher">
                        <div class="switch-block">
                            <h4>Logo Header</h4>
                            <div class="btnSwitch">
                                <button
                                    type="button"
                                    class="selected changeLogoHeaderColor"
                                    data-color="dark"
                                    ></button>
                                <button
                                    type="button"
                                    class="changeLogoHeaderColor"
                                    data-color="blue"
                                    ></button>
                                <button
                                    type="button"
                                    class="changeLogoHeaderColor"
                                    data-color="purple"
                                    ></button>
                                <button
                                    type="button"
                                    class="changeLogoHeaderColor"
                                    data-color="light-blue"
                                    ></button>
                                <button
                                    type="button"
                                    class="changeLogoHeaderColor"
                                    data-color="green"
                                    ></button>
                                <button
                                    type="button"
                                    class="changeLogoHeaderColor"
                                    data-color="orange"
                                    ></button>
                                <button
                                    type="button"
                                    class="changeLogoHeaderColor"
                                    data-color="red"
                                    ></button>
                                <button
                                    type="button"
                                    class="changeLogoHeaderColor"
                                    data-color="white"
                                    ></button>
                                <br />
                                <button
                                    type="button"
                                    class="changeLogoHeaderColor"
                                    data-color="dark2"
                                    ></button>
                                <button
                                    type="button"
                                    class="changeLogoHeaderColor"
                                    data-color="blue2"
                                    ></button>
                                <button
                                    type="button"
                                    class="changeLogoHeaderColor"
                                    data-color="purple2"
                                    ></button>
                                <button
                                    type="button"
                                    class="changeLogoHeaderColor"
                                    data-color="light-blue2"
                                    ></button>
                                <button
                                    type="button"
                                    class="changeLogoHeaderColor"
                                    data-color="green2"
                                    ></button>
                                <button
                                    type="button"
                                    class="changeLogoHeaderColor"
                                    data-color="orange2"
                                    ></button>
                                <button
                                    type="button"
                                    class="changeLogoHeaderColor"
                                    data-color="red2"
                                    ></button>
                            </div>
                        </div>
                        <div class="switch-block">
                            <h4>Navbar Header</h4>
                            <div class="btnSwitch">
                                <button
                                    type="button"
                                    class="changeTopBarColor"
                                    data-color="dark"
                                    ></button>
                                <button
                                    type="button"
                                    class="changeTopBarColor"
                                    data-color="blue"
                                    ></button>
                                <button
                                    type="button"
                                    class="changeTopBarColor"
                                    data-color="purple"
                                    ></button>
                                <button
                                    type="button"
                                    class="changeTopBarColor"
                                    data-color="light-blue"
                                    ></button>
                                <button
                                    type="button"
                                    class="changeTopBarColor"
                                    data-color="green"
                                    ></button>
                                <button
                                    type="button"
                                    class="changeTopBarColor"
                                    data-color="orange"
                                    ></button>
                                <button
                                    type="button"
                                    class="changeTopBarColor"
                                    data-color="red"
                                    ></button>
                                <button
                                    type="button"
                                    class="selected changeTopBarColor"
                                    data-color="white"
                                    ></button>
                                <br />
                                <button
                                    type="button"
                                    class="changeTopBarColor"
                                    data-color="dark2"
                                    ></button>
                                <button
                                    type="button"
                                    class="changeTopBarColor"
                                    data-color="blue2"
                                    ></button>
                                <button
                                    type="button"
                                    class="changeTopBarColor"
                                    data-color="purple2"
                                    ></button>
                                <button
                                    type="button"
                                    class="changeTopBarColor"
                                    data-color="light-blue2"
                                    ></button>
                                <button
                                    type="button"
                                    class="changeTopBarColor"
                                    data-color="green2"
                                    ></button>
                                <button
                                    type="button"
                                    class="changeTopBarColor"
                                    data-color="orange2"
                                    ></button>
                                <button
                                    type="button"
                                    class="changeTopBarColor"
                                    data-color="red2"
                                    ></button>
                            </div>
                        </div>
                        <div class="switch-block">
                            <h4>Sidebar</h4>
                            <div class="btnSwitch">
                                <button
                                    type="button"
                                    class="changeSideBarColor"
                                    data-color="white"
                                    ></button>
                                <button
                                    type="button"
                                    class="selected changeSideBarColor"
                                    data-color="dark"
                                    ></button>
                                <button
                                    type="button"
                                    class="changeSideBarColor"
                                    data-color="dark2"
                                    ></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        <!--   Core JS Files   -->
        <script src="../assets/js/core/jquery-3.7.1.min.js"></script>
        <script src="../assets/js/core/popper.min.js"></script>
        <script src="../assets/js/core/bootstrap.min.js"></script>

        <!-- jQuery Scrollbar -->
        <script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

        <!-- Chart JS -->
        <script src="../assets/js/plugin/chart.js/chart.min.js"></script>

        <!-- jQuery Sparkline -->
        <script src="../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

        <!-- Chart Circle -->
        <script src="../assets/js/plugin/chart-circle/circles.min.js"></script>

        <!-- Datatables -->
        <script src="../assets/js/plugin/datatables/datatables.min.js"></script>

        <!-- Bootstrap Notify -->
        <script src="../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

        <!-- jQuery Vector Maps -->
        <script src="../assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
        <script src="../assets/js/plugin/jsvectormap/world.js"></script>

        <!-- Sweet Alert -->
        <script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

        <!-- Kaiadmin JS -->
        <script src="../assets/js/kaiadmin.min.js"></script>

        <!-- Kaiadmin DEMO methods, don't include it in your project! -->
        <script src="../assets/js/setting-demo.js"></script>
        <script src="../assets/js/demo.js"></script>

    </body>
</html>
