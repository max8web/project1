<?
	require_once ('../../config/config.php');
	$id=(isset($_GET['id']))?$_GET['id']:0;
	$status=trim($_POST['status']);
	if ($id!=0) {
		$query="UPDATE orders SET status='$status' WHERE id='$id'";
		$res=mysql_query($query);
		if (!$res) {
			exit ($query);
		}
	}
	header('location: ../../my_orders_admin.php');
?>