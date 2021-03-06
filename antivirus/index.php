<?php include 'component/head.php'; ?>
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
                <h2 class="no-margin-bottom">Antivirus information</h2>
            </div>
        </header>
        <!-- Dashboard Counts Section-->
    <!-- body section -->
    <section class="dashboard-counts no-padding-bottom">
        <div class="row">
            <?php
                include_once('operation.inc.php');
                include 'HM/last.value.php';
                include 'HM/anti.form.php'; 
            ?>
        </div>
    </section>
    
    <!-- /body section -->
<?php include 'component/footer.php'; ?>