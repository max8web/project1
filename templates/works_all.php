<?	
	while ($row=mysql_fetch_array($res)){
		echo "<div class='works'>";
		echo "<img src='/media/uploads/".$row['picture']."'/>";
		echo "<div class='works_name'>".$row['name']."</div>";
		echo "<div class='works_price'>Цена: ".$row['price']."</div>";
		echo "<div class='works_basket'><a href='admin/works/add.php?id=".$row['id']."'>В корзину</a></div>";
		echo "<a href='#' class='product' data-id=".$row['id'].">Просмотр</a>";
		echo "</div>";
	}
?>