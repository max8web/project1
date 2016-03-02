<?	
	$link=(isset($_GET['url']))?$_GET['url']:'index';
	
	$query="SELECT * FROM maintexts WHERE url='$link'";
	$res=mysql_query($query);
	$result=mysql_fetch_array($res);
	
	$fon='fon';
	$fon=$result['fon'];
	$title_name=$result['name'];
	if ($link=='index') $title_name='';
	
	$a1='';$a2='';$a3='';$a4='';$a5='';
	$link_a="class='topmenu_active'";
	switch ($_SERVER['REQUEST_URI']) {
		case "/": $a1=$link_a; break;
		case "/index.php?url=about_company": $a2=$link_a ; break;
		case "/works.php?url=works": $a3=$link_a ; break;
		case "/index.php?url=vacancy": $a4=$link_a ; break;
		case "/index.php?url=contacts": $a5=$link_a ; break;
	}
?>