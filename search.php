<? 
	require_once ("templates/top.php"); 
	
	$name=(isset($_GET['search']))?trim($_GET['search']):'';
	$query="SELECT * FROM products WHERE name like '%".$name."%' LIMIT 50";
	$res=mysql_query($query);
	if (!$res) {
		exit($query);
	}
?>
	
	<h2>Поиск по товарам</h2>
	
	<div class="content">
		
<?
	$count=mysql_num_rows($res);
	if ($count>0) {
		require ('templates/works_all.php');
	}
	else {
		echo "".$name." - не найден!";
	}
?>
		
		<br style="clear:both;">
	</div>
	
<? require_once ("templates/bottom.php"); ?>