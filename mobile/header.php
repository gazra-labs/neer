<?php
session_start();
?>
<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../img/ic_ap.png">
    <title>Neer - Qualité</title>
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">
    <link href="../css/custom.css" rel="stylesheet">
    <style>
    .row{
        margin-left:0px;
        margin-right:0px;
    }
    </style>
</head>

<body>
    <div class="main-wrapper">
        
        <div class="container-fluid" style="padding:0px;">
            <div id="mySidenav" class="sidenav bg-cyan">
                <a href="javascript:void(0);" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="field-survey.php"><i class="fas fa-file"></i> Field Survey</a>
                <a href="internal-lab.php"><i class="fas fa-vial"></i> Internal Lab</a>
                <a href="#"><i class="fas fa-vial"></i> External Lab</a>
                <a href="#"><i class="fas fa-chart-line"></i> Report</a>
                <a href="#"><i class="fas fa-users"></i> Assign Role</a>
                <a href="#"><i class="fas fa-clipboard-check"></i> Assign DMA</a>
                <a href="#"><i class="fas fa-chart-bar"></i> KPI</a>
                <a href="#"><i class="fas fa-cog"></i> Settings</a>
            </div>

            <div class="row">
                <div class="col-md-12 col-lg-12 col-xlg-12" style="padding:0px">
                    <div class="card " style="">
                        <!--  -->
                        <div class="box bg-cyan text-center">
                            <a class="float-left" onclick="openNav()" href="#">
                                <i class="fas fa-bars text-white"></i>
                            </a>
                            <!-- <a class="float-left ml-1" href="#">
                                <i class="fas fa-arrow-left text-white"></i>
                            </a> -->
                            <a class="float-right" href="#">
                                <i class="fas fa-sign-out-alt text-white"></i>
                            </a>
                            <h6 class="text-white">
                                Neer - Qualité
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
