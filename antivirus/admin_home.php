<?php 
    include 'component/head.php'; 
    
?>
    <body>
        <div class="page">
        <!-- Main Navbar-->
        <?php include 'component/header.php'; ?>
        <div class="page-content d-flex align-items-stretch"> 
        <!-- Side Navbar -->
        <?php include 'component/nav.php'; ?>
        <div class="content-inner">
            <!-- Page Header-->
        <header class="page-header">
            <div class="container-fluid">
                <h2 class="no-margin-bottom">Antivirus report</h2>
            </div>
        </header>
        <!-- Dashboard Counts Section-->
    
    <!-- body section -->
    <section class="dashboard-counts no-padding-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2"></div>
                <?php
                    include_once('operation.inc.php');
                    include 'HM/anti.report.php';
                ?>
            </div>
        </div>
    </section>
    <!-- /body section -->
<?php include 'component/footer.php'; ?>