<?php 
    include 'component/head.php'; 
    session_start();
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
                <h2 class="no-margin-bottom">Dashboard</h2>
            </div>
        </header>
        <!-- Dashboard Counts Section-->
    <?php include 'component/s.report.php'; ?>
    <!-- body section -->
    
    
    <section class="dashboard-counts no-padding-bottom">
        <div class="row">
            <?php
                include_once('operation.inc.php');
                include 'HM/m_request_result_table.php'; 
            ?>
        </div>
    </section>
  
    <!-- /body section -->
<?php include 'component/footer.php'; ?>