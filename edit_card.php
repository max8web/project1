<?
	$id=(isset($_GET['id']))?$_GET['id']:0;
	if (isset($_COOKIE['basket'])) {
		$arr=unserialize($_COOKIE['basket']);
	}
	else {
		echo "Ошибка";
	}
	$arr[$id]=$_POST['count'];
	$str=serialize($arr);
	setcookie('basket', $str, time()+60*60*2, '/');
	header ('location:basket.php');
?>