<?
	session_start();
	if (!$_SESSION['id']) {
		header ('location:index.php');
	}
	if ($_SESSION['admin']!=1) {
		header ('location:index.php');
	}
?>
