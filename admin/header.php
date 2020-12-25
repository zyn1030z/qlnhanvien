<?php session_start(); ?>
<!DOCTYPE html>
<html >

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin</title>
     <link href="http://localhost:81/qlnhanvien/admin/lib/vendor/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost:81/qlnhanvien/admin/lib/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="http://localhost:81/qlnhanvien/admin/lib/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="http://localhost:81/qlnhanvien/admin/lib/vendor/morrisjs/morris.css" rel="stylesheet">
    <link href="http://localhost:81/qlnhanvien/admin/lib/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
         <link rel="stylesheet" type="text/css" href="{!!asset('public/css/admin3.css')!!}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
    button {
    background-color: #0e100e;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 0px 2px;
    cursor: pointer;
}
.button1 {
    background-color: white;
    border: none;
    color: black;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 0px 0px;
    cursor: pointer;
    margin-bottom: -10px;
}
button:hover {
    background-color: black; /* Green */
    color: white;
    border-top: 3px solid  #ff3300;
}
  </style>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
               
                <a class="navbar-brand" href="list.php">ADMIN Employess</a>
                
            </div>
            <!-- /.navbar-header -->

           
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                       
                       <!--  -->
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Nhân viên <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <?php if(isset($_SESSION['user'])){ ?>
                                <li>
                                    <a href="list.php">Danh sách nhân viên</a>
                                </li>
                                <li>
                                    <a href="add.php">Thêm nhân viên</a>
                                </li>
                              
                                
                                <li>
                                    <a href="birth.php">Danh sách nhân viên có sinh nhật trong tháng <?php echo date('m'); ?> </a>
                                </li>
                                <li> <?php $cunrentmont = date('m'); $nextmonth = $cunrentmont +1; ?>
                                    <a href="birth-next.php">Danh sách nhân viên có sinh nhật trong tháng <?php echo $nextmonth; ?> tới </a>
                                </li>
                                <?php } ?>
                            </ul>
                            <!-- /.nav-second-level -->
                       
                        </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><h1><?php if(isset($_SESSION['user'])){
                        $user = $_SESSION['user'];
                        echo "Xin chào: ".$user."!";
                    ?> <a style="float: right;" href="../login.php">Đăng xuất</a> <?php
                    }else {
                        echo " Bạn chưa đăng nhập! ";
                          ?> <a style="float: right;" href="../login.php">Đăng nhập</a> <?php
                    } ?></h1></h1>
                </div>
                
            </div>
        
            <div class="row">
                <div class="col-lg-8">

                    </div>
                    <!-- /.panel -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-clock-o fa-fw"></i> ADMIN
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
  
