<?php
session_start();
include "../conexao.php";
if (isset($_GET['sair']) && $_GET['sair'] == true) {
    unset($_SESSION['usuario']);
}
if (empty($_SESSION['usuario'])) {
    header("location: login.php");
    exit;
}

?>

<style>
    .logoenv{
        width: 100%;
    }
    .logofile{
        width: 100%;
        margin-bottom: 15px;
    }
</style>
<!DOCTYPE html>
<html lang="pt">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="../assets/images/logo.png"/>
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">
    <link href="assets/css/sb-admin-2.css" rel="stylesheet">

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <script src="assets/vendor/chart.js/Chart.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="assets/js/demo/chart-area-demo.js"></script>
    <script src="assets/js/demo/chart-pie-demo.js"></script>

</head>

<body id="page-top"><?php include "assets/function.php"; ?>

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href=".">

            <?php
                $query = mysqli_query($con, "SELECT * FROM identidade_visual");
                $fetch = mysqli_fetch_array($query);
                $img = $fetch['logotipo'];
            ?>
            <div class="sidebar-brand-icon mx-4"><sup><img class="img-fluid" src="../assets/images/<?=$img?>"></sup> </div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href=".">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href=".?pag=promoter">
                <i class="fas fa-users"></i>
                <span>Promoters</span>
            </a>
        </li>

    </ul>
    <div id="content-wrapper" class="d-flex flex-column">
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>
            <div class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100">
                <h2></h2>
            </div>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-lg-inline text-gray-600"><?= $_SESSION['usuario']['nome'] ?></span>

                        <span class="fa fa-caret-down"></span>
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                         aria-labelledby="userDropdown">
                        <a class="dropdown-item" href=".?sair=true">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Sair
                        </a>
                    </div>
                </li>

            </ul>

        </nav>
        <!-- Main Content -->
        <div id="content">
            <?php
                if(isset($_GET['pag']) && file_exists("$_GET[pag].php")){
                    include "$_GET[pag].php";
                }elseif(isset($_GET['pag']) && !file_exists("$_GET[pag].php")){
                    include "error.php";
                }else{
                    include "home.php";
                }

            ?>
        </div>
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span> Programa C | Resolve! </span>
                </div>
            </div>
        </footer>
    </div>

</div>
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

</body>

</html>
