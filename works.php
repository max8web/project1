<?
	require_once ('templates/top.php');	
?>
	
	<h2>Наши работы</h2>
	
	<div class="content">
		<p>
		Ниже, вы можете ознакомиться с нашими работами и приобрести их:
		</p>	

<?
	$query="SELECT * FROM products WHERE showhide='show'";
	$res=mysql_query($query);
	if (!$res) {
		exit($query);
	}
	while ($row=mysql_fetch_array($res)){
		echo "<div class='works'><div class='works_content'>";
		echo "<img src='/media/uploads/".$row['picture']."'/>";
		echo "<div class='works_name'>".$row['name']."</div>";
		echo "<div class='works_price'>Цена: ".$row['price']."</div>";
		echo "<div class='works_basket'>В корзину</div>";
		echo "</div></div>";
	}

?>	
		<div class="works">
			<div class="works_content">
				<img src="/media/uploads/no_image.jpg"/>
				<div class="works_name">Название</div>
				<div class="works_price">Цена: 100</div>
				<div class="works_basket">В корзину</div>
			</div>
		</div>
	
	</div>
	
<? require_once ('templates/bottom.php'); ?>