<?
	require_once ('../../config/config.php');
    $id=(isset($_GET['id']))?$_GET['id']:0;
	$showhide=(isset($_GET['status']))?$_GET['status']:'show';
	if ($id==!0) {
	$query="UPDATE products SET showhide='$showhide' WHERE id='$id'";
	$cat=mysql_query ($query);
		if (!$cat) {
			exit ($query);
		}
	}
	header('location: ../../cabinet.php');
?>