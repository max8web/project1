<?php 
	session_start();
	require_once ('config/config.php'); 
?>
<!Doctype>
<html>
	<head>
		<title>Мой проект</title>
		<meta charset="utf-8">
		<meta name="description" content="Описание">
		<meta name="keywords" content="Ключи">
		<meta name="author" content="Контактная инфо">
		<link type="text/css" rel="stylesheet" href="media/bootstrap/css/bootstrap.min.css" />
		<link type="text/css" rel="stylesheet" href="media/css/style.css" />
		<script src="media/js/jquery-2.2.0.min.js"></script>
		<script src="media/bootstrap/js/bootstrap.min.js"></script>
	</head>
	<body>
	<div class="wrapper">
		<div class="header">
			<a href="/">
				<img src="media/img/logo.png" class="logo" />
			</a>
			<div class="auth">
				<?php if ($_SESSION['id']) { ?>
					<a href="cabinet.php">Кабинет</a>
					<a href="logout.php">Выход</a>
				<?php } else { ?>
					<a href="register.php">Регистрация</a>
					<a href="login.php">Вход</a>
				<?php } ?>
			</div>
			<h1 class="logotext">Разработка сайтов на PHP</h1>
		</div>
		<nav class="topmenu">
			<a href="/">Главная</a>
			<a href="index.php?url=about_company">О компании</a>
			<a href="index.php?url=works">Наши работы</a>
			<a href="index.php?url=vacancy">Вакансии</a>
			<a href="index.php?url=contacts">Контакты</a>
		</nav>
		<div class="main">
			<div class="col-md-3">				
				<a href="index.php?url=development" class="btn btn-primary btn-block">Разработка сайтов</a>
				<a href="index.php?url=promotion" class="btn btn-primary btn-block">Продвижение</a>
				<a href="index.php?url=rework" class="btn btn-primary btn-block">Доработка</a>
				<a href="index.php?url=testing" class="btn btn-primary btn-block">Тестирование</a>
				<a href="index.php?url=support" class="btn btn-primary btn-block">Поддержка</a>
				
			</div>
			<div class="col-md-6">	