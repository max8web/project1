<?
	require_once ('../../config/config.php');
	$id=(isset($_GET['id']))?$_GET['id']:0;
	if ($id!=0) {
		$query="DELETE FROM catalogs WHERE id='$id'";
		$res=mysql_query($query);
		if (!$res) {
			exit ($query);
		}	
		$query2="DELETE FROM prices WHERE cat_id='$id'";
		$res2=mysql_query($query2);
	}
	header('location: ../../category.php');
?>