<?	
	$link=(isset($_GET['url']))?$_GET['url']:'index';
	
	$query="SELECT * FROM maintexts WHERE url='$link'";
	$res=mysql_query($query);
	$result=mysql_fetch_array($res);
	
	$fon=$result['fon'];
	$title_name=$result['name'];
	if ($link=='index') $title_name='';
?>