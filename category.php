<?
	require_once ('libs/middleware_auth.php');
	require_once ('libs/middleware_admin_auth.php');
	require_once ('templates/top.php');	
?>
	<h2>Управление категориями</h2>
	
	<div class="content">

		<form method="POST" action="category.php">
			<p><strong>Добавление новой категории</strong></p>			
<?
				
	if ($_POST) {
		$name=trim($_POST['name']);
		$query="SELECT * FROM catalogs WHERE name='$name'";
		$res=mysql_query($query);
		if (!$res) {
			exit ($query);
		}
		$result=mysql_fetch_array($res);
		if (!$name) {
			echo "<p class='error'>Название категории - обязательно для заполнения!</p>";
		}
		elseif ($result['id']) {
			echo "<p class='error'>Категория: ".$result['name']." - уже существует!</p>";
		}	
		else {
			$query="INSERT INTO catalogs (name) VALUES ('$name')";
			$res=mysql_query($query);
			if (!$res) {
				exit ($query);
			}
			echo "<p class='status_ok'>Категория: ".$name." - добавлена в базу.</p>";
		}
	}
?>
			<div class="form-group">
			<label for="examplename">Название</label>
			<input type="text" class="form-control" id="examplename" name="name">
			</div>
		
			<button type="submit" class="btn btn-default">Добавить</button>
		
		</form>
		
<?
	$query="SELECT * FROM catalogs";
	$res=mysql_query($query);
	if (!$res) {
		exit ($query);
	}
	echo "<table class='content_table1'><tr><th>Название категории</th><th>Товары категории</th><th>Действия</th></tr>";
	while ($result=mysql_fetch_array($res)) {
		$query2="SELECT * FROM prices WHERE cat_id='".$result['id']."'";
		$res2=mysql_query($query2);		
		echo "
			<tr>
				<td>".$result['name']."</td>
				<td>
					<table class='content_table2'><tr><th>Изображение</th><th>Название</th><th>Цена</th><th>Наличие</th><th>Действия</th></tr>
				";
		while ($result2=mysql_fetch_array($res2)) {
			$query3="SELECT * FROM products WHERE name='".$result2['name']."'";
			$res3=mysql_query($query3);
			$result3=mysql_fetch_array($res3);
			$picture=($result3['picture'])?$result3['picture']:'no_image.jpg';
			echo "
						<tr>
							<td><img src='/media/uploads/".$picture."' /></td>
							<td>".$result2['name']."</td>
							<td>".$result2['price']."</td>
							<td>".$result2['availability']."</td>
							<td><a href='/admin/category/delete_card.php?id=".$result2['id']."'>Удалить</a></td>
						</tr>
				";
		}
		echo "
					</table>
				</td>
				<td><a href='/admin/category/delete.php?id=".$result['id']."'>Удалить категорию</a></td>
			</tr>
			";
	}
	echo "</table>";
?>

	</div>	
	
<? require_once ('templates/bottom.php'); ?>