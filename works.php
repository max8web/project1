<?
	require_once ('templates/top.php');	
?>
	
	<h2>Наши работы</h2>
	
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
	while ($row=mysql_fetch_array($res)){
		echo "<div class='works'>";
		echo "<img src='/media/uploads/".$row['picture']."'/>";
		echo "<div class='works_name'>".$row['name']."</div>";
		echo "<div class='works_price'>Цена: ".$row['price']."</div>";
		echo "<div class='works_basket'><a href='admin/works/add.php?id=".$row['id']."'>В корзину</a></div>";
		echo "</div>";
	}

?>	
		<br style="clear:both;">
	</div>
	
<? require_once ('templates/bottom.php'); ?>