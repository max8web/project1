<?
	require_once ('../../config/config.php');
	$id=(isset($_GET['id']))?$_GET['id']:0;
	if ($id==!0) {
		$query="SELECT * FROM products WHERE id='$id'";
		$cat=mysql_query($query);
		if (!$cat) {
			exit ($query);
		}
		$tov=mysql_fetch_array($cat);		 
		$dir=$_SERVER['DOCUMENT_ROOT'].'/media/uploads/'.$tov['picture']; 
		if ((file_exists ($dir))AND($tov['picture']!='no_image.jpg')) {
			unlink ($dir);
		}
		$query2="DELETE FROM products WHERE id='$id' LIMIT 1";
		$cat2=mysql_query($query2);
		if (!$cat2) {
			exit ($query2);
		}
		header('location: ../../cabinet.php');
	}
	
?>