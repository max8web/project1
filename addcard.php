<?
	$id=$_GET['id'];
	if (isset($_COOKIE['basket'])) {
		$arr=unserialize($_COOKIE['basket']);
	}
	else {
		$arr=array();
	}
	$arr[$id]=1;
	$str=serialize($arr);
	setcookie('basket',$str,time()+60*60*2,'/');
	//print_r ($_COOKIE['basket']);
	header('location:works.php');
?>