<?php 
require_once("configs/login/verifyLogin.php");
require_once("configs/database.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voltec | Área Admin</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../assets/css/iziToast.min.css">
    <link rel="stylesheet" href="../assets/vendors/summernote/summernote-bs4.css">
    <style>
        .logoutButton {
            color: #7f7f7f;
            font-size: 23px;
        }

        .logoutButton:hover {
            color: #000;
        }

        .img-thumbnail{
            padding: 0;
        }

    </style>
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="painel" class="navbar-brand">
                    <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span style="color: #7f7f7f" class="brand-text font-weight-light"><b>Área Administrativa</b></span>
                </a>

                <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse order-3" id="navbarCollapse">
                    <!-- Left navbar links -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="painel" class="nav-link"><b>Home</b></a>
                        </li>
                        <li class="nav-item">
                            <a href="carrousel" class="nav-link"><b>Carrousel</b></a>
                        </li>
                        <li class="nav-item">
                            <a href="produtos" class="nav-link"><b>Produtos</b></a>
                        </li>
                        <li class="nav-item">
                            <a href="novidades" class="nav-link"><b>Novidades</b></a>
                        </li>
                        <li class="nav-item">
                            <a href="feedbacks" class="nav-link"><b>FeedBacks</b></a>
                        </li>
                    </ul>
                </div>

                <!-- Right navbar links -->
                <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
                    <li class="nav-item dropdown">
                        <a class="logoutButton" href="configs/login/logout"><i class="fas fa-sign-out-alt"></i></a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /.navbar -->