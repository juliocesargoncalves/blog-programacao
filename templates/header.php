<?php
	
	include_once('helper/url.php');
	include_once('data/posts.php');
	include_once('data/categories.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>
	<link rel="stylesheet" type="text/css" href="<?= $BASE_URL ?>css/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet"> 
</head>
<body>
	<head>
		<a href="<?= $BASE_URL ?>" id="logo">
			<img src="<?= $BASE_URL ?>/img/logo.svg">
		</a>
		<nav>
			<ul id="navbar">
				<li><a href="<?= $BASE_URL?>" class="nav-link">Home</a></li>
				<li><a href="<?= $BASE_URL?>" class="nav-link">Categorias</a></li>
				<li><a href="<?= $BASE_URL?>" class="nav-link">Sobre</a></li>
				<li><a href="<?= $BASE_URL?>/contato.php" class="nav-link">Contato</a></li>
			</ul>
		</nav>
	</head>