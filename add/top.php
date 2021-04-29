<!DOCTYPE html>
<html lang="tg">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?=$title?></title>
    <script src="assets/js/jquery.3.6.0.js"></script>
    <!-- Favicon -->
    <link rel="shortcut icon" href="http://yoshop.tj/admin/assets/images/logo/favicon.png">
    <!-- Core css -->
    <link href="assets/css/app.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/media.css" rel="stylesheet">
</head>
<body>
<!-- Loader -->
<div id="preloader"><div class="load"><hr/><hr/><hr/><hr/></div></div>
<style type="text/css">
	.load{position:absolute;top:50%;left:50%;transform:translate(-50%, -50%);
	  /*change these sizes to fit into your project*/
	  width:100px;
	  height:100px;
	}
	.load hr{border:0;margin:0;width:40%;height:40%;position:absolute;border-radius:50%;animation:spin 2s ease infinite}
	.load :first-child{background:#19A68C;animation-delay:-1.5s}
	.load :nth-child(2){background:#F63D3A;animation-delay:-1s}
	.load :nth-child(3){background:#FDA543;animation-delay:-0.5s}
	.load :last-child{background:#193B48}
	@keyframes spin{
	  0%,100%{transform:translate(0)}
	  25%{transform:translate(160%)}
	  50%{transform:translate(160%, 160%)}
	  75%{transform:translate(0, 160%)}
	}
	#preloader {
   		background: rgb(254 254 254);
   		width: 100vw;
   		height: 100vh;
   		position: absolute;
   		z-index: 9999999;
	}
</style>
<script type="text/javascript">
	$(window).on('load', function () {
    	let $preloader = $('#preloader'),
        	$svg_anm   = $preloader.find('.svg_anm');
			$svg_anm.fadeOut();
    		$preloader.delay(700).fadeOut('slow');
	});
</script>
<div class="app">
<div class="layout">
<?php include 'add\header.php'; ?>
<?php include 'add\menu.php'; ?>
<!-- Page Container START / на файл top.php-->
<div class="page-container">  
<!-- Content Wrapper START -->
<div class="main-content">

