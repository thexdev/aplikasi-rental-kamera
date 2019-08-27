<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <?php $this->load->view('_partials/layout/meta-tags'); ?>
    <!-- Bootstrap CSS -->
    <?php $this->load->view('_partials/bootstrap-4/bootstrap-4-css'); ?>
    <!-- Font Awesome CSS -->
    <?php $this->load->view('_partials/font-aweseome/font-awesome-4'); ?>
    <!-- DataTables CSS -->
    <?php $this->load->view('_partials/data-tables/data-tables-css'); ?>
    <!-- Bootstrap Required JS -->
    <?php $this->load->view('_partials/bootstrap-4/bootstrap-4-js'); ?>
    <!-- DataTables JS -->
    <?php $this->load->view('_partials/data-tables/data-tables-js'); ?>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/dashboard/base.css'); ?>">
    <!-- Site Title -->
    <title>Dashboard | YNC.Rental</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-lg-2 bg-dark d-none d-md-block" id="sidebar">
                <?php $this->load->view('_partials/layout/sidebar'); ?>
            </div>

            <div class="col-md-9 col-lg-10 p-0" id="content">
                <!-- Site Navigation -->
                <?php $this->load->view('_partials/layout/navbar'); ?>

                <!-- Main Content -->
                <div id="content-view">
                    <!-- Default Page -->
                    <?php $this->load->view('dashboard/index'); ?>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        $(document).ready(function () {
            // Base URL Web
            let url = location.href.split('/')
                url.pop()
            let baseUrl = url.join('/')

            // Init DataTables
            // $('#contoh').DataTable()

            $(document).on('load', '#content-view', function () {
                $('#contoh').DataTable()
            })

            // Load Halaman Dashboard
            $('#dashboard').click(function () {
                $('#content-view').load(`${baseUrl}/dashboard/main`)
                $('.nav-link').removeClass('active')
                $(this).addClass('active')
            })

            // Load Halaman Barang
            $('#barang').click(function () {
                $('#content-view').load(`${baseUrl}/barang`)
                $('.nav-link').removeClass('active')
                $(this).addClass('active')
            })

            // Load Halaman Member
            $('#member').click(function () {
                $('#content-view').load(`${baseUrl}/member`)
                $('.nav-link').removeClass('active')
                $(this).addClass('active')
            })

            // Load Halaman Sewa
            $('#sewa').click(function () {
                $('#content-view').load(`${baseUrl}/sewa`)
                $('.nav-link').removeClass('active')
                $(this).addClass('active')
            })
        })
    </script>
</body>