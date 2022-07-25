<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - <?php echo $title;?></title>

    <!-- Bootstrap Core CSS -->
    <link href="/food-order/admin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/food-order/admin/assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/food-order/admin/assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="/food-order/admin/assets/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/food-order/admin/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>

<?php 

include_once 'include/connection.php';
session_start();

if(!isset($_SESSION['email'])){
    header('location: login.php');
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['email']); // value inside session
    header('location: login.php');
}

?>



