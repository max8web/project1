<?php 
	session_start();
	require_once ('config/config.php'); 
	require_once ('templates/active_menu.php'); 
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
		<script src="media/js/my.js"></script>
		<script src="media/js/product.js"></script>
	</head>
	<body>
	<div class="wrapper">
		<div class="header" data-fon="<?=$fon;?>" style="background: url('media/img/<?=$fon;?>.jpg');">
			<a href="/">
				<img src="media/img/logo.png" class="logo" />
			</a>
			

			
			<div class="auth">
				<a href="basket.php">Корзина</a>
				<?php if ($_SESSION['id']) { ?>
					<a href="logout.php">Выход</a>
				<?php } else { ?>
					<a href="register.php">Регистрация</a>
					<a href="login.php">Вход</a>
				<?php } ?>
			</div>

			<div class="logotext">
				<h1>Разработка сайтов на PHP</h1>
				<p><?=$title_name;?></p>
			</div>
			
		</div>
		<nav class="topmenu">
			<a <?=$a1;?> href="/" data-url="media/img/fon.jpg" data-title="">Главная</a>
			<a <?=$a2;?> href="index.php?url=about_company" data-url="media/img/fon2.jpg" data-title="О Компании">О компании</a>
			<a <?=$a3;?> href="works.php?url=works" data-url="media/img/fon3.jpg" data-title="Наши товары">Наши товары</a>
			<a <?=$a4;?> href="index.php?url=vacancy" data-url="media/img/fon4.jpg" data-title="Вакансии">Вакансии</a>
			<a <?=$a5;?> href="index.php?url=contacts" data-url="media/img/fon5.jpg" data-title="Контакты">Контакты</a>
		</nav>
		<div class="main">			

			<div class="col-md-9">	
