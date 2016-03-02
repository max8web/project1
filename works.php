<?
	require_once ('templates/top.php');	
?>
	
	<h2>Наши товары</h2>
	
	<div class="content">
		<p>
		Ниже, вы можете ознакомиться с нашими работами, а также приобрести их:
		</p>	
		
<?
	$query="SELECT * FROM products WHERE showhide='show'";
	$res=mysql_query($query);
	if (!$res) {
		exit($query);
	}
	
	require ('templates/works_all.php');

?>	
		<br style="clear:both;">
	</div>
	
<? require_once ('templates/bottom.php'); ?>